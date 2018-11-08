<h3>Dados pessoais</h3>
<br><br>
<?php echo $this->Session->flash(); ?>

<?php echo $this -> Form -> create('User', array('action' => 'add')); ?>

<?php echo $this -> Form -> label('User.email', 'E-mail'); ?>
<div class="form-group">
<?php echo $this -> Form -> email('email', array('label' => false, 'class' => 'form-control input-md', 'id' => 'email_id', 'placeholder' => 'E-mail')); ?>
</div>

<?php echo $this -> Form -> label('User.username', 'login'); ?>
<div class="form-group">
<?php echo $this -> Form -> input('username', array('label' => false, 'class' => 'form-control input-md', 'id' => 'nome_id', 'placeholder' => 'Nome do ambiente', 'required' => false)); ?>
</div>

<?php echo $this -> Form -> label('User.password', 'Nova senha'); ?>
<div class="form-group">
<?php echo $this -> Form -> input('password', array('type' => 'password', 'label' => false, 'size' => 20,'class' => 'form-control input-md', 'id' => 'nome_id', 'placeholder' => 'Nome do ambiente', 'required' => false)); ?>
</div>

<?php echo $this -> Form -> label('User.password_confirm', 'Confirmar nova senha'); ?>
<div class="form-group">
<?php echo $this -> Form -> input('password_confirm', array('type' => 'password', 'label' => false,  'class' => 'form-control input-md', 'id' => 'nome_id', 'placeholder' => 'Nome do ambiente', 'required' => false)); ?>
</div>

<?php echo $this -> Form -> submit('Atualizar dados', array('class' => 'btn btn-primary btn-block')); ?>