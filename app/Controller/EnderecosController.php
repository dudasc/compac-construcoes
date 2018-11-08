<?php
App::uses('AppController', 'Controller');

class EnderecosController extends AppController {

	public $uses = array('Endereco');

	/*public function index(){
		$opcoes = array('order' => array('principal' => 1));
		$servicos = $this->Endereco->find('all', $opcoes);
		//$Projetos = $this->Projeto->query('SELECT * FROM Projetos ');
		$this->set('enderecos', $enderecos);		
	}*/

	public function admin_index(){
		$this->layout = 'painel';
		$opcoes = array('order' => array('id' => 'DESC'));
		$enderecos = $this->Endereco->find('all', $opcoes);
		//$Projetos = $this->Projeto->query('SELECT * FROM Projetos ');
		$this->set('enderecos', $enderecos);
	}

	public function admin_add($id = null) {
		$this->layout = 'painel';

		if ($id != null) {
			$this->Endereco->id = $id;
			if ($this->request->is('get')) {

				$this->request->data = $this->Endereco->read();
			} else {
				if ($this->Endereco->save($this->request->data)) {
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
				$this->Endereco->set(array(
					//'data' => date("Y-m-d")
				));
				if ($this->Endereco->save($this->data)) {
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
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true)));
			//$this->redirect(array('action' => 'index'));
		}
		if ($this->Endereco->delete($id)) {
			$this->Session->setFlash('<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							Serviço excluído com sucesso.
						  </div>');
		} else {
			$this->Session->setFlash('<div class="alert alert-error">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							Erro excluir.
						  </div>');
		}
		$this->redirect($this->referer());
	}


}