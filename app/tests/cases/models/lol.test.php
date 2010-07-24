<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/New_York' for 'EDT/-4.0/DST' instead in /Applications/MAMP/htdocs/TheHostingTool/branches/2.0/cake/console/templates/default/classes/test.ctp on line 22
/* lol Test cases generated on: 2010-07-23 22:07:17 : 1279938197*/
App::import('Model', 'lol');

class lolTestCase extends CakeTestCase {
	function startTest() {
		$this->lol =& ClassRegistry::init('lol');
	}

	function endTest() {
		unset($this->lol);
		ClassRegistry::flush();
	}

}
?>