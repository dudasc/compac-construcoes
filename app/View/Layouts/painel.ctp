<?php
$cakeDescription = __d('cake_dev', 'Comapc - ');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>
            <?php echo $cakeDescription ?>
            <?php echo $this->fetch('title'); ?>
        </title>
        <?php
            echo $this->Html->meta('icon');      
            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
        ?>
         <!-- Required meta tags -->
        
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php echo $this->Html->css('painel');?>
        
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>
          tinymce.init({ 
            selector:'.tinymce',
            removeformat : [
                {selector : 'b,strong,em,i,font,u,strike', remove : 'all', split : true, expand : false, block_expand : true, deep : true},
                {selector : 'span', attributes : ['style', 'class'], remove : 'empty', split : true, expand : false, deep : true},
                {selector : '*', attributes : ['style', 'class'], split : false, expand : false, deep : true}
            ],
            
            plugins: "link",
            menubar: false,       
            height: 250,
            toolbar: 'undo redo | bold italic underline | removeformat | alignleft| numlist bullist | link | alignleft | alignjustify'
            });

        </script>
    </head>
    <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
            <?php
                $dominio= $_SERVER['HTTP_HOST'];
                $url = "http://" . $dominio. "/admin";
            ?>
                <a class="navbar-brand" href="<?=$url?>">
                <?= $this->HTml->image('logo-small.png', array('title' => 'Compac Construções LTDA', 'alt' => 'Compac Construções LTDA', 'width' => 30, 'height' => 30))?>
                Painel Compac</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">              
                        <li class="nav-item dropdown">
                          <?php
                          //Retorna o array com o id, nome do usuário e password.
                            $valor = $this->Session->read('Auth.User');                        
                            ?>
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $valor['username']?></a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                            echo $this->Html->link('Dados pessoais', array('controller' => 'users', 'action' => 'index', 'admin' => true), array('alt' => '', 'title' => '', 'class' => 'dropdown-item')); ?>
                            <div class="dropdown-divider"></div>
                            <?php echo $this->Html->link('Sair', array('controller'=>'users', 'action' => 'logout'), array('class' => 'dropdown-item'));
                                      ?>                 
                            </div>
                        </li>             
                    </ul>    
                </div>
            </div>
        </nav>
        <br>
        </header>
            
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                    <div class="list-group">
                        <button type="button" class="list-group-item list-group-item-action active">Categorias</button>
                        
                        <?php echo $this->Html->link('Serviços', array('controller' => 'servicos', 'action' => 'index', 'admin' => true), array('class' => 'list-group-item list-group-item-action','alt' => '', 'title' => '')); ?>
                        <?php echo $this->Html->link('Clientes e projetos', array('controller' => 'projetos', 'action' => 'index', 'admin' => true), array('class' => 'list-group-item list-group-item-action','alt' => '', 'title' => '')); ?>
                        <?php echo $this->Html->link('Endereços', array('controller' => 'enderecos', 'action' => 'index', 'admin' => true), array('class' => 'list-group-item list-group-item-action','alt' => '', 'title' => '')); ?>
                        <?php echo $this->Html->link('Dados pessoais', array('controller' => 'users', 'action' => 'index', 'admin' => true), array('class' => 'list-group-item list-group-item-action', 'alt' => '', 'title' => '')); ?>  
                        <?php echo $this->Html->link('Administração do site', array('controller' => 'pages', 'action' => 'administracao', 'admin' => true), array('class' => 'list-group-item list-group-item-action list-group-item-dark', 'alt' => '', 'title' => '')); ?>        
                    </div>
                    <br>
                </div>              
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">  
                <?php //echo $this->Flash->render(); ?>
                <?php echo $this->fetch('content'); ?> 
                </div>
                               
            </div>
            
            <footer>
                <div class="row">
                    <div class="col-sm">  
                        <p><small>© Copyright Compac - 2018</small></p>
                    </div>
                </div>
            </footer>
        </div>  
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>      
    </body>
    <?php //echo $this->element('sql_dump'); ?>
</html>