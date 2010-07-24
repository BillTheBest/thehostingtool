<?php
class P2hForumsController extends AppController {

	var $name = 'P2hForums';

	function index() {
		$this->P2hForum->recursive = 0;
		$this->set('p2hForums', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid p2h forum', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('p2hForum', $this->P2hForum->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->P2hForum->create();
			if ($this->P2hForum->save($this->data)) {
				$this->Session->setFlash(__('The p2h forum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The p2h forum could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid p2h forum', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->P2hForum->save($this->data)) {
				$this->Session->setFlash(__('The p2h forum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The p2h forum could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->P2hForum->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for p2h forum', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->P2hForum->delete($id)) {
			$this->Session->setFlash(__('P2h forum deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('P2h forum was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->P2hForum->recursive = 0;
		$this->set('p2hForums', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid p2h forum', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('p2hForum', $this->P2hForum->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->P2hForum->create();
			if ($this->P2hForum->save($this->data)) {
				$this->Session->setFlash(__('The p2h forum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The p2h forum could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid p2h forum', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->P2hForum->save($this->data)) {
				$this->Session->setFlash(__('The p2h forum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The p2h forum could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->P2hForum->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for p2h forum', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->P2hForum->delete($id)) {
			$this->Session->setFlash(__('P2h forum deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('P2h forum was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>