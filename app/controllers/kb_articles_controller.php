<?php
class KbArticlesController extends AppController {

	var $name = 'KbArticles';

	function index() {
		$this->KbArticle->recursive = 0;
		$this->set('kbArticles', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid kb article', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('kbArticle', $this->KbArticle->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->KbArticle->create();
			if ($this->KbArticle->save($this->data)) {
				$this->Session->setFlash(__('The kb article has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kb article could not be saved. Please, try again.', true));
			}
		}
		$kbCategories = $this->KbArticle->KbCategory->find('list');
		$this->set(compact('kbCategories'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid kb article', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->KbArticle->save($this->data)) {
				$this->Session->setFlash(__('The kb article has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kb article could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->KbArticle->read(null, $id);
		}
		$kbCategories = $this->KbArticle->KbCategory->find('list');
		$this->set(compact('kbCategories'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for kb article', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->KbArticle->delete($id)) {
			$this->Session->setFlash(__('Kb article deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Kb article was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->KbArticle->recursive = 0;
		$this->set('kbArticles', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid kb article', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('kbArticle', $this->KbArticle->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->KbArticle->create();
			if ($this->KbArticle->save($this->data)) {
				$this->Session->setFlash(__('The kb article has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kb article could not be saved. Please, try again.', true));
			}
		}
		$kbCategories = $this->KbArticle->KbCategory->find('list');
		$this->set(compact('kbCategories'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid kb article', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->KbArticle->save($this->data)) {
				$this->Session->setFlash(__('The kb article has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kb article could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->KbArticle->read(null, $id);
		}
		$kbCategories = $this->KbArticle->KbCategory->find('list');
		$this->set(compact('kbCategories'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for kb article', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->KbArticle->delete($id)) {
			$this->Session->setFlash(__('Kb article deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Kb article was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>