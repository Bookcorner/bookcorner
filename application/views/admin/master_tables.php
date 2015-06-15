<!-- BREADCRUMB -->
<div>
	<ol class="breadcrumb">
		<li><?php echo anchor(base_url('home'), 'Home')?></li>
		<li><?php echo anchor(base_url('admin'), 'Administración')?></li>
	</ol>
</div>
<!-- FIN BREADCRUMB -->
<!-- CONTENIDO PPAL-->
<div class="row">
	<div style="background-color: white;">
            <?php echo $output; ?>
            <br />
	</div>
</div>