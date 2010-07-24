<?php
class CustomFieldsController extends AppController {

	var $name = 'CustomFields';

	function index() {
		$this->CustomField->recursive = 0;
		$this->set('customFields', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid custom field', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('customField', $this->CustomField->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CustomField->create();
			if ($this->CustomField->save($this->data)) {
				$this->Session->setFlash(__('The custom field has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The custom field could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid custom field', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CustomField->save($this->data)) {
				$this->Session->setFlash(__('The custom field has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The custom field could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CustomField->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for custom field', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CustomField->delete($id)) {
			$this->Session->setFlash(__('Custom field deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Custom field was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->CustomField->recursive = 0;
		$this->set('customFields', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid custom field', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('customField', $this->CustomField->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->CustomField->create();
			if ($this->CustomField->save($this->data)) {
				$this->Session->setFlash(__('The custom field has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The custom field could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid custom field', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CustomField->save($this->data)) {
				$this->Session->setFlash(__('The custom field has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The custom field could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CustomField->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for custom field', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CustomField->delete($id)) {
			$this->Session->setFlash(__('Custom field deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Custom field was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>