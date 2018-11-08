<?php

App::uses('AppController', 'Controller');

class ProjetosController extends AppController {
	public $uses = array('Projeto', 'FotoProjeto');
	
	public function index() {
		$opcoes = array('order' => array('id' => 'DESC'), 'limit' => 20);
		//$projetos = $this->Projeto->find('all', $opcoes);
		$this->paginate = $opcoes;
		$projetos = $this->paginate();
		//$opcoes = array('fields' => array('id', 'titulo', 'descricao', 'fp.nome', 'FotoProjeto.id'));
		//$projetos = $this->Projeto->find('all', array('order', array('id' => 'DESC')));
			/*array('joins'=>
			    array(
			       	array('table'=>'fotos_projetos','alias'=>'fp','type'=>'left',
			         'conditions'=>
			        	array('fp.projetos_id = Projeto.id')
			    	)
				), $opcoes
			)
		);*/
        $this->set('projetos', $projetos);

        $fotos = $this->FotoProjeto->find('all');
		$this->set('fotos', $fotos);
	}

	public function admin_index() {
		$this->layout = 'painel';

		$opcoes = array('order' => array('id' => 'DESC'));
		$projetos = $this->Projeto->find('all', $opcoes);
		//$Projetos = $this->Projeto->query('SELECT * FROM Projetos ');
		$this->set('projetos', $projetos);



	}

	public function admin_add($id = null) {
		$this->layout = 'painel';

		if ($id != null) {
			$this->Projeto->id = $id;
			if ($this->request->is('get')) {

				$this->request->data = $this->Projeto->read();
			} else {
				$this->Projeto->set(array(
					'data' => date("Y-m-d")
				));
				if ($this->Projeto->save($this->request->data)) {
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
				$this->Projeto->set(array(
					//'data' => date("Y-m-d")
				));
				if ($this->Projeto->save($this->data)) {
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

	public function admin_fotos($id = null) {
		$this->layout = 'painel';
		
		$this->Projeto->id = $id;
		if ($this->request->is('get')) {
			//$fotos = $this->FotoProjeto->find('all');
			//$this->set('fotos', $fotos);
			$this->request->data =  $this->Projeto->read();
			$this->set('projeto', $this->request->data);
			$options = array('join' => 'right', 'conditions' => array('Projeto.id =' => $id));
			$fotos = $this->FotoProjeto->find('all', $options);
			$this->set('fotos', $fotos);

		} else {
			if ($this->Projeto->save($this->request->data)) {
				$this->Session->setFlash('<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">
									&times;
								</button>
								Projeto salvo com sucesso.
						  </div>', 'default');

			} else {
				$this->Session->setFlash('<div class="alert alert-error">
								<button type="button" class="close" data-dismiss="alert">
									&times;
								</button>
								Erro ao salvar Projeto.
						  </div>', 'default');
			}
			$this->redirect($this->referer());
		}
	}

	public function admin_delete($id = null) {
		$id = $this->data['Projeto']['id'];
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true)));
			//$this->redirect(array('action' => 'index'));
		}
		if ($this->Projeto->delete($id)) {
			$this->Session->setFlash('<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							Projeto excluído com sucesso.
						  </div>');
		} else {
			$this->Session->setFlash('<div class="alert alert-warning">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							Erro excluir.
						  </div>');
		}
		$this->redirect($this->referer());
	}

	public function ver($id = null){
		$this->set('title_for_layout', 'adsfasfaf asdf asdf asdf asdf ');
		$this->layout = 'paginas';
		$this->Projeto->id = $id;
		if ($this->request->is('get')) {

			$this->request->data = $this->Projeto->read();
			//die(var_dump($this->request->data));
			$this->set('title_for_layout', $this->request->data['Projeto']['nome']);
			$this->set('projeto', $this->request->data);
		}
	}
}