<?php
class CustomFieldValuesController extends AppController {

	var $name = 'CustomFieldValues';

	function index() {
		$this->CustomFieldValue->recursive = 0;
		$this->set('customFieldValues', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid custom field value', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('customFieldValue', $this->CustomFieldValue->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CustomFieldValue->create();
			if ($this->CustomFieldValue->save($this->data)) {
				$this->Session->setFlash(__('The custom field value has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The custom field value could not be saved. Please, try again.', true));
			}
		}
		$customFields = $this->CustomFieldValue->CustomField->find('list');
		$accounts = $this->CustomFieldValue->Account->find('list');
		$this->set(compact('customFields', 'accounts'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid custom field value', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CustomFieldValue->save($this->data)) {
				$this->Session->setFlash(__('The custom field value has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The custom field value could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CustomFieldValue->read(null, $id);
		}
		$customFields = $this->CustomFieldValue->CustomField->find('list');
		$accounts = $this->CustomFieldValue->Account->find('list');
		$this->set(compact('customFields', 'accounts'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for custom field value', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CustomFieldValue->delete($id)) {
			$this->Session->setFlash(__('Custom field value deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Custom field value was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->CustomFieldValue->recursive = 0;
		$this->set('customFieldValues', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid custom field value', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('customFieldValue', $this->CustomFieldValue->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->CustomFieldValue->create();
			if ($this->CustomFieldValue->save($this->data)) {
				$this->Session->setFlash(__('The custom field value has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The custom field value could not be saved. Please, try again.', true));
			}
		}
		$customFields = $this->CustomFieldValue->CustomField->find('list');
		$accounts = $this->CustomFieldValue->Account->find('list');
		$this->set(compact('customFields', 'accounts'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid custom field value', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CustomFieldValue->save($this->data)) {
				$this->Session->setFlash(__('The custom field value has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The custom field value could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CustomFieldValue->read(null, $id);
		}
		$customFields = $this->CustomFieldValue->CustomField->find('list');
		$accounts = $this->CustomFieldValue->Account->find('list');
		$this->set(compact('customFields', 'accounts'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for custom field value', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CustomFieldValue->delete($id)) {
			$this->Session->setFlash(__('Custom field value deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Custom field value was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>