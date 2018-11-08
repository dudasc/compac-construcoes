<h1>Projetos</h1>
<?php
echo $this->Html->link('+ Cadastrar novo projeto', array('controller'=>'Projetos', 'action' => 'add', 'admin' => true), array('class' => 'btn btn-success'));
?>
<br><br>
<?php echo $this->Session->flash(); ?>
<table class="table table-sm table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Título</th>
            <th scope="col">Editar</th>
            <th scope="col">Fotos do álbum</th>
            <th scope="col">Excluir</th>
        </tr>
    </thead>
    <tbody>
	<?php 
        foreach($projetos as $item): 
            echo '<tr>';
            echo '<td>'.$item['Projeto']['id'].'</td>';
            echo '<td>'.$item['Projeto']['titulo'].'</td>';
   			echo '<td>'.$this->Html->link('Editar', array('controller'=>'projetos', 'action' => 'add', 'id' => $item['Projeto']['id'], 'admin' => true));
            echo '<td>'.$this->Html->link('Visualizar', array('action' => 'fotos', 'id' => $item['Projeto']['id'], 'admin' => true));
             echo '<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalExcluir" onClick="setaDadosModal('.$item['Projeto']['id'].')">
              Excluir
            </button></td>';
            //echo '<td>'.$this->Html->link('Excluir', array('controller'=>'projetos', 'action' => 'delete','admin' => true, 'id' => Inflector::slug($item['Projeto']['id'])), array('confirm'=>'Deseja excluir o projeto e todas suas imagens?'));            
            echo '</tr>';
		endforeach;
        ?>    	
    </tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmar exclusão</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Deseja excluir o projeto e todas suas fotos?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <?php echo $this -> Form -> create('Projeto', array('controller'=>'projetos', 'action' => 'delete','admin' => true)); ?>

        <?php echo $this->Form->input('id', array('type' => 'hidden', 'class' => 'form-control input-md', 'id'=>"codigo")); ?>

        <?php echo $this->Form->submit('Excluir', array('type' => 'submit', 'class' => 'btn btn-danger')); ?>
        <?php echo $this -> Form -> end();?>

      </div>
    </div>
  </div>
</div>
<script>
function setaDadosModal(valor) {
    document.getElementById('codigo').value = valor;
}
</script>
