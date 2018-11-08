<footer>
	<div class="container-fluid footer">
		<div class="container">
			<div class="row">
				
				<!--
				<div class="col-sm-1"></div>
				<div class="col-sm-3">
					<p><span class="glyphicon"><?= $this->HTml->image('phone.png', array('alt' => 'fone'))?></span> <?= @$enderecos[0]['Endereco']['telefone']?> </p>
				</div>
				<div class="col-sm-3">
					<p><span class="glyphicon"><?= $this->HTml->image('message.png', array('alt' => 'e-mail'))?> </span> <?= @$enderecos[0]['Endereco']['celular']?></p>	
				</div>
				<div class="col-sm-4">
					<p>
					<span class="glyphicon"><?= $this->HTml->image('email.png', array('alt' => 'e-mail'))?> </span><?= @$enderecos[0]['Endereco']['email']?></p>
				</div>				
				-->
				<div class="col-sm-9 contact-footer">	
				<p><?= @$enderecos[0]['Endereco']['rua']?>, nº <?= @$enderecos[0]['Endereco']['numero']?> - <?= @$enderecos[0]['Endereco']['bairro']?> - <?= @$enderecos[0]['Endereco']['cidade']?>/<?= @$enderecos[0]['Endereco']['estado']?>. CEP: <?= @$enderecos[0]['Endereco']['cep']?>. <strong>Tel: </strong> <?= @$enderecos[0]['Endereco']['telefone']?></strong><strong> E-mail: </strong> <?= @$enderecos[0]['Endereco']['email']?></p>
					
				</div>
				<div class="col-sm-3 social">							
					<a href="<?= @$enderecos[0]['Endereco']['facebook']?>"><span class="glyphicon"><?= $this->HTml->image('face-icon.png', array('alt' => 'Facebook', 'title' => "Conheça nossa página no Facebook!"))?> </span>	</a>
					<a href="<?= @$enderecos[0]['Endereco']['instagram']?>"><span class="glyphicon"><?= $this->HTml->image('insta-icon.png', array('alt' => 'Instagram', 'title' => "Conheça nosso perfil no Instagram!"))?> </span>	</a>
				</div>	
				<div class="col-sm-12">
					<hr>
				</div>
				<div class="col-sm-12">
				<p class="copy">© Compac - 2018. Todos os direitos reservados.<br>
				<span class="dev">developed by <a href="mailto:dudatimbe@gmail.com" alt="desenvolvido por dudatimbe@gmail.com" title="desenvolvido por dudatimbe@gmail.com"><strong>esc</strong></a></span></p>
				</div>					
			</div>
		</div>
	</div>
</footer>