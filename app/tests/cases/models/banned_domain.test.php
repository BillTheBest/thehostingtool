<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/New_York' for 'EDT/-4.0/DST' instead in /Applications/MAMP/htdocs/TheHostingTool/branches/2.0/cake/console/templates/default/classes/test.ctp on line 22
/* BannedDomain Test cases generated on: 2010-07-23 23:07:40 : 1279942600*/
App::import('Model', 'BannedDomain');

class BannedDomainTestCase extends CakeTestCase {
	var $fixtures = array('app.banned_domain');

	function startTest() {
		$this->BannedDomain =& ClassRegistry::init('BannedDomain');
	}

	function endTest() {
		unset($this->BannedDomain);
		ClassRegistry::flush();
	}

}
?>