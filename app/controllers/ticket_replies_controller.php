<?php
class TicketRepliesController extends AppController {

	var $name = 'TicketReplies';

	function index() {
		$this->TicketReply->recursive = 0;
		$this->set('ticketReplies', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ticket reply', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ticketReply', $this->TicketReply->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TicketReply->create();
			if ($this->TicketReply->save($this->data)) {
				$this->Session->setFlash(__('The ticket reply has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ticket reply could not be saved. Please, try again.', true));
			}
		}
		$tickets = $this->TicketReply->Ticket->find('list');
		$accounts = $this->TicketReply->Account->find('list');
		$staffAccounts = $this->TicketReply->StaffAccount->find('list');
		$this->set(compact('tickets', 'accounts', 'staffAccounts'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ticket reply', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TicketReply->save($this->data)) {
				$this->Session->setFlash(__('The ticket reply has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ticket reply could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TicketReply->read(null, $id);
		}
		$tickets = $this->TicketReply->Ticket->find('list');
		$accounts = $this->TicketReply->Account->find('list');
		$staffAccounts = $this->TicketReply->StaffAccount->find('list');
		$this->set(compact('tickets', 'accounts', 'staffAccounts'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ticket reply', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TicketReply->delete($id)) {
			$this->Session->setFlash(__('Ticket reply deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ticket reply was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->TicketReply->recursive = 0;
		$this->set('ticketReplies', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ticket reply', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ticketReply', $this->TicketReply->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->TicketReply->create();
			if ($this->TicketReply->save($this->data)) {
				$this->Session->setFlash(__('The ticket reply has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ticket reply could not be saved. Please, try again.', true));
			}
		}
		$tickets = $this->TicketReply->Ticket->find('list');
		$accounts = $this->TicketReply->Account->find('list');
		$staffAccounts = $this->TicketReply->StaffAccount->find('list');
		$this->set(compact('tickets', 'accounts', 'staffAccounts'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ticket reply', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TicketReply->save($this->data)) {
				$this->Session->setFlash(__('The ticket reply has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ticket reply could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TicketReply->read(null, $id);
		}
		$tickets = $this->TicketReply->Ticket->find('list');
		$accounts = $this->TicketReply->Account->find('list');
		$staffAccounts = $this->TicketReply->StaffAccount->find('list');
		$this->set(compact('tickets', 'accounts', 'staffAccounts'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ticket reply', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TicketReply->delete($id)) {
			$this->Session->setFlash(__('Ticket reply deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ticket reply was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>