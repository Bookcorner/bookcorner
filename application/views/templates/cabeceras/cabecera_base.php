<?php echo link_tag(asset_url().'css/bootstrap.min.css', 'stylesheet')?>
<?php echo link_tag(asset_url().'css/bootstrap-theme.min.css', 'stylesheet')?>
<?php echo link_tag(asset_url().'css/images.css', 'stylesheet')?>
<?php echo link_tag(asset_url().'css/basic.css', 'stylesheet')?>
<?php echo link_tag(asset_url().'css/custom.css', 'stylesheet')?>

<script type="text/javascript"
	src="<?php echo asset_url()?>js/jquery-2.1.3.min.js"></script>
<script type="text/javascript"
	src="<?php echo asset_url()?>js/bootstrap.min.js"></script>
<script type="text/javascript"
	src="<?php echo asset_url()?>js/validator.min.js"></script>
<script> 

$( document ).ready(function() {
	$('#myForm').validator(); 
	$('#formPass').validator(); 
});
</script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">