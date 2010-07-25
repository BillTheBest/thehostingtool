<?php
class OrderformController extends AppController {

	var $name = 'Orderform';
	var $components = array('RequestHandler');
	var $helpers = array('ajax');

	//One day I will fully understand CakePHP
	function index() {
		$this->set('effectTimes', array('drop' => '150', 'slide' => '250'));
	}

	function step1() {
		$this->layout = "ajax";
		if (!$this->RequestHandler->isAjax()) {
			Configure::write('debug', 0);
		 	$this->autoRender = false;
		 	exit();	
		}
	}
	function step2() {
			
	}
}
?>
