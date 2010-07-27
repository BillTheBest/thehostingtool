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
		$this->_effectTimes();
	}

	function step1() {
		$this->_effectTimes();
		$this->_formLoad();
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
		foreach($this->params['url'] as $key => $value) {
			if($key != "url") {
				$this->Account->set(array(strtolower($key) => $this->params['url'][$key]));
				$field = strtolower($key);
				break;
			}
		}
		
		if($this->Account->validates(array('fieldlist' => array($field)))) {
			echo 1;	
		}
		else {
			echo 0;	
		}
	}
	function step2() {
		$this->_formLoad();
		$this->_effectTimes();
	}
	
	// internal functions
	function _effectTimes() {
		$this->set('effectTime', 500);
	}
	function _formLoad() {
		$html = "";
		$postVar = "";
		if($this->data) {
			$postVar = $this->data;
		}
		$this->set('postVar', $postVar);
	}
}
?>
