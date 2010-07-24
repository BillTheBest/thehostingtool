<?php
class BannedDomainsController extends AppController {

	var $name = 'BannedDomains';

	function index() {
		$this->BannedDomain->recursive = 0;
		$this->set('bannedDomains', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid banned domain', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('bannedDomain', $this->BannedDomain->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->BannedDomain->create();
			if ($this->BannedDomain->save($this->data)) {
				$this->Session->setFlash(__('The banned domain has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banned domain could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid banned domain', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->BannedDomain->save($this->data)) {
				$this->Session->setFlash(__('The banned domain has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banned domain could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BannedDomain->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for banned domain', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BannedDomain->delete($id)) {
			$this->Session->setFlash(__('Banned domain deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Banned domain was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->BannedDomain->recursive = 0;
		$this->set('bannedDomains', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid banned domain', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('bannedDomain', $this->BannedDomain->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->BannedDomain->create();
			if ($this->BannedDomain->save($this->data)) {
				$this->Session->setFlash(__('The banned domain has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banned domain could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid banned domain', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->BannedDomain->save($this->data)) {
				$this->Session->setFlash(__('The banned domain has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banned domain could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BannedDomain->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for banned domain', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BannedDomain->delete($id)) {
			$this->Session->setFlash(__('Banned domain deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Banned domain was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>