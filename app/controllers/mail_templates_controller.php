<?php
class MailTemplatesController extends AppController {

	var $name = 'MailTemplates';

	function index() {
		$this->MailTemplate->recursive = 0;
		$this->set('mailTemplates', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid mail template', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('mailTemplate', $this->MailTemplate->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->MailTemplate->create();
			if ($this->MailTemplate->save($this->data)) {
				$this->Session->setFlash(__('The mail template has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mail template could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid mail template', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->MailTemplate->save($this->data)) {
				$this->Session->setFlash(__('The mail template has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mail template could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MailTemplate->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for mail template', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MailTemplate->delete($id)) {
			$this->Session->setFlash(__('Mail template deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Mail template was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->MailTemplate->recursive = 0;
		$this->set('mailTemplates', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid mail template', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('mailTemplate', $this->MailTemplate->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->MailTemplate->create();
			if ($this->MailTemplate->save($this->data)) {
				$this->Session->setFlash(__('The mail template has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mail template could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid mail template', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->MailTemplate->save($this->data)) {
				$this->Session->setFlash(__('The mail template has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mail template could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MailTemplate->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for mail template', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MailTemplate->delete($id)) {
			$this->Session->setFlash(__('Mail template deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Mail template was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>