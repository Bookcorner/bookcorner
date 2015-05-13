<!-- FOOOTER -->
<div class="container text-center">
	<div class="row">
		<div class="col-lg-12">
			<ul class="nav nav-pills nav-justified">
				<li class="<?php if ($title == 'Quienes Somos') { echo 'active'; }?>"><?php echo anchor(base_url('quienes-somos'), 'Quienes somos')?></li>
				<li class="<?php if ($title == '¿Qué es Bookcorner?') { echo 'active'; }?>"><?php echo anchor(base_url('que-es-bookcorner'), '¿Qué es Bookcorner?')?></li>
				<li class="<?php if ($title == 'Contacto') { echo 'active'; }?>"><?php echo anchor(base_url('contacto'), 'Contáctanos')?></li>
			    <li class="<?php if ($title == 'Política de Privacidad') { echo 'active'; }?>"><?php echo anchor(base_url('politica-de-privacidad'), 'Política de Privacidad')?></li>
			    <li class="<?php if ($title == 'Copyright') { echo 'active'; }?>"><?php echo anchor(base_url('copyright'), 'Copyright')?></li>
			    <li class="<?php if ($title == 'Información Legal') { echo 'active'; }?>"><?php echo anchor(base_url('informacion-legal'), 'Información Legal')?></li>
			</ul>
		</div>
	</div>
</div>