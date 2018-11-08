<h1>Endereços</h1>
<?php
echo $this->Html->link('+ Cadastrar novo endereço', array('controller'=>'', 'action' => '', 'admin' => true), array('class' => 'btn btn-success disabled'));
?>
<br><br>

<?php echo $this->Session->flash(); ?>
<table class="table table-sm table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Rua</th>
            <th scope="col">Cidade</th>
            <th scope="col">Estado</th>
            <th scope="col">Editar</th>
        </tr>
    </thead>
    <tbody>
	<?php 
        foreach($enderecos as $item): 
            echo '<tr>';
            echo '<td>'.$item['Endereco']['id'].'</td>';
            echo '<td>'.$item['Endereco']['rua'].'</td>';
            echo '<td>'.$item['Endereco']['cidade'].'</td>';
            echo '<td>'.$item['Endereco']['estado'].'</td>';
   			echo '<td>'.$this->Html->link('Editar', array('controller'=>'Enderecos', 'action' => 'add', 'id' => $item['Endereco']['id'], 'admin' => true));
           // echo '<td>'.$this->Html->link('Excluir', array('controller'=>'Enderecos', 'action' => 'delete','admin' => true, 'id' => Inflector::slug($item['Endereco']['id'])), array('class' => 'disable','confirm'=>'Deseja excluir o serviço?'));            
            echo '</tr>';
		endforeach;
        ?>    	
    </tbody>
</table>