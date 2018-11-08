
<h1>Cadastro de endereço</h1>
<?php
echo $this->Html->link('Voltar', array('controller'=>'enderecos', 'action' => 'index', 'admin' => true), array('class' => 'btn btn-success'));
?>
<br><br>	
<?php echo $this->Session->flash(); ?>		
<?php echo $this->Form->create('Endereco'); ?>
<div class="form-row">
	<div class="form-group col-md-6">
		<?php echo $this->Form->input('id', array('type' => 'text', 'class' => 'form-control input-md', 'disabled', 'placeholder' => 'Código', 'required' => false)); ?>

	</div>
	<div class="form-group col-md-6">
		<?php echo $this->Form->input('rua', array('type' => 'text', 'class' => 'form-control input-md', 'id' => 'rua_id', 'placeholder' => 'Nome da rua', 'required' => false)); ?>
	</div>
	<div class="form-group col-md-6">
		<?php echo $this->Form->input('numero', array('type' => 'text', 'class' => 'form-control input-md', 'id' => 'numero_id', 'placeholder' => 'Número', 'required' => false)); ?>
	</div>
	<div class="form-group col-md-6">
		<?php echo $this->Form->input('bairro', array('type' => 'text', 'class' => 'form-control input-md', 'id' => 'bairro', 'placeholder' => 'Nome do bairro', 'required' => false)); ?>
	</div>
	<div class="form-group col-md-6">
		<?php echo $this->Form->input('cidade', array('type' => 'text', 'class' => 'form-control input-md', 'id' => 'numero_id', 'placeholder' => 'Cidade', 'required' => false)); ?>
	</div>
	<div class="form-group col-md-6">
	<?php 
	$estados = array('AC'=>'Acre','AL'=>'Alagoas','AP'=>'Amapá','AM'=>'Amazonas', 'BA'=>'Bahia', 'CE'=>'Ceará','DF'=>'Distrito Federal','ES'=>'Espírito Santo','GO'=>'Goiás','MA'=>'Maranhão', 'MT'=>'Mato Grosso','MS'=>'Mato Grosso do Sul','MG'=>'Minas Gerais','PA'=>'Pará','PB'=>'Paraíba','PR'=>'Paraná','PE'=>'Pernambuco','PI'=>'Piauí','RJ'=>'Rio de Janeiro','RN'=>'Rio Grande do Norte','RS'=>'Rio Grande do Sul','RO'=>'Rondônia','RR'=>'Roraima','SC'=>'Santa Catarina','SP'=>'São Paulo','SE'=>'Sergipe','TO'=>'Tocantins');
		 echo $this->Form->input('estado', array('type' => 'select', 'class' => 'form-control input-md', 'id' => 'estado_id', 'placeholder' => 'Estado', 'required' => false, 'options' => array($estados))); ?>
	</div>
	<div class="form-group col-md-6">
		<?php echo $this->Form->input('cep', array('type' => 'text', 'class' => 'form-control input-md', 'id' => 'cep_id', 'placeholder' => 'CEP', 'required' => false)); ?>
	</div>
	<div class="form-group col-md-6">
		<?php echo $this->Form->input('telefone', array('type' => 'tel', 'class' => 'form-control input-md', 'id' => 'telefone_id', 'placeholder' => 'Telefone', 'required' => false)); ?>
	</div>
	<div class="form-group col-md-6">
		<?php echo $this->Form->input('celular', array('type' => 'tel', 'class' => 'form-control input-md', 'id' => 'celular_id', 'placeholder' => 'Celular', 'required' => false)); ?>
	</div>
	<div class="form-group col-md-6">
		<?php echo $this->Form->input('email', array('type' => 'email', 'class' => 'form-control input-md', 'id' => 'email_id', 'placeholder' => 'E-mail', 'required' => false)); ?>
	</div>
	<div class="form-group col-md-6">
		<?php echo $this->Form->input('cnpj', array('type' => 'text', 'class' => 'form-control input-md', 'id' => 'cnpj_id', 'placeholder' => 'CNPJ', 'required' => false)); ?>
	</div>
	<div class="form-group col-md-12">
		<?php echo $this->Form->input('facebook', array('type' => 'text', 'class' => 'form-control input-md', 'id' => 'facebook_id', 'placeholder' => 'Link do facebook', 'required' => false)); ?>
	</div>
	<div class="form-group col-md-12">
		<?php echo $this->Form->input('Instagram', array('type' => 'text', 'class' => 'form-control input-md', 'id' => 'instagram_id', 'placeholder' => 'Link do instagram', 'required' => false)); ?>
	</div>
</div>
<?php echo $this->Form->submit('Salvar', array('class' => 'btn btn-primary btn-block')); ?>
<?php echo $this->Form->end();?>
