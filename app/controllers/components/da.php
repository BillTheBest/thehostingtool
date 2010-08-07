<?php
/**
 * TheHostingTool 2.0 - Specialist Free Host Management Tool
 * @author Jimmie Lin <jimmie.lin@gmail.com>
 * @license Creative Commons Attribution-ShareAlike 3.0 Unported <http://creativecommons.org/licenses/by-sa/3.0/>
 */
 

class DaComponent extends Object {
	var $name = "DaComponent";

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
	 * @param string PostFields. Not sure what this is - Jimmie
	 */
	function remote($url, $postfields) {
		if($this->serverid === false) return false;
		$data = $this->server_details($this->serverid);
		if(!$data) return false;

		/*
		 * The following cURL Script was written by Jonny H. for THT 1.x. (DirectAdmin Version).
		 * The code was rewritten and adapted to new standards by Jimmie Lin on 7th August, 2010.
		 * All code that has not been changed is (C) their respective authors. The code that has been changed is (C) Jimmie Lin.
		 */

		if(!function_exists("curl_init")) { // need to implement a fallback
			/*
			* Note From Kevin: Screw file_get_contents(). I'll write up a
			* connection to it using the core socket functions. file_get_contents()
			* is way too simple for our purposes. It may turn out that this method is
			* faster than cURL. Although, I doubt it.
			*/
		}
		else {
			$ch = curl_init();
			$hostname = gethostbyname($data["Server"]["hostname"]);
			
			$ServerUri = "http://".$data["Server"]["username"].":".$data["Server"]["access_keyhash"]."@".$data["Server"]["hostname"].":2222".$url;
			curl_setopt($ch, CURLOPT_URL, $ServerUri);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);

			$Result = curl_exec($ch);
			curl_close($ch);
			
			// Process the data.
			$split = explode("&", $Result);
			foreach($split as $value) {
				$stuff = explode("=", $value);
				$final[$stuff[0]] = $stuff[1];
			}
			
			return $final;
		}
	}
	// TODO: Implement All Other Functions
}