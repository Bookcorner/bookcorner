<?php echo link_tag(asset_url().'css/bootstrap.min.css', 'stylesheet')?>
<?php echo link_tag(asset_url().'css/bootstrap-theme.min.css', 'stylesheet')?>
<?php echo link_tag(asset_url().'grocery_crud/themes/bootstrap/css/font-awesome/css/font-awesome.min.css', 'stylesheet')?>
<?php echo link_tag(asset_url().'css/images.css', 'stylesheet')?>
<?php echo link_tag(asset_url().'css/basic.css', 'stylesheet')?>
<?php echo link_tag(asset_url().'css/custom.css', 'stylesheet')?>

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- JQueryUI-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/dark-hive/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

<script type="text/javascript"
	src="<?php echo asset_url()?>js/bootstrap.min.js"></script>
<script type="text/javascript"
	src="<?php echo asset_url()?>js/validator.min.js"></script>
	
<!-- Cookie Alert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script type="text/javascript" src="<?php echo asset_url()?>js/jquery.cookiecuttr.js"></script>
<?php echo link_tag(asset_url().'css/cookiecuttr.css', 'stylesheet')?>
	
<script type="text/javascript"
	src="<?php echo asset_url()?>js/custom.js"></script>

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65941024-1', 'auto');
  ga('send', 'pageview');
</script>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
