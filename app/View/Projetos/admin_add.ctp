<h1>Cadastro de projeto</h1>
<?php
echo $this->Html->link('Voltar', array('controller'=>'projetos', 'action' => 'index', 'admin' => true), array('class' => 'btn btn-success'));
?>
<br><br>

		<?php echo $this->Session->flash(); ?>
			
		<?php echo $this->Form->create('Projeto'); ?>
		
		<div class="form-group">
			<?php echo $this->Form->input('id', array('type' => 'text', 'class' => 'form-control input-md', 'id' => 'nome_id', 'disabled', 'placeholder' => 'Código')); ?>
	
		</div>
		<div class="form-group">
		<?php echo $this->Form->label('Data');?>
			<?php echo $this->Form->date('data', array('class' => 'form-control input-md')); ?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('titulo', array('type' => 'text', 'class' => 'form-control input-md', 'placeholder' => 'Título do projeto - Cidade/estado')); ?>
		</div>

		<div class="form-group">			
			<?php echo $this->Form->input('descricao', array('label'=> true,'type' => 'textarea', 'class' => 'form-control input-md tinymce','label' => 'Descrição',  'placeholder' => 'Descrição do projeto')); ?>
		</div>

	<?php echo $this->Form->submit('Salvar', array('type' => 'submit', 'class' => 'btn btn-primary btn-block')); ?>


