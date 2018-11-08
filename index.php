<?php
session_start();
include "includes/lang.php";
?>
<!DOCTYPE html>
<html lang="cz">
<head>
	<title>Barbora Soukupova - <?= $projectWireNameTitle ?></title>
	<?php include "includes/head.php" ?>
</head>
<body>
<div class="container">
	<header>
		<div class="row">
			<div class="col-sm-12">
				<h2><?= $projectWireNameTitle ?></h2>
			</div>
		</div>
	</header>
	<section>
		<div class="row vertical-align-text">
			<div class="col-sm-4 col-sm-offset-1 padding-text">
				<?= $projectWireDescription1 ?>
			</div>
			<div class="col-sm-8">
				<a href="img/wire/1.jpg" class="lightview" data-lightview-group="example"
				   data-lightview-caption><img data-original="img/wire/1.jpg" class="img-responsive lazy"></a>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-9 col-sm-offset-1">
				<div class="row ">
					<div class="col-sm-4 col-xs-6">
						<a href="img/wire/2.jpg" class="lightview" data-lightview-group="example"
							   data-lightview-caption><img data-original="img/wire/2.jpg"
														   class="img-responsive lazy"></a>
					</div>
					<div class="col-sm-4 col-xs-6">
						<a href="img/wire/3.jpg" class="lightview" data-lightview-group="example"
							   data-lightview-caption><img data-original="img/wire/3.jpg"
														   class="img-responsive lazy"></a>
						</div>

						<div class="col-sm-4">
							<a href="img/wire/4.jpg" class="lightview" data-lightview-group="example"
							   data-lightview-caption><img data-original="img/wire/4.jpg"
														   class="img-responsive lazy"></a>
						</div>
					</div>
					<div class="row vertical-align-text">
						<div class="col-sm-4 padding-text">
							<?= $projectWireDescription2 ?>
						</div>
						<div class="col-sm-4 col-xs-4">
							<a href="img/wire/5.jpg" class="lightview" data-lightview-group="example"
							   data-lightview-caption><img data-original="img/wire/5.jpg"
														   class="img-responsive lazy"></a>
						</div>
						<div class="col-sm-4 col-xs-4">
							<a href="img/wire/6.jpg" class="lightview" data-lightview-group="example"
							   data-lightview-caption><img data-original="img/wire/6.jpg"
														   class="img-responsive lazy"></a>
						</div>
					</div>
                            <div class="col-sm-3 padding-text">
				<?= $projectWireDescription3 ?>
			</div>
				</div>
			
		</div>
			<div class="row vertical-align-text">
				<div class="col-sm-6 col-sm-offset-1 col-xs-4">
					<a href="img/stones/4.jpg" class="lightview" data-lightview-group="example"
					   data-lightview-caption><img data-original="img/stones/4.jpg" class="img-responsive lazy"></a>
				</div>
				<div class="col-sm-4 padding-text">
					<?= $projectWireDescription4 ?>
				</div>
			</div>

	</section>
	<footer>
		<div class="row">
			<div class="col-sm-12 text-center">
				<a href="sou-project.php" class="text-center"><?= $linkBack ?></a>
			</div>
		</div>
	</footer>
</div>
</body>
</html>