<h1><?php echo $projeto['Projeto']['titulo']?></h1>

<?php //echo print_r($fotos);?>

<?php
		echo $this->Html->link('Voltar', array('controller'=>'projetos', 'action' => 'index', 'admin' => true), array('class' => 'btn btn-success '));
?>
<br><br>
<h2>Cadastrar imagens</h2>
<?php echo $this->Session->flash(); ?>
<?php	
	echo $this ->Form -> create('FotoProjeto', array('action' => 'add', 'type' => 'file', 'enctype'=>"multipart/form-data"), array('admin' => true));
?>
<div class="form-group">
	<label for="exampleInputImagem">Selecione uma imagem</label>
	<?php 
		echo $this->Form->file('nome', array('label' => false, 'id' =>"inputImagem", 'required' ));
	?>
	<small id="inputImagemHelmp" class="form-text text-muted">Tipo de arquivos: somente JPG/JPEG
		Tamanho máximo: 2MB.</small>
</div>				
<?php
	echo $this->Form->input('projetos_id', array('label' => false, 'type' => 'hidden', 'value' => $projeto['Projeto']['id']));
	echo $this->Form->submit('Inserir imagem', array('class' => 'btn btn-primary btn-block')); 
	echo $this->Form->end();
?>
	<br>

		<h2>Fotos do álbum</h2>
		<div class="row">
		<?php
		if(!empty($fotos[0])){
			foreach($fotos as $item):
				if(!empty($item['FotoProjeto']['nome'])){
						echo '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2">';			
					echo  $this->Html->image('uploads/projetos/small_'.$item['FotoProjeto']['nome'], array('alt' =>'', 'title' => '', 'class' => 'img-thumbnail img-responsive'), array('admin' => true));
   					
   					
   					echo "<br>".$this->Html->link('Excluir', array('controller'=>'FotoProjetos', 'action' => 'delete',$item['FotoProjeto']['id']), array('confirm'=>'Deseja excluir a imagem?'));
   					echo "</div>";

					
				}
			endforeach;	
			}			
		?>
			</div>