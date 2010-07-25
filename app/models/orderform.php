<?php

/////////////////////
// Order Form Model
// By THT Devs
/////////////////////

class OrderForm extends AppModel {
	var $useTable = false;
	function index() {
   		$this->loadModel("accounts");
		$accounts = $this->Accounts->find("all");
		$this->set(compact('OrderForm', $accounts));
	}
}

?>