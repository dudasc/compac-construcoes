<?php
class Contato extends AppModel {
	public $name = 'Contato';
	public $useTable = false;

	public $validate = array(
		'nome' => array(
			'rule' => 'notEmpty',
			'message' => 'Campo de preenchimento obrigatório'
		),
		'email' => array(
			'rule' => 'notEmpty',
			'message' => 'Campo de preenchimento obrigatório'
		),
		'cidade' => array(
			'rule' => 'notEmpty',
			'message' => 'Campo de preenchimento obrigatório'
		),
		'telefone',

		'mensagem' => array(
			'rule' => 'notEmpty',
			'message' => 'Campo de preenchimento obrigatório'
		),
		'anexo'
	);
}