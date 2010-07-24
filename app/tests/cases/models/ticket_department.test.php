<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/New_York' for 'EDT/-4.0/DST' instead in /Applications/MAMP/htdocs/TheHostingTool/branches/2.0/cake/console/templates/default/classes/test.ctp on line 22
/* TicketDepartment Test cases generated on: 2010-07-24 02:07:45 : 1279952025*/
App::import('Model', 'TicketDepartment');

class TicketDepartmentTestCase extends CakeTestCase {
	var $fixtures = array('app.ticket_department', 'app.ticket');

	function startTest() {
		$this->TicketDepartment =& ClassRegistry::init('TicketDepartment');
	}

	function endTest() {
		unset($this->TicketDepartment);
		ClassRegistry::flush();
	}

}
?>