<?php
$cakeDescription = __d('cake_dev', 'Grupo Compac - ');
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
        echo $this->Html->css('painel');
        ?>
    

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#">
                    <?= $this->HTml->image('logo-small.png', array('title' => 'Compac Construções LTDA', 'alt' => 'Compac Construções LTDA', 'width' => 30, 'height' => 30))?>
                    Painel Compac</a>
                </div>
            </nav>
        </header>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm col-md-6 col-xl-6 col-lg-6"> 
                <br>         
                <p><strong>Acesso restrito.</strong> Informe seu login e senha para acessar a área restrita</p>    
                    <?php 
                        echo $this->Session->flash(); 
                        echo $this->Session -> flash('auth');
                    ?>
                     
                </div>
            </div>
            <?php                             
                echo $this->fetch('content'); 
            ?>
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
