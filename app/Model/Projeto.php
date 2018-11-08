<?php
class Projeto extends AppModel {
	public $name = "Projeto";

	//public $hasMany = 'FotoProjeto';
	public $hasMany = array(
		'FotoProjeto' => array(
			'className' => 'FotoProjeto',
			'foreignKey' => 'projetos_id',
			//'fields' => array('id', 'nome', 'albuns_id'),
			//'conditions' => array(),
			'order' => array('id' => 'DESC'),
			'dependent' => true,
		),
	);

	

		public $validate = array(
		'id',
		'titulo' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'Campo título é obrigatório',
			),
		),
		'data',
		'descricao' 
	);
}