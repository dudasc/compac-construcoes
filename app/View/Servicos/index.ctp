<div class="container-fluid bg-body">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>SOLUÇÕES E SERVIÇOS</h1>
			</div>
		</div>
	</div>
</div>
<div class="container space-bottom">
	<?php			
		$i = 0;
		$total = count($servicos);
		foreach($servicos as $item):
			if($i%2==0 or $i == 0){
				echo '<div class="row">';
			}
			echo '<div class="col-sm-6">';
			echo '<div class="page-header"><h2>'.$item['Servico']['nome']."</h2></div>";
			echo $item['Servico']['descricao'];
			echo '</div>';
			$i++;
			if($i%2==0 or $i == $total){
				echo '</div>';
			}
		endforeach;
	?>
</div>

