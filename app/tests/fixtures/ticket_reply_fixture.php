<?php
/* TicketReply Fixture generated on: 
Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/New_York' for 'EDT/-4.0/DST' instead in /Applications/MAMP/htdocs/TheHostingTool/branches/2.0/cake/console/templates/default/classes/fixture.ctp on line 24
2010-07-24 02:07:14 : 1279952654 */
class TicketReplyFixture extends CakeTestFixture {
	var $name = 'TicketReply';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'ticket_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'account_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'staff_account_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'body' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'added' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'ticket_id' => 1,
			'account_id' => 1,
			'staff_account_id' => 1,
			'body' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'added' => '2010-07-24 02:24:14'
		),
	);
}
?>