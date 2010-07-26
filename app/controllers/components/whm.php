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
	 * @param bool Return SimpleXMLElement? Default=True
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
	 */
	function signup($serverid, $reseller, $username, $email, $password, $domain, $plan) {
		$reseller = ($reseller ? true : false);
		$plan = intval($plan);
		
		$plan = $this->Plan->find("first",
			array(
				"condition" => array(
					"Plan.id" => $plan
				),
				"recursive" => false
			)
		);
		
		if(!$plan or $plan["Plan"]["disabled"]) return false;
		
		return true; // FIXME: Stub
	}
}