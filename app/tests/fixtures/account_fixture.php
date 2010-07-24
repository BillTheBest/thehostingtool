<?php
/* Account Fixture generated on: 
Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/New_York' for 'EDT/-4.0/DST' instead in /Applications/MAMP/htdocs/TheHostingTool/branches/2.0/cake/console/templates/default/classes/fixture.ctp on line 24
2010-07-23 23:07:20 : 1279941920 */
class AccountFixture extends CakeTestFixture {
	var $name = 'Account';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'password' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'salt' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'security_question' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'security_answer' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'registered_ip' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 15),
		'last_ip' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 15),
		'extras' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'plan_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'domain' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'registered' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'status' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 3),
		'notes' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'salt' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'security_question' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'security_answer' => 'Lorem ipsum dolor sit amet',
			'registered_ip' => 'Lorem ipsum d',
			'last_ip' => 'Lorem ipsum d',
			'extras' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'plan_id' => 1,
			'domain' => 'Lorem ipsum dolor sit amet',
			'registered' => '2010-07-23 23:25:20',
			'status' => 1,
			'notes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);
}
?>