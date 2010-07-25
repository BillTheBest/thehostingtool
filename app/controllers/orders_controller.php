<?php
class OrdersController extends AppController {

	var $name = 'Orders';
	var $components = array('RequestHandler');
	var $helpers = array('ajax');
	var $uses = array('Account', 'Plan');
	
	var $paginate = array('Plan' => array(
	'fields' => array('id', 'name', 'description'),
	'order' => 'id ASC',
	'limit' => 6
	));

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
		$this->set('data',$this->paginate('Plan'));
		$this->helpers['Paginator'] = array('ajax' => 'Ajax');
	}
	function step2() {
			
	}
}
?>
