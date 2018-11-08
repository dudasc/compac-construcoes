<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->element('head');?>
	</head>
	<body>
	        <?php echo $this->element('header'); ?>
	        <?php echo $this->fetch('content'); ?>
	        <?php echo $this->element('footer'); ?>
	        <?php //echo $this->element('sql_dump'); ?>
	</body>
</html>