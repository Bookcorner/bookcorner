<!-- CONTENIDO PPAL-->
<div class="container">
    <div class="row">
        <div class="col-xs-12">
        	<div class="col-xs-7">
        		<h2 class="alert alert-danger">
        			¡OJO! <span class="text-muted"> El Autor que buscas no está en nuestra disposición </span>
        		</h2>
        		<p class="lead">
        			Lamentablemente no tenemos el Autor que estás buscando. ¿Quieres añadirlo tú?
        		</p>
        		<p class="text-center">
                    <?php echo anchor(base_url('reportes'), '¡Quiero añadirlo!', [
					   'class' => 'btn btn-lg btn-primary',
						'role' => 'button'
					])?>
                </p>
        	</div>
        	<div class="col-xs-5">
                <?php echo img ( array (
                    'src' => asset_url () . '/images/error/cant_find.png',
                    'class' => 'featurette-image img-responsive center-block',
                    'alt' => 'Libros',
                    'data-src' => 'holder.js/500x500/auto' 
                ) )?>
            </div>
        </div>
    </div>
</div>