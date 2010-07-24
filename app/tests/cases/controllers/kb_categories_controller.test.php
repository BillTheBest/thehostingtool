<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/New_York' for 'EDT/-4.0/DST' instead in /Applications/MAMP/htdocs/TheHostingTool/branches/2.0/cake/console/templates/default/classes/test.ctp on line 22
/* KbCategories Test cases generated on: 2010-07-24 02:07:59 : 1279953479*/
App::import('Controller', 'KbCategories');

class TestKbCategoriesController extends KbCategoriesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class KbCategoriesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.kb_category', 'app.kb_article');

	function startTest() {
		$this->KbCategories =& new TestKbCategoriesController();
		$this->KbCategories->constructClasses();
	}

	function endTest() {
		unset($this->KbCategories);
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