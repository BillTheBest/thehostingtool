<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/New_York' for 'EDT/-4.0/DST' instead in /Applications/MAMP/htdocs/TheHostingTool/branches/2.0/cake/console/templates/default/classes/test.ctp on line 22
/* BannedEmail Test cases generated on: 2010-07-23 23:07:03 : 1279942683*/
App::import('Model', 'BannedEmail');

class BannedEmailTestCase extends CakeTestCase {
	var $fixtures = array('app.banned_email');

	function startTest() {
		$this->BannedEmail =& ClassRegistry::init('BannedEmail');
	}

	function endTest() {
		unset($this->BannedEmail);
		ClassRegistry::flush();
	}

}
?>