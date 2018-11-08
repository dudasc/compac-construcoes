<?php
class Servico extends AppModel {
		public $validate = array(
		'id',
		'nome' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'Campo nome é obrigatório',
			),
		),
		'descricao' 
	);
}