<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/New_York' for 'EDT/-4.0/DST' instead in /Applications/MAMP/htdocs/TheHostingTool/branches/2.0/cake/console/templates/default/classes/test.ctp on line 22
/* CustomFieldValues Test cases generated on: 2010-07-24 02:07:06 : 1279953426*/
App::import('Controller', 'CustomFieldValues');

class TestCustomFieldValuesController extends CustomFieldValuesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CustomFieldValuesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.custom_field_value', 'app.custom_field', 'app.account', 'app.plan', 'app.server', 'app.subdomain', 'app.log', 'app.staff_account', 'app.ticket_reply', 'app.ticket', 'app.mail_log');

	function startTest() {
		$this->CustomFieldValues =& new TestCustomFieldValuesController();
		$this->CustomFieldValues->constructClasses();
	}

	function endTest() {
		unset($this->CustomFieldValues);
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