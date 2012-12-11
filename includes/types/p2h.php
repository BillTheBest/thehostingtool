<?php
//////////////////////////////
// The Hosting Tool
// Post2Host - THT Type
// By Jonny H and Kevin M
// Released under the GNU-GPL
//////////////////////////////

//Check if called by script
if(THT != 1){die();}

// Create the class
class p2h {

	public $acpForm = array(), $orderForm = array(), $acpNav = array(), $acpSubNav = array(); // The HTML Forms arrays
	public $signup = true; // Does this type have a signup function?
	public $cron = true; // Do we have a cron?
	public $acpBox = true; // Want to show a box thing?
	public $clientBox = true; // Show a box in client cp?
	public $name = "Post2Host"; // Human readable name of the package.
	public $warnDate = 20; // The day of the month to warn users about posting.

	private $con; // Forum SQL

	// Start the functions //

	public function __construct() { // Assign stuff to variables on creation
		global $main, $db;
		$this->acpForm[] = array("Signup Posts", '<input name="signup" type="text" id="signup" size="5" onkeypress="return onlyNumbers();" />', 'signup');
		$this->acpForm[] = array("Monthly Posts", '<input name="monthly" type="text" id="monthly" size="5" onkeypress="return onlyNumbers();" />', 'monthly');
		$this->orderForm[] = array("Forum Username", '<input name="type_fuser" type="text" id="type_fuser" />', 'fuser');
		$this->orderForm[] = array("Forum Password", '<input name="type_fpass" type="password" id="type_fpass" />', 'fpass');
		$query = $db->query("SELECT * FROM `<PRE>config` WHERE `name` LIKE 'p2hforum;:;%'");
		while($data = $db->fetch_array($query)) {
			$content = explode(";:;", $data['name']);
			if($fname != $content[2]) {
				$values[] = array($content[2], $content[2]);
			}
			$fname = $content[2];
		}
		$this->acpForm[] = array("Forum", $main->dropDown("forum", $values), 'forum');
		$this->acpNav[] = array("P2H Forums", "forums", "lightning.png", "P2H Forums");
		$this->clientNav[] = array("Forum Posting", "forums", "lightning.png", "Forum Posting");
		$this->warnDate = $db->config("p2hwarndate");
	}

	public function acpPage() {
		global $main, $style, $db;
		switch($main->getvar['do']) {
			default:
				if($_POST) {
					foreach($main->postvar as $key => $value) {
						if($value == "" && !$n) {
							if($key != "prefix") {
							$main->errors("Please fill in all the fields!<br>");
							$n++;
							}
						}
					}
					if(!$n) {
						if(strpos($main->postvar['name'], ';:;') !== false) {
							$main->errors("You cannot have <code>;:;</code> in your database name! Sorry!<br>");
							$array['CONTENT'] = $style->replaceVar("tpl/addforum.tpl");
							break;
						}
						$forumcon = @mysql_connect($main->postvar['hostname'], $main->postvar['username'], $main->postvar['password'], true);
						if(!$forumcon) {
							$main->errors("Couldn't connect to the MySQL server...<br>");
						}
						else {
							$select = @mysql_select_db($main->postvar['database'], $forumcon);
							if(!$select) {
								$main->errors("Couldn't select the database. Does the provided user have access to that database? Does it even exist?<br>");
							}
							else {
								$query = $this->queryForums($main->postvar['name']);
								if($db->num_rows($query) != 0) {
									$main->errors("This forum name has already been used! Please choose a new one.<br>");
								}
								else {
									$db->query("INSERT INTO `<PRE>config` (name, value) VALUES('p2hforum;:;username;:;{$main->postvar['name']}', '{$main->postvar['username']}')");
									$db->query("INSERT INTO `<PRE>config` (name, value) VALUES('p2hforum;:;password;:;{$main->postvar['name']}', '{$main->postvar['password']}')");
									$db->query("INSERT INTO `<PRE>config` (name, value) VALUES('p2hforum;:;database;:;{$main->postvar['name']}', '{$main->postvar['database']}')");
									$db->query("INSERT INTO `<PRE>config` (name, value) VALUES('p2hforum;:;hostname;:;{$main->postvar['name']}', '{$main->postvar['hostname']}')");
									$db->query("INSERT INTO `<PRE>config` (name, value) VALUES('p2hforum;:;prefix;:;{$main->postvar['name']}', '{$main->postvar['prefix']}')");
									$db->query("INSERT INTO `<PRE>config` (name, value) VALUES('p2hforum;:;type;:;{$main->postvar['name']}', '{$main->postvar['forum']}')");
									$db->query("INSERT INTO `<PRE>config` (name, value) VALUES('p2hforum;:;url;:;{$main->postvar['name']}', '{$main->postvar['url']}')");
									$main->errors("Your forum has been added!<br>");
								}
							}
						}
					}
				}
				$array['CONTENT'] = $style->replaceVar("tpl/addforum.tpl");
				break;

			case "edit":
				$query = $this->queryForums();
				if($db->num_rows($query) == 0) {
					$array['CONTENT'] = "There are no forums to edit!<br>";
				}
				else {
					if($main->getvar['name']) {
						if($_POST) {
							foreach($main->postvar as $key => $value) {
								if($value == "" && !$n && $key != "password") {
									$main->errors("Please fill in all the fields!<br>");
									$n++;
								}
							}
							if(!$n) {
								if(strpos($main->postvar['name'], ';:;') !== false) {
									$main->errors("You cannot have <code>;:;</code> in your database name! Sorry!");
									$array['CONTENT'] = $style->replaceVar("tpl/addforum.tpl");
									break;
								}
								$forumcon = @mysql_connect($main->postvar['hostname'], $main->postvar['username'], $main->postvar['password'], true);
								if(!$forumcon) {
									$main->errors("Couldn't connect to the MySQL server...<br>");
								}else{
									$select = @mysql_select_db($main->postvar['database'], $forumcon);
									if(!$select) {
										$main->errors("Couldn't select the database. Does the provided user have access to that database? Does it even exist?<br>");
									}else{
										$query = $this->queryForums($main->postvar['name']);
										if($db->num_rows($query) == 0) {
											$main->errors("This forum name does not exist.<br>");
										}else{
											$db->query("UPDATE `<PRE>config` SET `value` = '{$main->postvar['username']}' WHERE `name` = 'p2hforum;:;username;:;{$main->getvar['name']}'");
											$db->query("UPDATE `<PRE>config` SET `value` = '{$main->postvar['database']}' WHERE `name` = 'p2hforum;:;database;:;{$main->getvar['name']}'");
											$db->query("UPDATE `<PRE>config` SET `value` = '{$main->postvar['hostname']}' WHERE `name` = 'p2hforum;:;hostname;:;{$main->getvar['name']}'");
											$db->query("UPDATE `<PRE>config` SET `value` = '{$main->postvar['prefix']}' WHERE `name` = 'p2hforum;:;prefix;:;{$main->getvar['name']}'");
											$db->query("UPDATE `<PRE>config` SET `value` = '{$main->postvar['url']}' WHERE `name` = 'p2hforum;:;url;:;{$main->getvar['name']}'");
											if($main->postvar['password']) {
												$db->query("UPDATE `<PRE>config` SET `value` = '{$main->postvar['password']}' WHERE `name` = 'p2hforum;:;password;:;{$main->getvar['name']}'");
											}
											$main->errors("Forum Edited!<br>");
										}
									}
								}
							}
						}
						$forumdata = $this->forumData($main->getvar['name']);
						$array2['USER'] = $forumdata['username'];
						$array2['DB'] = $forumdata['database'];
						$array2['HOST'] = $forumdata['hostname'];
						$array2['NAME'] = $main->getvar['name'];
						$array2['PREFIX'] = $forumdata['prefix'];
						$array2['URL'] = $forumdata['url'];
						$array['CONTENT'] = $style->replaceVar("tpl/editforum.tpl", $array2);
					}else{
						$array['CONTENT'] .= "<ERRORS>";
						while($data = $db->fetch_array($query)) {
							$content = explode(";:;", $data['name']);
							if($fname != $content[2]) {
								$array['CONTENT'] .= $main->sub("<strong>".$content[2]."</strong>", '<a href="?page=type&type=p2h&sub=forums&do=edit&name='.$content[2].'"><img src="'. URL .'themes/icons/pencil.png"></a>');
							}
							$fname = $content[2];
						}
					}
				}
				break;

			case "delete":
				$query = $this->queryForums();
				if($db->num_rows($query) == 0) {
					$array['CONTENT'] = "There are no forums to delete!<br>";
				}
				else {
					if($main->getvar['name']) {
						$db->query("DELETE FROM `<PRE>config` WHERE `name` LIKE 'p2hforum;:;%;:;{$main->getvar['name']}'");
						$main->errors("Forum deleted!<br>");
						$query = $this->queryForums();
					}
					$array['CONTENT'] .= "<ERRORS>";
					while($data = $db->fetch_array($query)) {
						$content = explode(";:;", $data['name']);
						if($fname != $content[2]) {
							$array['CONTENT'] .= $main->sub("<strong>".$content[2]."</strong>", '<a href="?page=type&type=p2h&sub=forums&do=delete&name='.$content[2].'"><img src="'. URL .'themes/icons/delete.png"></a>');
						}
						$fname = $content[2];
					}
				}
				break;

			case "config":
				if($_POST) {
					foreach($main->postvar as $key => $value) {
						if($value == "" && !$n && $key != "password") {
							$main->errors("Please fill in all the fields!<br>");
							$n++;
						}
					}
					if(!$n) {
						if(!is_numeric($main->postvar['p2hwarndate']) || !($main->postvar['p2hwarndate'] < 28)){
							$main->errors("The P2H Warn date must be a number less than 28.<br>");
						}else{
							$db->query("UPDATE `<PRE>config` SET value = '".$main->postvar['p2hwarndate']."' WHERE name = 'p2hwarndate' LIMIT 1");
							$main->errors("Configuration updated.<br>");
						}
					}
				}
				$config_array['WARNDATE'] = $db->config("p2hwarndate");
				$array['CONTENT'] = $style->replaceVar("tpl/forumconfig.tpl", $config_array);
				break;
		}
		echo $style->replaceVar("tpl/manageforums.tpl", $array);
	}

	public function signup() {
		global $db, $main, $type;
		$fuser = $main->getvar['type_fuser'];
		$forum = $this->determineForum($main->getvar['package']);
		$this->con = $this->forumCon($forum);
		$details = $this->forumData($forum);
		$select = $db->query("SELECT * FROM `<PRE>user_packs`");
		while($data = $db->fetch_array($select)) {
			$pdetails = $type->userAdditional($data['id']);
			if($pdetails['fuser'] == $fuser) {
				$n++;
			}
		}
		if(!$n) {
			switch($this->checkSignup($details['type'], $details['prefix'])) {
				case 1:
					//What we do here?
					$main->getvar['type_fpass'] = 0;
					break;

				case 0:
					$neededPosts = (int)$this->getSignup($main->getvar['package'], $main->getvar['coupon']);
					$s = "s";
					if($neededPosts === 1) {
						$s = "";
					}
					return "You haven't posted enough to be eligible for this package. You'll need at least $neededPosts post$s.";
					break;

				case 3:
					return "The provided username <em>".$fuser."</em> does not exist.";
					break;

				case 4:
					return "The provided password does not match the username.";
					break;
			}
		}
		else {
			return "That forum username is already used!";
		}
	}

	public function cron() {
		global $db, $main, $type, $server, $email;
		global $navens_coupons, $sdk; //Added by Na'vens Coupons 1
		// Time to deal with possible bad values
		if($db->config("p2hcheck") == "") {
			// Probably a new install. Cron has never run before.
			$db->updateConfig("p2hcheck", "0:0:0");
		}
		$checkdate = explode(":", $db->config("p2hcheck"));
		if($checkdate === array($db->config("p2hcheck"))) {
			// ":" wasn't found anywhere! Oh noes! Gonna' append it.
			$db->updateConfig("p2hcheck", $db->config("p2hcheck") . ":0:0");
			$checkdate = explode(":", $db->config("p2hcheck"));
		}
		elseif(array_key_exists(1, $checkdate)) {
			if($checkdate[1] == "") {
				// Probably nothing after the colon. Append 0.
				$db->updateConfig("p2hcheck", $checkdate[0] . ":0:0");
				$checkdate = explode(":", $db->config("p2hcheck"));
			}
		}
		// If today is the last day of the month (and hasn't been run yet)
		if(date("d") == date("t") && ((int)$checkdate[0] < (int)date("m") || ((int)$checkdate[0] == (int)date("m") && $checkdate[2] == "0"))) {
			$query = $db->query("SELECT * FROM `<PRE>user_packs`");
			while($data = $db->fetch_array($query)) {
				$ptype = $type->determineType($data['pid']);
				if($ptype == "p2h") {
					$fuser = $type->userAdditional($data['id']);
					$forum = $this->determineForum($data['pid']);
					$fdetails = $this->forumData($forum);
					$this->con = $this->forumCon($forum);
					$posts =  $navens_coupons->totalposts($data['userid']);
					$mposts = $this->getMonthly($data['pid'], $data['userid']);
					if($posts < $mposts) {
						// If the user haven't posted enough...
						$user = $db->client($data['userid']);
						$userPack = $db->query("SELECT * FROM `<PRE>user_packs` WHERE `userid` = '{$data['id']}'");
						// Redeclaration should free the memory used by the query...
						$userPack = $db->fetch_array($userPack);

						$grace_period = $navens_coupons->coupconfig("p2hgraceperiod"); //The grace period in days
						$grace_period = $grace_period*24*60*60;
						if(strtotime(date("Y-m-d")." 00:00:00") > $userPack['signup']+$grace_period) { //This gives the user a grace period.
							// Suspend the user.
							$server->suspend($data['id'], "Only posted $posts post out of the required $mposts monthly posts");
							// Output to the cron.
							echo "<strong>".$user['user']." (".$fuser['fuser']."):</strong> Suspended for not posting the required amount. ($posts out of $mposts)<br />";
						}
					}
				}
			}
			// We're done for this month. Prepare for the next.
			if(date("m") == 12) {
				$checkmonth = "0";
			}
			else {
				$checkmonth = date("m");
			}
			//$db->updateConfig("p2hcheck", $checkmonth.":0:1");
		}
		// If today is the warn day (and hasn't been run yet)
		elseif((int)date("d") == $this->warnDate && (int)$checkdate[1] != 1) {
			$query = $db->query("SELECT * FROM `<PRE>user_packs`");
			while($data = $db->fetch_array($query)) {
				$ptype = $type->determineType($data['pid']);
				if($ptype == "p2h") {
					$fuser = $type->userAdditional($data['id']);
					$forum = $this->determineForum($data['pid']);
					$fdetails = $this->forumData($forum);
					$this->con = $this->forumCon($forum);
					$posts =  $navens_coupons->totalposts($data['userid']);
					$posts_text = $sdk->s($posts, " Post");
					$mposts = $this->getMonthly($data['pid'], $data['userid']);
					$mposts_text = $sdk->s($mposts, " post");

					$query_url = $db->query("SELECT * FROM `<PRE>config` WHERE `name` LIKE 'p2hforum;:;url;:;".$forum."'");
					$data_url = $db->fetch_array($query_url);
					$furl = $data_url['value'];
					// If the user hasn't posted enough yet
					$grace_period = $navens_coupons->coupconfig("p2hgraceperiod"); //The grace period in days
					$grace_period = $grace_period*24*60*60;
					$userinfo = $db->client($data['userid']);
					$signup_date = $userinfo['signup'];

					if(date("m") != date("m", $signup_date+$grace_period)){  //If they won't be suspended on this months check, then we don't need to warn them.
						$no_email = 1;
					}

					if($posts < $mposts && !$no_email) {
						$user = $db->client($data['userid']);
						$userPack = $db->query("SELECT * FROM `<PRE>user_packs` WHERE `userid` = '{$data['id']}'");
						$userPack = $db->fetch_array($userPack);
						$emaildata = $db->emailTemplate("p2hwarning");
						$array['USERPOSTS'] = $posts;
						$array['MONTHLY'] = $mposts;
						$array['URL'] = $furl;
						// Warn the user that they still have some more posting to do!
						$email->send($user['email'], $emaildata['subject'], $emaildata['content'], $array);
						// Output to the cron.
						echo "<strong>".$user['user']." (".$fuser['fuser']."):</strong> Warned for not yet posting the required monthly amount. ($posts_text posted out of $mposts_text/month)<br />";
					}
				}
			}
			// This prevents the post warnings from being sent again today/this month.
			$db->updateConfig("p2hcheck", $checkdate[0].":1:0");
		}
	}

	public function acpBox() {
		global $main, $db, $type;
		$box[0] = "Forum Posting:<br />";
		$user = $main->getvar['do'];
		$query = $db->query("SELECT * FROM `<PRE>user_packs` WHERE `userid` = '{$user}'");
		$data = $db->fetch_array($query);
		$forum = $this->determineForum($data['pid']);
		$user = $type->userAdditional($data['id']);
		$fdetails = $this->forumData($forum);
		$this->con = $this->forumCon($forum);
		$posts = $this->checkMonthly($fdetails['type'], $user['fuser'], $fdetails['prefix']);
		$box[1] = $posts ." (". $this->getMonthly($data['pid'], $data['userid']) ." Needed)<br />Forum Username: ". $user['fuser'];
		return $box;
	}

	public function clientBox() {
		global $main, $db, $type;
		$box[0] = "Forum Posting:<br />";
		$user = $_SESSION['cuser'];
		$query = $db->query("SELECT * FROM `<PRE>user_packs` WHERE `userid` = '{$user}'");
		$data = $db->fetch_array($query);
		$forum = $this->determineForum($data['pid']);
		$user = $type->userAdditional($data['id']);
		$fdetails = $this->forumData($forum);
		$this->con = $this->forumCon($forum);
		$posts = $this->checkMonthly($fdetails['type'], $user['fuser'], $fdetails['prefix']);
		$box[1] = $posts ." (". $this->getMonthly($data['pid']) ." Needed)<br />Forum Username: ". $user['fuser'];
		return $box;
	}

	public function clientPage() {
		global $main, $db, $type, $style;
		global $navens_coupons, $sdk;

		if(is_numeric($main->getvar['remove'])){
			$navens_coupons->remove_p2h_coupon($main->getvar['remove']);
			$main->redirect("?page=type&type=p2h&sub=forums");
			exit;
		}

		if($_POST['submitaddcoupon']){

			if(!$main->postvar['addcoupon']){
				$main->errors("Please enter a coupon code.");
			}else{

				$coupcode = $main->postvar['addcoupon'];
				$pack_data = $sdk->uidtopack();
				$packid = $pack_data['packages']['id'];
				$multi_coupons = $navens_coupons->coupconfig("multicoupons");

				$coupon_info = $navens_coupons->coupon_data($coupcode);
				$coupid = $coupon_info['id'];

				$use_coupon = $navens_coupons->use_coupon($coupid, $packid);
				if(!$use_coupon){
					if(!$multi_coupons){
						$main->errors("Coupon code entered was invalid or you're already using a coupon.");
					}else{
						$main->errors("Coupon code entered was invalid.");
					}
				}else{
					$main->redirect("?page=type&type=p2h&sub=forums");
				}
			}
		}

		$userid = $_SESSION['cuser'];
		$query = $db->query("SELECT * FROM `<PRE>user_packs` WHERE `userid` = '{$userid}'");
		$data = $db->fetch_array($query);
		$forum = $this->determineForum($data['pid']);
		$user = $type->userAdditional($data['id']);
		$fdetails = $this->forumData($forum);
		$this->con = $this->forumCon($forum);
		$posts = $this->checkMonthly($fdetails['type'], $user['fuser'], $fdetails['prefix']);
		$total_posts =  $navens_coupons->totalposts($userid);
		$p2h_payments = $sdk->tdata("mod_navens_coupons_p2h", "uid", $userid);
		$package_info = $sdk->uidtopack($userid);
		$user_posts =  $this->userposts($package_info['packages']['id'], $package_info['user_packs']['id']);
		$monthly = $this->getMonthly($data['pid']);

		if(empty($p2h_payments)){
			$p2h_pay_array = array(
				"uid"      => $userid,
				"amt_paid" => $user_posts,
				"txn"      => $package_info['uadditional']['fuser'],
				"datepaid" => time(),
				"gateway"  => $package_info['additional']['forum']
			);

			$sdk->insert("mod_navens_coupons_p2h", $p2h_pay_array);
			$p2h_payments = $sdk->tdata("mod_navens_coupons_p2h", "uid", $userid);
		}

		$amt_paid = $p2h_payments['amt_paid'];
		$txn      = $p2h_payments['txn'];
		$datepaid = $p2h_payments['datepaid'];
		$gateway  = $p2h_payments['gateway'];

		$amt_paid = explode(",", $amt_paid);
		$txn      = explode(",", $txn);
		$datepaid = explode(",", $datepaid);
		$gateway  = explode(",", $gateway);

		for($i=0;$i<count($amt_paid);$i++){

			if($txn[$i] == $package_info['uadditional']['fuser']){
				if($amt_paid[$i] != $user_posts){
					$reload = 1;
				}
			$amt_paid[$i] = $user_posts;
			$datepaid[$i] = time();
			}

			$txnlist['PAIDAMOUNT'] = $sdk->s($amt_paid[$i], " Post");
			$txnlist['TXN']        = $txn[$i];
			$txnlist['PAIDDATE']   = $main->convertdate("n/d/Y", $datepaid[$i]);
			$txnlist['GATEWAY']    = $gateway[$i];
			$couparray['TXNS']    .= $navens_coupons->tpl("invoices/txnlist.tpl", $txnlist);

			$paidamts = $paidamts.",".$amt_paid[$i];
			$paidtxn = $paidtxn.",".$txn[$i];
			$paiddate = $paiddate.",".$datepaid[$i];
			$paidgateway = $paidgateway.",".$gateway[$i];
		}
		$paidamts = substr($paidamts, 1, strlen($paidamts));
		$paidtxn = substr($paidtxn, 1, strlen($paidtxn));
		$paiddate = substr($paiddate, 1, strlen($paiddate));
		$paidgateway = substr($paidgateway, 1, strlen($paidgateway));

		$p2h_pay_array = array(
			"amt_paid" => $paidamts,
			"txn"      => $paidtxn,
			"datepaid" => $paiddate,
			"gateway"  => $paidgateway
		);

		$sdk->update("mod_navens_coupons_p2h", $p2h_pay_array, "uid", $userid);
		if($reload){
			$main->redirect("?page=type&type=p2h&sub=forums");
		}

		$couparray['TOTALPAID'] =    $sdk->s($total_posts, " Post");
		$couparray['TRANSACTIONS'] = $navens_coupons->tpl("invoices/invoicetransactions.tpl", $couparray);

		$pack_monthly = $package_info['additional']['monthly'];
		$coupon_total = $pack_monthly - $navens_coupons->get_discount("p2hmonthly", $pack_monthly, $userid);

		$balance = max(0, $monthly-$total_posts);

		$coupons_query = $db->query("SELECT * FROM <PRE>mod_navens_coupons_used WHERE user = '".$_SESSION['cuser']."' AND disabled = '0' ORDER BY `id` ASC");
		while($coupons_used_fetch = $db->fetch_array($coupons_query)){
			$valid_coupon = $navens_coupons->check_expire($coupons_used_fetch['coupcode']);
			if($valid_coupon){

				unset($s);
				if($coupons_used_fetch['p2hmonthlydisc'] != 1){
					$s = "s";
				}

				$coupons['COUPONAMOUNT'] = $coupons_used_fetch['p2hmonthlydisc']." Post".$s;
				$coupons['COUPCODE'] =     $coupons_used_fetch['coupcode'];
				$coupons['REMOVE'] =       $balance == 0 ? "" : '(<a href = "?page=type&type=p2h&sub=forums&remove='.$coupons_used_fetch['id'].'">Remove</a>)';
				$couparray['COUPONSLIST'] .= $navens_coupons->tpl("ptwitch/couponslist.tpl", $coupons);
			}
		}

		if(!$couparray['COUPONSLIST']){
			$couparray['COUPONSLIST'] = "<tr><td></td><td align = 'center'>None</td></tr>";
		}

		if($total_posts >= $monthly){
			$postedcolour = "#779500";
		}else{
			$postedcolour = "#FF7800";
		}

		if($balance == "0"){
			$couparray['ADDCOUPONS'] = "";
			$couparray['PAIDSTATUS'] = "<font color = '#779500'>Paid</font>";
		}else{
			$couparray['ADDCOUPONS'] = $navens_coupons->tpl("ptwitch/addcoupons.tpl");
			$couparray['PAIDSTATUS'] = "<font color = '#FF7800'>Unpaid</font>";
		}

		$couparray['POSTEDCOLOUR'] = $postedcolour;
		$couparray['BASEAMOUNT']   = $sdk->s($pack_monthly, " Post");
		$couparray['COUPONTOTAL']  = $sdk->s($coupon_total, " Post");
		$couparray['USERPOSTED']   = $sdk->s(str_replace("-", "&#8722;", $total_posts), " Post");
		$couparray['TOTALAMOUNT']  = $sdk->s($balance, " Post");


		echo $navens_coupons->tpl("ptwitch/coupons.tpl", $couparray);
	}

	private function forumCon($name) { # Returns a forum sql
		global $main;
		$data = $this->forumData($name);
		$forumcon = @mysql_connect($data['hostname'], $data['username'], $data['password'], true);
		if(!$forumcon) {
			$array['Error'] = "Forum SQL Details incorrect!";
			$array['Forum Name'] = $name;
			$main->error($array);
		}
		else {
			$select = @mysql_select_db($data['database'], $forumcon);
			if(!$select) {
				$array['Error'] = "Couldn't select forum database!";
				$array['Forum Name'] = $name;
				$main->error($array);
			}
			else {
				return $forumcon;
			}
		}
	}

	private function getSignup($id, $coupcode) { # Returns the signup posts for a package
		global $type;
		global $navens_coupons;
		$data = $type->additional($id);
		$coupon_data = $navens_coupons->coupon_data($coupcode);
		$coupon_data['p2hinitdisc'] = $navens_coupons->percent_to_value("p2h", $coupon_data['p2hinittype'], $coupon_data['p2hinitdisc'], $data['signup']);
		$data['signup'] = max(0, $data['signup'] - $coupon_data['p2hinitdisc']);
		return $data['signup'];
	}

	private function getMonthly($id, $user = "") { # Returns the signup posts for a package
		global $type;
		global $navens_coupons, $sdk;
		$data = $type->additional($id);

		if(!$user){
			$user = $_SESSION['cuser'];
		}

		if(!is_numeric($user)){
			$user = $sdk->userid($user);
		}

		$data['monthly'] = $navens_coupons->get_discount("p2hmonthly", $data['monthly'], $user);
		return $data['monthly'];
	}

	private function checkMonthly($forum, $fuser, $prefix) {
		global $main;
		$nmonth = date("m");
		$nyear = date("y");

		switch($forum) {
			case "ipb":
				$n = 0;
				$forumuser = $fuser;
				$select = mysql_query("SELECT * FROM {$prefix}members WHERE `name` = '{$forumuser}'", $this->con);
				$display = mysql_fetch_array($select);
				$dname = $display['members_display_name'];

				//Get Posts
				$sposts = mysql_query("SELECT * FROM {$prefix}posts WHERE `author_name` = '{$dname}'", $this->con);

				//Count with time
				while($data2 = mysql_fetch_array($sposts)) {
					$date = explode(":", $main->convertdate("m:y", $data2['post_date']));
					if($nmonth <= $date[0] && $nyear <= $date[1]) {
						$n++;
					}
				}
				break;
			case "ipb3":
				$n = 0;
				$forumuser = $fuser;
				$select = mysql_query("SELECT * FROM {$prefix}members WHERE `name` = '{$forumuser}'", $this->con);
				$display = mysql_fetch_array($select);
				$dname = $display['members_display_name'];

				//Get Posts
				$sposts = mysql_query("SELECT * FROM {$prefix}posts WHERE `author_name` = '{$dname}'", $this->con);

				//Count with time
				while($data2 = mysql_fetch_array($sposts)) {
					$date = explode(":", $main->convertdate("m:y", $data2['post_date']));
					if($nmonth <= $date[0] && $nyear <= $date[1]) {
						$n++;
					}
				}
				break;

			case "mybb":
				$n = 0;
				$forumuser = $fuser;
				$select = mysql_query("SELECT * FROM {$prefix}posts WHERE `username` = '{$forumuser}'", $this->con);

				while($data2 = mysql_fetch_array($select)) {
					$date = explode(":", $main->convertdate("m:y", $data2['dateline']));
					if($nmonth <= $date[0] && $nyear <= $date[1]) {
						$n++;
					}
				}
				break;

			case "phpbb":
				$n = 0;
				$result = mysql_query("SELECT * FROM `{$prefix}users` WHERE username = '{$fuser}'", $this->con);
				$mem = mysql_fetch_array($result);
				$select = mysql_query("SELECT * FROM {$prefix}posts WHERE `poster_id` = '{$mem['user_id']}'", $this->con);

				while($data2 = mysql_fetch_array($select)) {
					$date = explode(":", $main->convertdate("m:y", $data2['post_time']));
					if($nmonth <= $date[0] && $nyear <= $date[1]) {
						$n++;
					}
				}
				break;

			case "phpbb2":
				$n = 0;
				$result = mysql_query("SELECT * FROM `{$prefix}users` WHERE username = '{$fuser}'", $this->con);
				$mem = mysql_fetch_array($result);
				$select = mysql_query("SELECT * FROM {$prefix}posts WHERE `poster_id` = '{$mem['user_id']}'", $this->con);

				while($data2 = mysql_fetch_array($select)) {
					$date = explode(":", $main->convertdate("m:y", $data2['post_time']));
					if($nmonth <= $date[0] && $nyear <= $date[1]) {
						$n++;
					}
				}
				break;

			case "vb":
				$n = 0;
				$forumuser = $fuser;
				$select = mysql_query("SELECT * FROM {$prefix}post WHERE `username` = '{$forumuser}'", $this->con);

				while($data2 = mysql_fetch_array($select)) {
					$date = explode(":", $main->convertdate("m:y", $data2['dateline']));
					if($nmonth <= $date[0] && $nyear <= $date[1]) {
						$n++;
					}
				}
				break;

			case "smf":
				$n = 0;
				$forumuser = $fuser;
				$select = mysql_query("SELECT * FROM {$prefix}messages WHERE `posterName` = '{$forumuser}'", $this->con);

				while($data2 = mysql_fetch_array($select)) {
					$date = explode(":", $main->convertdate("m:y", $data2['posterTime']));
					if($nmonth <= $date[0] && $nyear <= $date[1]) {
						$n++;
					}
				}
				break;

			case "aef":
				$n = 0;
				$forumuser = $fuser;
				$result = mysql_query("SELECT * FROM `{$prefix}users` WHERE username = '{$fuser}'", $this->con);
				$mem = mysql_fetch_array($result);
				$select = mysql_query("SELECT * FROM {$prefix}posts WHERE `poster_id` = '{$mem['id']}'", $this->con);

				while($data2 = mysql_fetch_array($select)) {
					$date = explode(":", $main->convertdate("m:y", $data2['ptime']));
					if($nmonth <= $date[0] && $nyear <= $date[1]) {
						$n++;
					}
				}
				break;

			case "drupal":
				$n = 0;
				$result = mysql_query("SELECT * FROM `{$prefix}users` WHERE name = '{$fuser}' LIMIT 1", $this->con);
				$mem = mysql_fetch_assoc($result);
				$result = mysql_query("SELECT * FROM `{$prefix}node` WHERE `type` = 'forum' AND `uid` = {$mem["uid"]}", $this->con);
				while($node = mysql_fetch_assoc($result)) {
					$nodes[] = $node;
				}
				//Ack! Loops within loops! =P
				foreach($nodes as $key => $value) {
					$date = explode(":", $main->convertdate("m:y", $value['created']));
					if($nmonth <= $date[0] && $nyear <= $date[1]) {
						$n++;
					}

					$result = mysql_query("SELECT * FROM `{$prefix}comments` WHERE `nid` = {$value["nid"]} AND `uid` = {$mem["uid"]}", $this->con);
					//It messes up if I don't do this.
					unset($comments);
					//
					while($comment = mysql_fetch_assoc($result)) {
						$comments[] = $comment;
					}
					foreach($comments as $key2 => $value2) {
						$date = explode(":", $main->convertdate("m:y", $value2['timestamp']));
						if($nmonth <= $date[0] && $nyear <= $date[1]) {
							$n++;
						}
					}
				}


			break;
		}
		return $n;
	}

	// This function is used to check a forum user when they signup.
	public function checkSignup($forum, $prefix) {
		global $db, $main;
		// The provided forum name.
		$fuser = $main->getvar['type_fuser'];
		// The provided forum password.
		$fpass = $main->getvar['type_fpass'];
		// Gets the number of posts the user needs to signup
		$signup = $this->getSignup($main->getvar['package'], $main->getvar['coupon']);

		if(!$fuser && !$fpass){
			// The provided forum name.
			$fuser = $main->postvar['fuser'];
			// The provided forum password.
			$fpass = $main->postvar['fpass'];
		}

		switch($forum) {
			case "ipb":
				// Look up member
				$result = mysql_query("SELECT * FROM `{$prefix}members` WHERE name = '{$fuser}'", $this->con);
				$member = $db->fetch_array($result);
				$memail = $member['email'];

				//Get Salt
				$select = mysql_query("SELECT * FROM `{$prefix}members_converge` WHERE `converge_email` = '{$memail}'", $this->con);
				$hash = mysql_fetch_array($select);

				if(md5(md5($hash['converge_pass_salt']) . md5($fpass)) == $hash['converge_pass_hash']) {
					if(mysql_num_rows($result) == "1") {
						//Check Posts
						if(stripslashes($signup) <= $member['posts']) {
							return 1;
						}
						//That shit below looks complicated doesn't it lol. I thought the same. To many brackets for my mind.
						else {
							return 0;
						}
					}
					else {
						return 3;
					}
				}
				else {
					return 4;
				}
				break;

			case "ipb3":
				// Look up member
				$result = mysql_query("SELECT * FROM `{$prefix}members` WHERE name = '{$fuser}'", $this->con);
				$member = $db->fetch_array($result);
				$memail = $member['email'];

				//Get Salt
				//$select = mysql_query("SELECT * FROM `{$prefix}members_converge` WHERE `converge_email` = '{$memail}'", $this->con);
				$select = mysql_query("SELECT * FROM `{$prefix}members` WHERE `email` = '{$memail}'", $this->con);
				$hash = mysql_fetch_array($select);

				if(md5(md5($hash['members_pass_salt']) . md5($fpass)) == $hash['members_pass_hash']) {
					if(mysql_num_rows($result) == "1") {
						//Check Posts
						if(stripslashes($signup) <= $member['posts']) {
							return 1;
						}
						//That shit below looks complicated doesn't it lol. I thought the same. To many brackets for my mind.
						else {
							return 0;
						}
					}
					else {
						return 3;
					}
				}
				else {
					return 4;
				}
				break;

			case "mybb":
				// Look up member
				$result = mysql_query("SELECT * FROM `{$prefix}users` WHERE username = '{$fuser}'", $this->con);
				if($db->num_rows($result) == "0") {
					return 3;
				}
				else {
					$member = mysql_fetch_array($result);
					if(md5(md5($member['salt']) . md5($fpass)) == $member['password']) {
						if($member['postnum'] >= $signup) {
							return 1;
						}
						else {
							return 0;
						}
					}
					else {
						return 4;
					}
				}
				break;

			case "phpbb":
				$result = mysql_query("SELECT * FROM `{$prefix}users` WHERE username = '{$fuser}'", $this->con);
				if(mysql_num_rows($result) == "0") {
					return 3;
				}
				else {
					$member = mysql_fetch_array($result);
					if(phpbb_check_hash($fpass, $member['user_password'])) {
						$posts = mysql_query("SELECT * FROM `{$prefix}posts` WHERE poster_id = '{$member['user_id']}'", $this->con);
						$mposts = stripslashes(mysql_num_rows($posts));
						if($mposts >= $signup) {
							return 1;
						}
						else {
							return 0;
						}
					}
					else {
						return 4;
					}
				}
				break;

			case "phpbb2":
				$result = mysql_query("SELECT * FROM `{$prefix}users` WHERE username = '{$fuser}'", $this->con);
				if(mysql_num_rows($result) == "0") {
					return 3;
				}
				else {
					$member = mysql_fetch_array($result);
					if(md5($fpass) == $member['user_password']) {
						if($member['user_posts'] >= $signup) {
							return 1;
						}
						else {
							return 0;
						}
					}
					else {
						return 4;
					}
				}
				break;

			case "vb":
				$result = mysql_query("SELECT * FROM `{$prefix}user` WHERE username = '{$fuser}'", $this->con);
				if(mysql_num_rows($result) == "0") {
					return 3;
				}
				else {
					$member = mysql_fetch_array($result);
					if(md5(md5($fpass) . $member['salt']) == $member['password']) {
						if($member['posts'] >= $signup) {
							return 1;
						}
						else {
							return 0;
						}
					}
					else {
						return 4;
					}
				}
				break;

			case "smf":
				$result = mysql_query("SELECT * FROM `{$prefix}members` WHERE memberName = '{$fuser}'", $this->con);
				if(mysql_num_rows($result) == "0") {
					return 3;
				}
				else {
					$member = mysql_fetch_array($result);
					if(sha1(strtolower($member['memberName']) . $fpass) == $member['passwd']) {
						if($member['posts'] >= $signup) {
							return 1;
						}
						else {
							return 0;
						}
					}
					else {
						return 4;
					}
				}
				break;

			case "aef":
				$result = mysql_query("SELECT * FROM `{$prefix}users` WHERE username = '{$fuser}'", $this->con);
				if(mysql_num_rows($result) == "0") {
					return 3;
				}
				else {
					$member = mysql_fetch_array($result);
					if(md5($member['salt'] . $fpass) == $member['password']) {
						if($member['posts'] >= $signup) {
							return 1;
						}
						else {
							return 0;
						}
					}
					else {
						return array('true' => '0', 'customerror' => '<h1>Error</h1>That forum password is incorrect!');
					}
				}
				break;

				case "drupal":
					$result = mysql_query("SELECT * FROM `{$prefix}users` WHERE name = '{$fuser}' LIMIT 1", $this->con);
					if(mysql_num_rows($result) == 0) {
						return 3;
					}
					else {
						$member = mysql_fetch_array($result);
						if(md5($fpass) == $member['pass']) {
							$uid = $member['uid'];
							$drupalPosts = 0;
							$result = mysql_query("SELECT * FROM `{$prefix}node` WHERE `type` = 'forum' AND `uid` = {$uid}", $this->con);
							$drupalPosts = $drupalPosts + mysql_num_rows($result);
							while($threadsArray = mysql_fetch_assoc($result)) {
								$stuff[] = $threadsArray;
							}

							foreach($stuff as $key => $value) {
								$result = mysql_query("SELECT * FROM `{$prefix}comments` WHERE `nid` = {$value["nid"]} AND `uid` = {$uid}", $this->con);
								$drupalPosts = $drupalPosts + mysql_num_rows($result);
							}
							if($drupalPosts >= $signup) {
								return 1;
							}
							else {
								return 0;
							}
						}
						else {
							return 4;
						}
					}
				break;
		}
	}

	private function queryForums($name = 0) { # Returns the query for the forums in config table
		global $db;
		if($name) {
			return $db->query("SELECT * FROM `<PRE>config` WHERE `name` LIKE 'p2hforum;:;%;:;{$name}' ORDER BY `name` DESC");
		}
		else {
			return $db->query("SELECT * FROM `<PRE>config` WHERE `name` LIKE 'p2hforum;:;%'");
		}
	}

	private function forumData($name) { # Returns all the data for a forum
		global $db, $main;
		$query = $this->queryForums($name);
		if($db->num_rows($query) == 0) {
			$array['Error'] = "That forum doesn't exist!";
			$array['Forum Name'] = $name;
		}
		else {
			while($data = $db->fetch_array($query)) {
				$content = explode(";:;", $data['name']);
				$forumData[$content[1]] = $data['value'];
			}
			return $forumData;
		}
	}

	private function determineForum($id) { # Returns forum name with PID
		global $db;
		global $main, $type;
		$query = $db->query("SELECT * FROM `<PRE>packages` WHERE `id` = '{$db->strip($id)}'");
		if($db->num_rows($query) == 0) {
			$array['Error'] = "That package doesn't exist!";
			$array['User ID'] = $id;
			$main->error($array);
			return;
		}
		else {
			$data = $type->additional($id);
			return $data['forum'];
		}
	}

	public function userposts($packid, $upackid){
		global $type;

		$forum = $this->determineForum($packid);
		$user = $type->userAdditional($upackid);
		$fdetails = $this->forumData($forum);
		$this->con = $this->forumCon($forum);
		$posts = $this->checkMonthly($fdetails['type'], $user['fuser'], $fdetails['prefix']);

		return $posts;
	}
	public function pidtoforumdata($packid){
		global $type;

		$forum = $this->determineForum($packid);
		$this->con = $this->forumCon($forum);
		$details = $this->forumData($forum);

		return $details;
	}
}
//End Type

if(!function_exists('phpbb_check_hash')){
///////////////////////////////////////////
// phpBB Password functions - All written by the phpBB team. All credit to them.
// Why don't you use a salt? ha mo f***ers
///////////////////////////////////////////

function phpbb_check_hash($password, $hash)
{
	$itoa64 = './0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	if (strlen($hash) == 34)
	{
		return (_hash_crypt_private($password, $hash, $itoa64) === $hash) ? true : false;
	}

	return (md5($password) === $hash) ? true : false;
}

/**
* Encode hash
*/
function _hash_encode64($input, $count, &$itoa64)
{
	$output = '';
	$i = 0;

	do
	{
		$value = ord($input[$i++]);
		$output .= $itoa64[$value & 0x3f];

		if ($i < $count)
		{
			$value |= ord($input[$i]) << 8;
		}

		$output .= $itoa64[($value >> 6) & 0x3f];

		if ($i++ >= $count)
		{
			break;
		}

		if ($i < $count)
		{
			$value |= ord($input[$i]) << 16;
		}

		$output .= $itoa64[($value >> 12) & 0x3f];

		if ($i++ >= $count)
		{
			break;
		}

		$output .= $itoa64[($value >> 18) & 0x3f];
	}
	while ($i < $count);

	return $output;
}

/**
* The crypt function/replacement
*/
function _hash_crypt_private($password, $setting, &$itoa64)
{
	$output = '*';

	// Check for correct hash
	if (substr($setting, 0, 3) != '$H$')
	{
		return $output;
	}

	$count_log2 = strpos($itoa64, $setting[3]);

	if ($count_log2 < 7 || $count_log2 > 30)
	{
		return $output;
	}

	$count = 1 << $count_log2;
	$salt = substr($setting, 4, 8);

	if (strlen($salt) != 8)
	{
		return $output;
	}

	/**
	* We're kind of forced to use MD5 here since it's the only
	* cryptographic primitive available in all versions of PHP
	* currently in use.  To implement our own low-level crypto
	* in PHP would result in much worse performance and
	* consequently in lower iteration counts and hashes that are
	* quicker to crack (by non-PHP code).
	*/
	if (PHP_VERSION >= 5)
	{
		$hash = md5($salt . $password, true);
		do
		{
			$hash = md5($hash . $password, true);
		}
		while (--$count);
	}
	else
	{
		$hash = pack('H*', md5($salt . $password));
		do
		{
			$hash = pack('H*', md5($hash . $password));
		}
		while (--$count);
	}

	$output = substr($setting, 0, 12);
	$output .= _hash_encode64($hash, 16, $itoa64);

	return $output;
}
} //Added by Na'ven's Upgrade [3]
?>
