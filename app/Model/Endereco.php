<?php
class Endereco extends AppModel {
	public $name = 'Endereco';
		public $validate = array(
		'id',
		'rua' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'Campo nome é obrigatório',
			),
		),
		'numero',
		'email' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'Campo obrigatório',
			),

			'isUnique' => array(
				'rule' => array('isUnique', true),
				'message' => 'Este e-mail de usuário já existe',
			),
		),
	);
}