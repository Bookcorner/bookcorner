<?php echo link_tag(asset_url().'css/images.css', 'stylesheet')?>
<?php echo link_tag(asset_url().'css/basic.css', 'stylesheet')?>
<?php echo link_tag(asset_url().'css/custom.css', 'stylesheet')?>

<?php foreach ( $output->css_files as $file ) :?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" /> 
<?php endforeach; ?>

<?php foreach($output->js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

	
<style>
/*Style for table container who belongs to Grocery Crud*/
.table-container{
background-color: white;
}
</style>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">