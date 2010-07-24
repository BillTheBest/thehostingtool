<?php
class BannedEmailsController extends AppController {

	var $name = 'BannedEmails';

	function index() {
		$this->BannedEmail->recursive = 0;
		$this->set('bannedEmails', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid banned email', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('bannedEmail', $this->BannedEmail->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->BannedEmail->create();
			if ($this->BannedEmail->save($this->data)) {
				$this->Session->setFlash(__('The banned email has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banned email could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid banned email', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->BannedEmail->save($this->data)) {
				$this->Session->setFlash(__('The banned email has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banned email could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BannedEmail->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for banned email', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BannedEmail->delete($id)) {
			$this->Session->setFlash(__('Banned email deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Banned email was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->BannedEmail->recursive = 0;
		$this->set('bannedEmails', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid banned email', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('bannedEmail', $this->BannedEmail->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->BannedEmail->create();
			if ($this->BannedEmail->save($this->data)) {
				$this->Session->setFlash(__('The banned email has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banned email could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid banned email', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->BannedEmail->save($this->data)) {
				$this->Session->setFlash(__('The banned email has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The banned email could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BannedEmail->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for banned email', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BannedEmail->delete($id)) {
			$this->Session->setFlash(__('Banned email deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Banned email was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>