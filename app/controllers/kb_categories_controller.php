<?php
class KbCategoriesController extends AppController {

	var $name = 'KbCategories';

	function index() {
		$this->KbCategory->recursive = 0;
		$this->set('kbCategories', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid kb category', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('kbCategory', $this->KbCategory->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->KbCategory->create();
			if ($this->KbCategory->save($this->data)) {
				$this->Session->setFlash(__('The kb category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kb category could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid kb category', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->KbCategory->save($this->data)) {
				$this->Session->setFlash(__('The kb category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kb category could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->KbCategory->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for kb category', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->KbCategory->delete($id)) {
			$this->Session->setFlash(__('Kb category deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Kb category was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->KbCategory->recursive = 0;
		$this->set('kbCategories', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid kb category', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('kbCategory', $this->KbCategory->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->KbCategory->create();
			if ($this->KbCategory->save($this->data)) {
				$this->Session->setFlash(__('The kb category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kb category could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid kb category', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->KbCategory->save($this->data)) {
				$this->Session->setFlash(__('The kb category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kb category could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->KbCategory->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for kb category', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->KbCategory->delete($id)) {
			$this->Session->setFlash(__('Kb category deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Kb category was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>