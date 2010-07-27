<?php
class OrdersController extends AppController {

	var $name = 'Orders';
	var $components = array('RequestHandler');
	var $helpers = array('ajax');
	var $uses = array('Account', 'Plan');
	
	var $paginate = array(
		'Plan' => array(
			'fields' => array('id', 'name', 'description'),
			'order' => 'id ASC',
			'limit' => 6
		)
	);
	
	// One day I will fully understand CakePHP
	function index() {
		$this->effectTimes();
	}

	function step1() {
		$this->effectTimes();
		$this->formLoad();
		$this->layout = "ajax";
		/*if (!$this->RequestHandler->isAjax()) {
			Configure::write('debug', 0);
			$this->autoRender = false;
			return;
		}*/
		$this->set('data', $this->paginate('Plan'));
		$this->set('limit', $this->paginate['Plan']['limit']);
		$this->set('total', $this->Plan->find('count'));
	}
	function ajaxcall() {
		$this->layout = "ajax";
		foreach($this->data['step2'] as $key => $value) {
			if(!$n) {
				$this->Account->set($this->data['step2'][$key]);
			}
			$n = 1;
		}
		if($this->Account->validates()) {
			echo 1;	
		}
		else {
			echo 0;	
		}
	}
	function step2() {
		$this->formLoad();
		$this->effectTimes();
	}
	function effectTimes() {
		$this->set('effectTime', 500);
	}
	function formLoad() {
		$html = "";
		$postVar = "";
		if($this->data) {
			$postVar = $this->data;
		}
		$this->set('postVar', $postVar);
	}
}
?>
