<?php echo link_tag(asset_url().'css/popover.css', 'stylesheet')?>

<script>
 $(function () {
	   var $popoverInbox = $('button.muestratext').popover({
	        html: 'true',
	    });
	});
 </script>
