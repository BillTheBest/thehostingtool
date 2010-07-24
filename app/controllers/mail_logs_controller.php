<?php
class MailLogsController extends AppController {

	var $name = 'MailLogs';

	function index() {
		$this->MailLog->recursive = 0;
		$this->set('mailLogs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid mail log', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('mailLog', $this->MailLog->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->MailLog->create();
			if ($this->MailLog->save($this->data)) {
				$this->Session->setFlash(__('The mail log has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mail log could not be saved. Please, try again.', true));
			}
		}
		$accounts = $this->MailLog->Account->find('list');
		$this->set(compact('accounts'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid mail log', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->MailLog->save($this->data)) {
				$this->Session->setFlash(__('The mail log has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mail log could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MailLog->read(null, $id);
		}
		$accounts = $this->MailLog->Account->find('list');
		$this->set(compact('accounts'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for mail log', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MailLog->delete($id)) {
			$this->Session->setFlash(__('Mail log deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Mail log was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->MailLog->recursive = 0;
		$this->set('mailLogs', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid mail log', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('mailLog', $this->MailLog->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->MailLog->create();
			if ($this->MailLog->save($this->data)) {
				$this->Session->setFlash(__('The mail log has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mail log could not be saved. Please, try again.', true));
			}
		}
		$accounts = $this->MailLog->Account->find('list');
		$this->set(compact('accounts'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid mail log', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->MailLog->save($this->data)) {
				$this->Session->setFlash(__('The mail log has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mail log could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MailLog->read(null, $id);
		}
		$accounts = $this->MailLog->Account->find('list');
		$this->set(compact('accounts'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for mail log', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MailLog->delete($id)) {
			$this->Session->setFlash(__('Mail log deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Mail log was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>