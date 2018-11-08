<?php
App::uses('AppController', 'Controller');

class ServicosController extends AppController {

	public $uses = array('Servico');

	public function index(){
		$opcoes = array('order' => array('nome' => 'ASC'));
		$servicos = $this->Servico->find('all', $opcoes);
		//$Projetos = $this->Projeto->query('SELECT * FROM Projetos ');
		$this->set('servicos', $servicos);
		
	}

	public function admin_index(){
		$this->layout = 'painel';
		$opcoes = array('order' => array('id' => 'DESC'));
		$servicos = $this->Servico->find('all', $opcoes);
		//$Projetos = $this->Projeto->query('SELECT * FROM Projetos ');
		$this->set('servicos', $servicos);
	}

	public function admin_add($id = null) {
		$this->layout = 'painel';

		if ($id != null) {
			$this->Servico->id = $id;
			if ($this->request->is('get')) {

				$this->request->data = $this->Servico->read();
			} else {
				if ($this->Servico->save($this->request->data)) {
					$this->Session->setFlash('<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">
									&times;
								</button>
								Dados salvos com sucesso.
						  </div>', 'default');

				} else {
					$this->Session->setFlash('<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert">
									&times;
								</button>
								Erro ao salvar dados.
						  </div>', 'default');
				}
				$this->redirect($this->referer());
			}
		} else {
			if ($this->request->is('post')) {
				$this->Servico->set(array(
					//'data' => date("Y-m-d")
				));
				if ($this->Servico->save($this->data)) {
					$this->Session->setFlash('<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						Dados cadastrados com sucesso.
				  	</div></p>');
				} else {
					$this->Session->setFlash('<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						Erro ao cadastrar dados.
				  	</div>');
				}
				$this->redirect($this->referer());
			}
		}
	}

	public function admin_delete($id = null) {
		$id = $this->data['Servico']['id'];
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true)));
			//$this->redirect(array('action' => 'index'));
		}
		if ($this->Servico->delete($id)) {
			$this->Session->setFlash('<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							Serviço excluído com sucesso.
						  </div>');
		} else {
			$this->Session->setFlash($this->Servico->id.'<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							Erro ao excluir serviço.
						  </div>');
		}
		$this->redirect($this->referer());
	}


}