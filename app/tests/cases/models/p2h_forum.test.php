<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/New_York' for 'EDT/-4.0/DST' instead in /Applications/MAMP/htdocs/TheHostingTool/branches/2.0/cake/console/templates/default/classes/test.ctp on line 22
/* P2hForum Test cases generated on: 2010-07-24 01:07:26 : 1279949366*/
App::import('Model', 'P2hForum');

class P2hForumTestCase extends CakeTestCase {
	var $fixtures = array('app.p2h_forum');

	function startTest() {
		$this->P2hForum =& ClassRegistry::init('P2hForum');
	}

	function endTest() {
		unset($this->P2hForum);
		ClassRegistry::flush();
	}

}
?>