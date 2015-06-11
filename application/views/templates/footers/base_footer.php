</div>
<!-- FOOOTER -->
<div class="container">
	<div id="footer">
		<div class="col-xs-12 hidden-xs">
			<footer>
				<p>
				    <?php echo anchor(base_url('que-es-bookcorner'), '¿Qué es Bookcorner?')?>
				    &nbsp;&nbsp;&middot;&nbsp;&nbsp;
				    <?php echo anchor(base_url('quienes-somos'), 'Quienes somos')?>
				    &nbsp;&nbsp;&middot;&nbsp;&nbsp;
				    <?php echo anchor(base_url('informacion-legal'), 'Información Legal')?>
				    &nbsp;&nbsp;&middot;&nbsp;&nbsp;
				    <?php echo anchor(base_url('contacto'), 'Contáctanos')?> 
					<span class="pull-right">
					   &copy; 2015 
					   <?php echo anchor(base_url('home'), 'Bookcorner')?>
					</span>
				</p>
			</footer>
		</div>
		<div class="col-xs-12 visible-xs">
			<ul class="lista-simple">
				<li><?php echo anchor(base_url('que-es-bookcorner'), '¿Qué es Bookcorner?', ['class' => 'text-left'])?>  <?php echo anchor(base_url('quienes-somos'), 'Quienes somos', ['class' => 'pull-right'])?></li>
				<li><?php echo anchor(base_url('informacion-legal'), 'Información Legal', ['class' => 'text-left'])?>  <?php echo anchor(base_url('contacto'), 'Contáctanos', ['class' => 'pull-right'])?></li>
				<li>
				    <span class="pull-right">&copy; 2015 
                                <?php echo anchor(base_url('home'), 'Bookcorner')?>
                    </span>
                </li>
			</ul>
		</div>
	</div>
</div>
<!-- FIN FOOTER -->