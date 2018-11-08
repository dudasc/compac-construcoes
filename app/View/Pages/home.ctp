<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
    <li data-target="#carousel-example-generic" data-slide-to="6"></li>    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/01.jpg" alt="">
    </div>
    <div class="item">
      <img src="img/02.jpg" alt="">
    </div>
    <div class="item">
      <img src="img/03.jpg" alt="">
    </div>
    <div class="item">
      <img src="img/04.jpg" alt="">
    </div>
    <div class="item">
      <img src="img/05.jpg" alt="">
    </div>
    <div class="item">
      <img src="img/06.jpg" alt="">
    </div>
    <div class="item">
      <img src="img/07.jpg" alt="">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container-fluid bg-cinza">
  <div class="container">
    <div class="row">
    <div class="col-sm-8 col-sm-offset-2 box-home text-center">
        <h2>SOBRE A COMPAC</h2>      
      <hr>
    </div>
      <div class="col-sm-12 box-home text-center">
        <p>A <strong>COMPAC CONSTRUÇÕES LTDA</strong> é uma empresa dedicada ao desenvolvimento de novas tecnologias construtivas e execução de obras com alto padrão de qualidade. Atual em diversos setores da Engenharia Civil, Elétrica e Mecânica. Desenvolve e executa obras de Energias Renováveis, em especial a Energia Solar e Eólica.</p>
        <a class="btn btn-warning btn-lg" href="sobre" role="button" title="Conheça nossa empresa">+ Saiba mais</a>
        <br><br>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2 box-home text-center">
      <h2>SEGMENTOS DE ATUAÇÃO</h2>      
      <hr>
    </div>
    <div class="col-sm-4">
      <a href="servicos">
        <?= $this->Html->image('seg01.jpg', array('alt' => 'Infraestrutura civil', 'class' => 'img-responsive img-border img-thumbnail'))?></a>
        <br><br>
    </div>
    <div class="col-sm-4">
      <a href="servicos">
        <?= $this->Html->image('seg02.jpg', array('alt' => 'Infraestrutura elétrica', 'class' => 'img-responsive img-border img-thumbnail'))?></a>
        <br><br>
      </div>
      <div class="col-sm-4 ">
        <a href="servicos">
        <?= $this->Html->image('seg03.jpg', array('alt' => 'Energia solar/eólica', 'class' => 'img-responsive img-border img-thumbnail'))?></a>
        <br><br>
      </div>
      
    </div>
</div>
<!--
<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <hr>
    </div>
    <div class="col-sm-5 col-md-5 col-lg-5 col-xs-12 ">
      <div class="slideshow">
        <?= $this->Html->image('sld1.jpg', array('alt' => '', 'class' => 'img-responsive img-rounded img-thumbnail'))?>
        <?= $this->Html->image('sld2.jpg', array('alt' => '', 'class' => 'img-responsive img-rounded img-thumbnail'))?>
        <?= $this->Html->image('sld3.jpg', array('alt' => '', 'class' => 'img-responsive img-rounded img-thumbnail'))?>
        <?= $this->Html->image('sld4.jpg', array('alt' => '', 'class' => 'img-responsive img-rounded img-thumbnail'))?>
      </div>
    </div>
    <div class="col-sm-7 col-md-7 col-lg-7 col-xs-12 box-home-servicos">
      <h2>Conheça nossos projetos</h2>
      <a class="btn btn-primary btn-lg" href="projetos" role="button" title="Conheça nossos serviços">+ Projetos desenvolvidos</a>
    </div>   
  </div> 
</div>-->
<div class="container-fluid bg-cinza">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 box-home col-sm-offset-2 text-center">
        <h2>NOSSOS CLIENTES</h2>
        <hr>
      </div>
    </div>
    <div class="row">   
      <div class="col-xs-6 col-sm-2">
        <a href="http://www.salvador.ba.gov.br/" target="_blank">
        <?= $this->Html->image('logo-salvador.jpg', array('title' => 'Prefeitura municipal de Salvador', 'alt' => 'Prefeitura municipal de Salvador', 'class' => 'img-thumbnail img-responsive center-block'))?></a>
      </div>
      <div class="col-xs-6 col-sm-2">
        <a href="http://www.ba.gov.br/" target="_blank">
        <?= $this->Html->image('logo-governo.jpg', array('title' => 'Governo do estado da Bahia', 'alt' => 'Governo do estado da Bahia', 'class' => 'thumbnail img-responsive center-block'))?></a>
      </div>
      <div class="col-xs-6 col-sm-2">
        <a href="http://www.defensoria.ba.def.br/" target="_blank">
        <?= $this->Html->image('logo-defensoria.jpg', array('title' => 'Defensoria pública da Bahia', 'alt' => 'Defensoria pública da Bahia', 'class' => 'thumbnail img-responsive center-block'))?></a>
      </div>
      <div class="col-xs-6 col-sm-2">
        <a href="http://www.cbpm.ba.gov.br/" target="_blank">
        <?= $this->Html->image('logo-companhia.jpg', array('title' => 'Companhia baiana de pesquisa mineiral', 'alt' => 'Companhia baiana de pesquisa mineiral', 'class' => 'thumbnail img-responsive center-block'))?></a>
      </div>
      <div class="col-xs-6 col-sm-2">
        <a href="http://www.coelba.com.br/" target="_blank">
          <?= $this->Html->image('logo-coelba.jpg', array('title' => 'COELBA - Neoenergia', 'alt' => 'COELBA - Neoenergia', 'class' => 'thumbnail img-responsive center-block'))?></a>
      </div>
      <div class="col-xs-6 col-sm-2">
        <a href="http://www.embasa.ba.gov.br/" target="_blank">
        <?= $this->Html->image('logo-embasa.jpg', array('title' => 'Embasa', 'alt' => 'Embasa', 'class' => 'thumbnail img-responsive center-block'))?></a>
      </div>
      </div>
      <div class="row">
      <div class="col-xs-6 col-sm-2">
        <a href="http://www.tre.ba.gov.br/" target="_blank">
        <?= $this->Html->image('logo-tre.jpg', array('title' => 'TRS - Bahia', 'alt' => 'TRE-Bahia', 'class' => 'thumbnail img-responsive center-block'))?></a>
      </div>
      <div class="col-xs-6 col-sm-2">
        <a href="http://portal.ifba.edu.br/" target="_blank">
        <?= $this->Html->image('logo-ifba.jpg', array('title' => 'IF Bahia', 'alt' => 'IF Bahia', 'class' => 'thumbnail img-responsive center-block'))?></a>
      </div>
      <div class="col-xs-6 col-sm-2">
        <a href="http://ifbaiano.edu.br/portal/" target="_blank">
        <?= $this->Html->image('logo-ifbaiano.jpg', array('title' => 'IFBaiano', 'alt' => 'IFBaiano', 'class' => 'thumbnail img-responsive center-block'))?></a>
      </div>
      <div class="col-xs-6 col-sm-2">
        <a href="http://www.brasil.gov.br/" target="_blank">
        <?= $this->Html->image('logo-governo-federal.jpg', array('title' => 'Governo federal', 'alt' => 'Governo federal', 'class' => 'thumbnail img-responsive center-block'))?></a>
      </div>
      <div class="col-xs-6 col-sm-2">
        <a href="https://www.ufba.br/" target="_blank">
        <?= $this->Html->image('logo-ufba.jpg', array('title' => 'Universidade Federal da Bahia', 'alt' => 'Universidade Federal da Bahia', 'class' => 'thumbnail img-responsive center-block'))?></a>
      </div>
      <div class="col-xs-6 col-sm-2">
        <a href="http://www.uneb.br/" target="_blank">
        <?= $this->Html->image('logo-uneb.jpg', array('title' => 'Universidade do Estado da Bahia', 'alt' => 'Universidade do Estado da Bahia', 'class' => 'thumbnail img-responsive center-block'))?></a>
      </div>
      </div>
      <div class="row">

      <div class="col-xs-6 col-sm-2">
        <a href="http://www.secti.ba.gov.br/parque/" target="_blank">
        <?= $this->Html->image('logo-parque.jpg', array('title' => 'Parque tecnológico da Bahia', 'alt' => 'Parque tecnológico da Bahia', 'class' => 'thumbnail img-responsive center-block'))?></a>
      </div>
      <div class="col-xs-6 col-sm-2">
        <a href="http://www.ssp.ba.gov.br/" target="_blank">
        <?= $this->Html->image('logo-ssp.jpg', array('title' => 'Secretaria de segurança pública', 'alt' => 'Secretaria de segurança pública', 'class' => 'thumbnail img-responsive center-block'))?></a>
      </div>
      <div class="col-xs-6 col-sm-2">
        <a href="http://www.car.ba.gov.br/" target="_blank">
        <?= $this->Html->image('logo-car.jpg', array('title' => 'Companhia de desenvolvimento e ação regional', 'alt' => 'Companhia de desenvolvimento e ação regional', 'class' => 'thumbnail img-responsive center-block'))?></a>
      </div>
      <div class="col-xs-6 col-sm-2">
        <a href="http://www.fnde.gov.br/" target="_blank">
        <?= $this->Html->image('logo-fnde.jpg', array('title' => 'Fundo nacional de desenvolvimento da educação', 'alt' => 'Fundo nacional de desenvolvimento da educação', 'class' => 'thumbnail img-responsive center-block'))?></a>
      </div>
      <div class="col-xs-6 col-sm-2">
        <a href="https://www.irdeb.ba.gov.br/" target="_blank">
        <?= $this->Html->image('logo-irdeb.jpg', array('title' => 'Instituto de Radiodifusão Educativa da Bahia', 'alt' => 'Instituto de Radiodifusão Educativa da Bahia', 'class' => 'thumbnail img-responsive center-block'))?></a>
      </div>
      <div class="col-xs-6 col-sm-2">
        <a href="http://www.saude.ba.gov.br/" target="_blank">
        <?= $this->Html->image('logo-sesab.jpg', array('title' => 'Secretaria da saúde', 'alt' => 'Secretaria da saúde', 'class' => 'thumbnail img-responsive center-block'))?></a>
      </div>
    </div>
  </div>
</div>
