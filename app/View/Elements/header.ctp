<header>
  <div class="container">
  	<div class="row top">
      <div class="col-md-4 col-sm-4">
  			<a class="navbar-brand" href="http://www.compacconstrucoes.com.br">
  	      		<?= $this->HTml->image('logo.png', array('title' => 'Compac Construções LTDA', 'alt' => 'Compac Construções LTDA', 'class' => 'img-responsive'))?>
  	     </a>
      </div>
      <div class="col-md-8 col-sm-8 text-right contact-top">
          <strong>ATENDIMENTO</strong>
          <?php
              echo "<p>".@$enderecos[0]['Endereco']['telefone']."</p>";
              echo "<small>".@$enderecos[0]['Endereco']['email']."</small>";
          ?>
      </div>
  	</div>
  </div>
  <nav class="navbar navbar-default">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        	<li><?php echo $this->Html->link('HOME', array('controller' => 'pages', 'action' => 'index'), array('title' => 'Home')); ?></li>
          <li><?php echo $this->Html->link('QUEM SOMOS', array('controller' => 'pages', 'action' => 'sobre'), array('title' => 'Sobre a empresa')); ?></li>
         <li><?php echo $this->Html->link('SOLUÇÕES E SERVIÇOS', array('controller' => 'servicos', 'action' => 'index'), array('title' => 'Soluções e serviços')); ?></li>
          <li><?php echo $this->Html->link('ENERGIA SOLAR', array('controller' => 'pages', 'action' => 'energia_solar'), array('title' => 'Energia solar', 'class' => 'orange-menu')); ?></li>
          <li><?php echo $this->Html->link('OBRAS DA COMPAC', array('controller' => 'projetos', 'action' => 'index'), array('title' => 'Conheça nossos cliente e os projetos já desenvolvidos')); ?></li>
          <li><?php echo $this->Html->link('ENTRE EM CONTATO', array('controller' => 'contatos', 'action' => 'index'), array('title' => 'Entre em contato conosco')); ?></li>
        </ul>      
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</header>