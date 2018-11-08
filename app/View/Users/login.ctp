<div class="row justify-content-md-center">
<div class="col-xl-6 col-md-6 col-lg-12 col-sm-4">

   <?php
    echo $this->Form->create(
      'User',
      array(
        'url' => array(
          'controller' => 'Users',
          'action'     => 'login'
        )
      )
    );
  ?>
    <div class="form-group">
      <label for="exampleInputEmail1">Login</label>    
      <?php 
        echo $this->Form->input('username', array('label' => false,'class' => 'form-control','placeholder'=>"Nome de usuário", 'type' => 'text', 'required' => 'required'));
        ?>    
    </div>

    <div class="form-group">
      <label class="control-label" for="inputPassword">Senha</label>
      <div class="casontrols">
      <?php 
       echo $this->Form->input('password',array('label' => false,'type'=>'password', 'class' => 'form-control', 'placeholder'=>'Senha', 'id'=>"inputPassword", 'required' => 'required'));?>      
      </div>
    </div> 
    <div class="form-group">      
      <!-- Button trigger modal -->
      <small id="emailHelp" class="form-text text-muted">
      <a href="#" data-toggle="modal" data-target="#modal">
        Esqueci minha senha</a></small>
      
    </div>
    
    <?php  
      echo $this->Form->submit('Entrar', array('type' => 'submit', 'class'=>'btn btn-primary btn-block'));
      echo $this->Form->end();
    ?>    
  </div>
</div>

<!-- Modal Recuperação de senha-->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recuperar senha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php
        echo $this->Form->create(
            'User',
            array(
              'url' => array(
                'controller' => 'Users',
                'action'     => 'recuperarSenha',
                'admin'      => false
              ),
            )    
          );
        ?>        

        <div class="form-group">
          <?php echo $this->Form->label('Email'); ?>
          <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">@</div>
          </div>
            <?php echo $this->Form->text('email', array('label' => false, 'type' => 'email', 'class' => 'form-control', 'id' => 'email_id')); ?>
          </div>
        </div>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <?php echo $this->Form->button('Enviar', array('type' => 'submit','class' => 'btn btn-primary')); ?>
      <?php echo $this->Form->end();?>
      </div>
    </div>
  </div>
</div>