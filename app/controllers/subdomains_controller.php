<?php
class SubdomainsController extends AppController {

	var $name = 'Subdomains';

	function index() {
		$this->Subdomain->recursive = 0;
		$this->set('subdomains', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid subdomain', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('subdomain', $this->Subdomain->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Subdomain->create();
			if ($this->Subdomain->save($this->data)) {
				$this->Session->setFlash(__('The subdomain has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subdomain could not be saved. Please, try again.', true));
			}
		}
		$servers = $this->Subdomain->Server->find('list');
		$this->set(compact('servers'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid subdomain', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Subdomain->save($this->data)) {
				$this->Session->setFlash(__('The subdomain has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subdomain could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Subdomain->read(null, $id);
		}
		$servers = $this->Subdomain->Server->find('list');
		$this->set(compact('servers'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for subdomain', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Subdomain->delete($id)) {
			$this->Session->setFlash(__('Subdomain deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Subdomain was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Subdomain->recursive = 0;
		$this->set('subdomains', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid subdomain', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('subdomain', $this->Subdomain->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Subdomain->create();
			if ($this->Subdomain->save($this->data)) {
				$this->Session->setFlash(__('The subdomain has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subdomain could not be saved. Please, try again.', true));
			}
		}
		$servers = $this->Subdomain->Server->find('list');
		$this->set(compact('servers'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid subdomain', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Subdomain->save($this->data)) {
				$this->Session->setFlash(__('The subdomain has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subdomain could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Subdomain->read(null, $id);
		}
		$servers = $this->Subdomain->Server->find('list');
		$this->set(compact('servers'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for subdomain', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Subdomain->delete($id)) {
			$this->Session->setFlash(__('Subdomain deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Subdomain was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>