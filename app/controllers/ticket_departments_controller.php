<?php
class TicketDepartmentsController extends AppController {

	var $name = 'TicketDepartments';

	function index() {
		$this->TicketDepartment->recursive = 0;
		$this->set('ticketDepartments', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ticket department', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ticketDepartment', $this->TicketDepartment->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TicketDepartment->create();
			if ($this->TicketDepartment->save($this->data)) {
				$this->Session->setFlash(__('The ticket department has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ticket department could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ticket department', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TicketDepartment->save($this->data)) {
				$this->Session->setFlash(__('The ticket department has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ticket department could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TicketDepartment->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ticket department', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TicketDepartment->delete($id)) {
			$this->Session->setFlash(__('Ticket department deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ticket department was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->TicketDepartment->recursive = 0;
		$this->set('ticketDepartments', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ticket department', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ticketDepartment', $this->TicketDepartment->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->TicketDepartment->create();
			if ($this->TicketDepartment->save($this->data)) {
				$this->Session->setFlash(__('The ticket department has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ticket department could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ticket department', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TicketDepartment->save($this->data)) {
				$this->Session->setFlash(__('The ticket department has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ticket department could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TicketDepartment->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ticket department', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TicketDepartment->delete($id)) {
			$this->Session->setFlash(__('Ticket department deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ticket department was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>