<?php
/* P2hForum Fixture generated on: 
Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/New_York' for 'EDT/-4.0/DST' instead in /Applications/MAMP/htdocs/TheHostingTool/branches/2.0/cake/console/templates/default/classes/fixture.ctp on line 24
2010-07-24 01:07:26 : 1279949366 */
class P2hForumFixture extends CakeTestFixture {
	var $name = 'P2hForum';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25),
		'db_login' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'db_password' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'type' => 'Lorem ipsum dolor sit a',
			'db_login' => 'Lorem ipsum dolor sit amet',
			'db_password' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>