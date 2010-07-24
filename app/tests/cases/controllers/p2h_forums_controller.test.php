<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/New_York' for 'EDT/-4.0/DST' instead in /Applications/MAMP/htdocs/TheHostingTool/branches/2.0/cake/console/templates/default/classes/test.ctp on line 22
/* P2hForums Test cases generated on: 2010-07-24 02:07:50 : 1279953650*/
App::import('Controller', 'P2hForums');

class TestP2hForumsController extends P2hForumsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class P2hForumsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.p2h_forum');

	function startTest() {
		$this->P2hForums =& new TestP2hForumsController();
		$this->P2hForums->constructClasses();
	}

	function endTest() {
		unset($this->P2hForums);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
?>