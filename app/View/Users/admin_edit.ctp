<h1>Dados de usuário</h1>
<?php
echo $this->Html->link('Voltar', array('controller'=>'Users', 'action' => 'index', 'admin' => true), array('class' => 'btn btn-success'));
?>
<br><br>
		<?php echo $this->Session->flash(); ?>

<?php echo $this -> Form -> create('User', array('action' => 'edit')); ?>
<div class="form-row">	
	<div class="form-group col-md-6">
	<?php echo $this -> Form -> label('User.username', 'Login'); ?>
	<?php echo $this -> Form -> input('username', array('label' => false, 'class' => 'form-control input-md', 'id' => 'nome_id', 'placeholder' => 'Nome de usuário', 'required' => false)); ?>
	</div>
	<div class="form-group col-md-6">
	<?php echo $this -> Form -> label('User.email', 'E-mail'); ?>
	<?php echo $this -> Form -> input('email', array('label' => false, 'class' => 'form-control input-md', 'id' => 'email_id', 'placeholder' => 'E-mail', 'required' => false)); ?>
	</div>
	<div class="form-group col-md-6">
		<?php echo $this -> Form -> label('User.password', 'Nova senha'); ?>
		<?php echo $this -> Form -> input('password', array('type' => 'password', 'label' => false, 'size' => 20,'class' => 'form-control input-md', 'id' => 'nome_id', 'placeholder' => 'Senha', 'required' => false)); ?>
	</div>
	<div class="form-group col-md-6">
		<?php echo $this -> Form -> label('User.password_confirm', 'Confirmar nova senha'); ?>
		<?php echo $this -> Form -> input('password_confirm', array('type' => 'password', 'label' => false,  'class' => 'form-control input-md', 'id' => 'nome_id', 'placeholder' => 'Comfirma senha', 'required' => false)); ?>
	</div>
</div>
<?php echo $this -> Form -> submit('Atualizar dados', array('class' => 'btn btn-primary btn-block')); ?>