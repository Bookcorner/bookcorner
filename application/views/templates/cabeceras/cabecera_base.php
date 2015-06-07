<?php echo link_tag(asset_url().'css/bootstrap.min.css', 'stylesheet')?>
<?php echo link_tag(asset_url().'css/bootstrap-theme.min.css', 'stylesheet')?>
<?php echo link_tag(asset_url().'grocery_crud/themes/bootstrap/css/font-awesome/css/font-awesome.min.css', 'stylesheet')?>
<?php echo link_tag(asset_url().'css/images.css', 'stylesheet')?>
<?php echo link_tag(asset_url().'css/basic.css', 'stylesheet')?>
<?php echo link_tag(asset_url().'css/custom.css', 'stylesheet')?>

<!-- JQuery -->
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- JQueryUI-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/dark-hive/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

<script type="text/javascript"
	src="<?php echo asset_url()?>js/bootstrap.min.js"></script>
<script type="text/javascript"
	src="<?php echo asset_url()?>js/validator.min.js"></script>
	
<script type="text/javascript"> 
$( document ).ready(function() {
	$('#myForm').validator(); 
	$('#formPass').validator(); 
	$('.alert').append('<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>');
});
</script>
<script type="text/javascript"
	src="<?php echo asset_url()?>js/custom.js"></script>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
