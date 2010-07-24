<?php
class StaffAccountsController extends AppController {

	var $name = 'StaffAccounts';

	function index() {
		$this->StaffAccount->recursive = 0;
		$this->set('staffAccounts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid staff account', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('staffAccount', $this->StaffAccount->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->StaffAccount->create();
			if ($this->StaffAccount->save($this->data)) {
				$this->Session->setFlash(__('The staff account has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The staff account could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid staff account', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->StaffAccount->save($this->data)) {
				$this->Session->setFlash(__('The staff account has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The staff account could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->StaffAccount->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for staff account', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->StaffAccount->delete($id)) {
			$this->Session->setFlash(__('Staff account deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Staff account was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->StaffAccount->recursive = 0;
		$this->set('staffAccounts', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid staff account', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('staffAccount', $this->StaffAccount->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->StaffAccount->create();
			if ($this->StaffAccount->save($this->data)) {
				$this->Session->setFlash(__('The staff account has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The staff account could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid staff account', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->StaffAccount->save($this->data)) {
				$this->Session->setFlash(__('The staff account has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The staff account could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->StaffAccount->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for staff account', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->StaffAccount->delete($id)) {
			$this->Session->setFlash(__('Staff account deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Staff account was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>