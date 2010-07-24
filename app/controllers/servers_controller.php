<?php
class ServersController extends AppController {

	var $name = 'Servers';

	function index() {
		$this->Server->recursive = 0;
		$this->set('servers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid server', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('server', $this->Server->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Server->create();
			if ($this->Server->save($this->data)) {
				$this->Session->setFlash(__('The server has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The server could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid server', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Server->save($this->data)) {
				$this->Session->setFlash(__('The server has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The server could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Server->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for server', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Server->delete($id)) {
			$this->Session->setFlash(__('Server deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Server was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Server->recursive = 0;
		$this->set('servers', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid server', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('server', $this->Server->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Server->create();
			if ($this->Server->save($this->data)) {
				$this->Session->setFlash(__('The server has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The server could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid server', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Server->save($this->data)) {
				$this->Session->setFlash(__('The server has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The server could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Server->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for server', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Server->delete($id)) {
			$this->Session->setFlash(__('Server deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Server was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>