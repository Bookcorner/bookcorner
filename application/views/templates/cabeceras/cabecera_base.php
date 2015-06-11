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

<!-- Cookie Alert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="http://cdn.imnjb.me/libs/jquery.cookiecuttr/1.0/jquery.cookiecuttr.min.js"></script>
<link href="http://cdn.imnjb.me/libs/jquery.cookiecuttr/1.0/cookiecuttr.css" rel="stylesheet" type="text/css"/>
	
<script type="text/javascript"> 
$( document ).ready(function() {
	$('#myForm').validator(); 
	$('#formPass').validator(); 
	$('.alert').append('<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>');
	
	$.cookieCuttr({
	  cookieNotificationLocationBottom: true,
	  cookieAnalytics: false, 
	  cookiePolicyPageMessage: 'Por favor lea la siguiente información y elija una de las siguientes opciones',
	  cookiePolicyLink: '<?= base_url('informacion-legal') ?>',
	  cookieMessage: 'Utilizamos cookies en nuestro website. Si continua navegando, consideramos que acepta su uso.',
	  cookieAnalyticsMessage: 'No utilizamos google analytics',
	  cookieErrorMessage: "Lo sentimos. Esta funcionalidad está desactivada en su navegador. <br>Para seguir utilizando esta funcionalidad, por favor ",
	  cookieWhatAreTheyLink: "http://es.wikipedia.org/wiki/Cookie_(inform%C3%A1tica)",
	  cookieAcceptButtonText: "ACEPTAR COOKIES",
	  cookieDeclineButtonText: "NO USAR COOKIES",
	  cookieResetButtonText: "BORRAR COOKIES",
	  cookieWhatAreLinkText: "¿Qué son las cookies?",
	});
});
</script>
</script>
<script type="text/javascript"
	src="<?php echo asset_url()?>js/custom.js"></script>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
