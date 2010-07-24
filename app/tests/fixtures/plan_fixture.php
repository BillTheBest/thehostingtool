<?php
/* Plan Fixture generated on: 
Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/New_York' for 'EDT/-4.0/DST' instead in /Applications/MAMP/htdocs/TheHostingTool/branches/2.0/cake/console/templates/default/classes/fixture.ctp on line 24
2010-07-24 01:07:50 : 1279949630 */
class PlanFixture extends CakeTestFixture {
	var $name = 'Plan';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'backend' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'server_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'description' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'post_reg' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'post_month' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'admin' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 3),
		'hidden' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 3),
		'disabled' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 3),
		'order' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'type' => 'Lorem ipsum dolor sit amet',
			'backend' => 'Lorem ipsum dolor sit amet',
			'server_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'post_reg' => 1,
			'post_month' => 1,
			'admin' => 1,
			'hidden' => 1,
			'disabled' => 1,
			'order' => 1
		),
	);
}
?>