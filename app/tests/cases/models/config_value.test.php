<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/New_York' for 'EDT/-4.0/DST' instead in /Applications/MAMP/htdocs/TheHostingTool/branches/2.0/cake/console/templates/default/classes/test.ctp on line 22
/* ConfigValue Test cases generated on: 2010-07-24 00:07:19 : 1279944079*/
App::import('Model', 'ConfigValue');

class ConfigValueTestCase extends CakeTestCase {
	var $fixtures = array('app.config_value');

	function startTest() {
		$this->ConfigValue =& ClassRegistry::init('ConfigValue');
	}

	function endTest() {
		unset($this->ConfigValue);
		ClassRegistry::flush();
	}

}
?>