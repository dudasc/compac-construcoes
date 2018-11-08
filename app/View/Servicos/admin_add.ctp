<h1>Cadastro de serviço</h1>
<?php
echo $this->Html->link('Voltar', array('controller'=>'servicos', 'action' => 'index', 'admin' => true), array('class' => 'btn btn-success'));
?>
<br><br>
<?php echo $this->Session->flash(); ?>
	
<?php echo $this->Form->create('Servico'); ?>
	
<div class="form-group">
	<?php echo $this->Form->input('id', array('type' => 'text', 'class' => 'form-control input-md', 'disabled', 'placeholder' => 'Código', 'required' => false)); ?>
</div>
<div class="form-group">
	<?php echo $this->Form->input('nome', array('type' => 'text', 'class' => 'form-control input-md', 'id' => 'nome_id', 'placeholder' => 'Título do serviço', 'required' => false)); ?>
</div>
<div class="form-group">
	<?php echo $this->Form->input('descricao', array('id'=>'desc_id','type' => 'textarea', 'class' => 'form-control input-md tinymce','label' => 'Descrição',  'placeholder' => 'Descrição do projeto')); ?>
</div>
<?php echo $this->Form->submit('Salvar', array('type' => 'submit', 'class' => 'btn btn-primary btn-block')); ?>
<?php echo $this->Form->end();?>