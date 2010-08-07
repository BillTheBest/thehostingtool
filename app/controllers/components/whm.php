<?php
/**
 * TheHostingTool 2.0 - Specialist Free Host Management Tool
 * @author Jimmie Lin <jimmie.lin@gmail.com>
 * @license Creative Commons Attribution-ShareAlike 3.0 Unported <http://creativecommons.org/licenses/by-sa/3.0/>
 */

class WhmComponent extends Object {
	var $name = "WhmComponent";
	
	var $serverid = false;
	
	function __construct() {
		parent::__construct();
		// FIXME: Using Undocumented ClassRegistry Function
		$this->Server = ClassRegistry::init("Server");
		$this->Plan = ClassRegistry::init("Plan");
	}
	
	/**
	 * Get Server Details.
	 * @param int Server ID.
	 */
	function server_details($ServerID) {
		$ServerID = intval($ServerID);
		$Query = $this->Server->find("first", 
			array(
				"condition" => array(
					"Server.id" => $ServerID
				),
				"recursive" => -1
			)
		);
		return $Query;
	}
	
	/**
	 * Connect to the server and do operations.
	 * @param string The URL to operate.
	 * @param bool Use HTTPS? Default=False
	 * @param bool Return after the operation is complete, and do not parse data? Default=False
	 * @param bool Return SimpleXMLElement? Default=True. Should *always* be true.
	 */
	function remote($url, $https = false, $kill = false, $xml = true) {
		if($this->serverid === false) return false;
		$data = $this->server_details($this->serverid);
		if(!$data) return false;
		
		/*
		 * The following cURL Script was written by Krakjoe and Kevin M. in THT 1.x.
		 * The code was rewritten and adapted to new standards by Jimmie Lin on 25th July, 2010.
		 * All code that has not been changed is (C) their respective authors.
		 */
		$AccessHash = preg_replace("'(\r|\n)'", "", $data["Server"]["access_key"]);
		$AuthenticationString = $data["Server"]["username"].":".$AccessHash;
		
		if(!function_exists("curl_init")) { // fall back to file_get_contents, ugly way.
			// TODO:
			/*
			* Note From Kevin: Screw file_get_contents(). I'll write up a
			* connection to it using the core socket functions. file_get_contents()
			* is way too simple for our purposes. It may turn out that this method is
			* faster than cURL. Although, I doubt it.
			*/
		}
		else {
			$CurlConncetion = curl_init();
			if($https) {
				$ServerUri = "https://".$data["Server"]["hostname"].":2087".$url;
				curl_setopt($CurlConnection, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
				curl_setopt($CurlConnection, CURLOPT_SSL_VERIFYPEER, false);
			}
			else {
				$ServerUri = "http://".$data["Server"]["hostname"].":2086".$url;
			}
			curl_setopt($CurlConnection, CURLOPT_URL, $ServerUri);
			curl_setopt($CurlConnection, CURLOPT_HEADER, 0);
			curl_setopt($CurlConnection, CURLOPT_RETURNTRANSFER, 1);
			$CurlHeaders[0] = "Authorization: WHM ".$AuthenticationString;
			curl_setopt($CurlConnection, CURL_HTTPHEADER, $CurlHeaders);	
			
			$Data = curl_exec($CurlConnection);
			curl_close($CurlConnection);
		}
		
		// Do we terminate now?
		if($kill) return true;
		elseif(!$xml) {
			return $Data;
		}
		else {
			if(!class_exists("SimpleXMLElement")) return $Data;
			return new SimpleXMLElement($Data);
		}
	}
	
	
	/**
	 * Create a WHM Account / Sign up.
	 * $server, $reseller, $user = '', $email = '', $pass = ''
	 * @param  int  Server ID.
	 * @param  bool Is a reseller?
	 * @param  string Username.
	 * @param  string Email. 
	 * @param  string Password.
	 * @param  string Domain.
	 * @param  id Plan.
	 * @param  bool Use HTTPs when connecting? Default=false
	 */
	function signup($serverid, $reseller, $username, $email, $password, $domain, $plan, $usehttps = false) {
		$reseller = ($reseller ? true : false);
		$plan = intval($plan);
		
		// set our server
		$this->serverid = intval($serverid);
		
		$plan = $this->Plan->find("first",
			array(
				"condition" => array(
					"Plan.id" => $plan
				),
				"recursive" => false
			)
		);
		
		if(!$plan or $plan["Plan"]["disabled"]) return false;
		$plan_name = $plan["Plan"]["backend"];
		
		$actionUri = "/xml-api/createacct?username={$username}&password={$password}&domain={$domain}&plan={$plan_name}&contactemail={$email}";
			if($reseller == true) $actionUri .= "&reseller=1";
		
		$command = $this->remote($actionUri, $usehttps);
		// wait, check for some really stupid things here
		if($command === false) return false;
		
		if($command->result->status == 1) return true;
		else {
			// save the error here
			$this->lastErrorMessage = $command->result->statusmsg;
			return false;
		}
	}
	
	/**
	 * Suspends a user.
	 * @param string Username
	 * @param int Server ID
	 * @param string The reason. Default="" (blank)
	 * @param bool use https when connecting? default=false
	 */
	function suspend($user, $server, $reason = "", $usehttps = false) {
		$this->serverid = intval($server);
		$actionUri = "/xml-api/suspendacct?user=".strtolower($user);
			if(!empty($reason)) $actionUri .= "&reason=".$reason;
		
		$command = $this->remote($actionUri, $usehttps);
		if(!$command) return false;
		
		return ($command->result->status == 1);
	}
	
	/**
	 * UnSuspends a user.
	 * @param string Username
	 * @param int Server ID
	 * @param bool use https when connecting? default=false
	 */
	function unsuspend($user, $server, $usehttps = false) {
		$this->serverid = intval($server);
		$actionUri = "/xml-api/unsuspendacct?user=".strtolower($user);
		
		$command = $this->remote($actionUri, $usehttps);
		if(!$command) return false;
		
		return ($command->result->status == 1);
	}
	
	/**
	 * Terminates a user.
	 * @param string  Username
	 * @param int Server ID
	 * @param bool use https when connecting? default=false
	 */
	function terminate($user, $server, $usehttps = false) {
		$this->serverid = intval($server);
		$actionUri = "/xml-api/removeacct?user=".strtolower($user);
		$command = $this->remote($actionUri, $usehttps, true);
		
		return ($command === true);
	}
	
	// TODO: implement listAccs
	
	/**
	 * Changes a user's password.
	 * @param string Username
	 * @param int  Server ID
	 * @param string New Password
	 * @param bool Use HTTPS when connecting? default=false
	 */
	public function changePassword($user, $server, $newPassword, $usehttps = false) {
		$this->serverid = $server;
		$actionUri = '/xml-api/passwd?user='.$user.'&pass='.$newPassword;
		$command = $this->remote($action, $usehttps);
		if(!$command) return false;
		
		if($command->passwd->status == 1) {
			return true;
		}
		else {
			if(isset($command->passwd->statusmsg)) {
				$this->lastErrorMessage = $command->passwd->statusmsg;
				return false;
			}
			else {
				$this->lastErrorMessage = "unknown error";
				return false;
			}
		}
	}
}