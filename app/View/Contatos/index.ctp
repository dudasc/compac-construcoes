<div class="container-fluid bg-body">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>ENTRE EM CONTATO</h1>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="page-header">
				<h2>Envie sua mensagem</h2>
				<p>Entre em contato conosco, preencha o formulário abaixo e envie-nos sua mensagem.</p>
			</div>			
			<?= $this->Session->flash(); ?>
		</div>
		<div class="col-sm-6">			
			<?= $this->Form->create("Contato", array('enctype'=>"multipart/form-data")); ?>
			<div class="form-group">
				<?= $this->Form->label('Nome');?>
				<div class="input-group">
					<span class="input-group-addon">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
					<?= $this->Form->text('nome', array( 'type' => 'text', 'class' => 'form-control input-lg')); ?>
				</div>					
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<?= $this->Form->label('Cidade');?>
				<div class="input-group">
					<span class="input-group-addon">
					<span class="glyphicon glyphicon-home" aria-hidden="true"></span></span>
					<?= $this->Form->text('cidade', array('class' => 'form-control input-lg')); ?>
				</div>	
			</div>
		</div>
		<div class="col-sm-6">		
		 	<div class="form-group">
		 		<?= $this->Form->label('E-mail');?>
		 		<div class="input-group">
		 			<span class="input-group-addon">@</span>
			    	<?= $this->Form->email('email', array('class' => 'form-control input-lg')); ?>
			    </div>
		    </div>
	   	</div>					  
	   	<div class="col-sm-6">
			<div class="form-group">
				<?= $this->Form->label('Telefone');?>
				<div class="input-group">
					<span class="input-group-addon">
					<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></span>
				<?= $this->Form->tel('telefone', array( 'type' => 'text', 'class' => 'form-control input-lg')); ?>
				</div>
			</div>
		</div>
		<div class="col-sm-12">	
			<div class="form-group">
				<?= $this->Form->label('Mensagem');?>
				<?= $this->Form->textarea('mensagem', array('type' => 'text', 'class' => 'form-control input-lg', 'rows' => '8')); ?>
			</div>
			<div class="form-group">
			    <?= $this->Form->label('Anexo');?>			    
				<?= $this->Form->file('anexo'); ?>
			    <p class="help-block">Anexe sua conta de energia para receber uma proposta de orçamento.</p>			    
			</div>
		</div>
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<?= $this->Form->button('Enviar mensagem', array('class' => 'btn btn-primary btn-lg btn-block'));?>
			<?= $this->Form->end()?>
		</div>
		<div class="col-md-3"></div>
	
		<div class="col-md-12 dados-contato text-center">
			
			<address>
			<p><strong>Endereço</strong><br><?= @$enderecos[0]['Endereco']['rua']?>, nº <?= @$enderecos[0]['Endereco']['numero']?> - <?= @$enderecos[0]['Endereco']['bairro']?> - <?= @$enderecos[0]['Endereco']['cidade']?>/<?= @$enderecos[0]['Endereco']['estado']?>. CEP: <?= @$enderecos[0]['Endereco']['cep']?><br><strong>Telefone</strong><br><?= @$enderecos[0]['Endereco']['telefone']?><br><strong>Whatsapp</strong><br><?= @$enderecos[0]['Endereco']['celular']?><br><strong>E-mail</strong><br><?= @$enderecos[0]['Endereco']['email']?></p>				
			</address>		
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 mapa-contato">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.5797592730314!2d-38.44395458516532!3d-12.934709462573771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7161080931e2343%3A0xedc213a1634c234b!2sAv.+Ulysses+Guimar%C3%A3es%2C+4288+-+Novo+Horizonte%2C+Salvador+-+BA%2C+41218-700!5e0!3m2!1spt-BR!2sbr!4v1530880444849" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>