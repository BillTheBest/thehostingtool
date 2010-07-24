<?php
class BannedIpsController extends AppController {

	var $name = 'BannedIps';

	function index() {
		$this->BannedIp->recursive = 0;
		$this->set('bannedIps', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid banned ip', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('bannedIp', $this->BannedIp->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->BannedIp->create();
			if ($this->BannedIp->save($this->data)) {
				$this->Session->setFlash(__('The banned ip has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banned ip could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid banned ip', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->BannedIp->save($this->data)) {
				$this->Session->setFlash(__('The banned ip has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banned ip could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BannedIp->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for banned ip', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BannedIp->delete($id)) {
			$this->Session->setFlash(__('Banned ip deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Banned ip was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->BannedIp->recursive = 0;
		$this->set('bannedIps', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid banned ip', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('bannedIp', $this->BannedIp->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->BannedIp->create();
			if ($this->BannedIp->save($this->data)) {
				$this->Session->setFlash(__('The banned ip has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banned ip could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid banned ip', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->BannedIp->save($this->data)) {
				$this->Session->setFlash(__('The banned ip has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banned ip could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BannedIp->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for banned ip', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BannedIp->delete($id)) {
			$this->Session->setFlash(__('Banned ip deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Banned ip was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>