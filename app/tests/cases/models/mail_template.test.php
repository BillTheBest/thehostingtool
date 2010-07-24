<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/New_York' for 'EDT/-4.0/DST' instead in /Applications/MAMP/htdocs/TheHostingTool/branches/2.0/cake/console/templates/default/classes/test.ctp on line 22
/* MailTemplate Test cases generated on: 2010-07-24 01:07:07 : 1279949287*/
App::import('Model', 'MailTemplate');

class MailTemplateTestCase extends CakeTestCase {
	var $fixtures = array('app.mail_template');

	function startTest() {
		$this->MailTemplate =& ClassRegistry::init('MailTemplate');
	}

	function endTest() {
		unset($this->MailTemplate);
		ClassRegistry::flush();
	}

}
?>