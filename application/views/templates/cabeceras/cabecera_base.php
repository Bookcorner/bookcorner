<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Book Corner - <?php echo $title?></title>
<?php echo link_tag(asset_url().'css/bootstrap.min.css', 'stylesheet')?>
<?php echo link_tag(asset_url().'css/bootstrap-theme.min.css', 'stylesheet')?>
<?php echo link_tag(asset_url().'css/images.css', 'stylesheet')?>

<script type="text/javascript"
	src="<?php echo asset_url()?>js/jquery-2.1.3.min.js"></script>
<script type="text/javascript"
	src="<?php echo asset_url()?>js/bootstrap.min.js"></script>
<script type="text/javascript"
	src="<?php echo asset_url()?>js/validator.min.js"></script>
<script> $('#myForm').validator() </script>
</head>
<body>
<!--CONTAINER-->