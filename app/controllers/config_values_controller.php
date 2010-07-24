<?php
class ConfigValuesController extends AppController {

	var $name = 'ConfigValues';

	function index() {
		$this->ConfigValue->recursive = 0;
		$this->set('configValues', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid config value', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('configValue', $this->ConfigValue->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ConfigValue->create();
			if ($this->ConfigValue->save($this->data)) {
				$this->Session->setFlash(__('The config value has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The config value could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid config value', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ConfigValue->save($this->data)) {
				$this->Session->setFlash(__('The config value has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The config value could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ConfigValue->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for config value', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ConfigValue->delete($id)) {
			$this->Session->setFlash(__('Config value deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Config value was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->ConfigValue->recursive = 0;
		$this->set('configValues', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid config value', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('configValue', $this->ConfigValue->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->ConfigValue->create();
			if ($this->ConfigValue->save($this->data)) {
				$this->Session->setFlash(__('The config value has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The config value could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid config value', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ConfigValue->save($this->data)) {
				$this->Session->setFlash(__('The config value has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The config value could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ConfigValue->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for config value', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ConfigValue->delete($id)) {
			$this->Session->setFlash(__('Config value deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Config value was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>