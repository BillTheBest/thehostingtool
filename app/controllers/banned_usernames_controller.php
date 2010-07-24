<?php
class BannedUsernamesController extends AppController {

	var $name = 'BannedUsernames';

	function index() {
		$this->BannedUsername->recursive = 0;
		$this->set('bannedUsernames', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid banned username', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('bannedUsername', $this->BannedUsername->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->BannedUsername->create();
			if ($this->BannedUsername->save($this->data)) {
				$this->Session->setFlash(__('The banned username has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banned username could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid banned username', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->BannedUsername->save($this->data)) {
				$this->Session->setFlash(__('The banned username has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banned username could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BannedUsername->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for banned username', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BannedUsername->delete($id)) {
			$this->Session->setFlash(__('Banned username deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Banned username was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->BannedUsername->recursive = 0;
		$this->set('bannedUsernames', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid banned username', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('bannedUsername', $this->BannedUsername->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->BannedUsername->create();
			if ($this->BannedUsername->save($this->data)) {
				$this->Session->setFlash(__('The banned username has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banned username could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid banned username', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->BannedUsername->save($this->data)) {
				$this->Session->setFlash(__('The banned username has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banned username could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BannedUsername->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for banned username', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BannedUsername->delete($id)) {
			$this->Session->setFlash(__('Banned username deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Banned username was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>