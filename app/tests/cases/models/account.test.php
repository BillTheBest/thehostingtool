<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/New_York' for 'EDT/-4.0/DST' instead in /Applications/MAMP/htdocs/TheHostingTool/branches/2.0/cake/console/templates/default/classes/test.ctp on line 22
/* Account Test cases generated on: 2010-07-23 23:07:20 : 1279941920*/
App::import('Model', 'Account');

class AccountTestCase extends CakeTestCase {
	var $fixtures = array('app.account', 'app.plan', 'app.custom_field_value', 'app.log', 'app.mail_log', 'app.ticket_reply');

	function startTest() {
		$this->Account =& ClassRegistry::init('Account');
	}

	function endTest() {
		unset($this->Account);
		ClassRegistry::flush();
	}

}
?>