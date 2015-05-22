<div class="container">
	<!-- BREADCRUMB -->
	<div>
		<ol class="breadcrumb">
			<li><?php echo anchor(base_url('home'), 'Home')?></li>
			<li><?php echo anchor(base_url('libros'), 'Libros')?></li>
		</ol>
	</div>
	<!-- FIN BREADCRUMB -->
	<div class="row">
		<!-- CONTENIDO PPAL-->
		<div class="col-xs-12">
		     <?php foreach ($books as $book):?>
		     <div class="panel">
                <div class="panel-body">
                    <div class="col-md-10 col-md-push-2">
                        <h2>
                        <?php echo anchor('book/'.$book['book_id'], $book['book_name'], [
                            'class' => 'nolink'
                        ])?></h2>
                        <p><?php echo substr($book['book_desc'], 0, 300)?>...<?php echo anchor('book/'.$book['book_id'], 'leer más')?></p>
                    </div>

                    <div class="col-md-2 col-md-pull-10">
                        <?php echo img ( array (
                            'src' => asset_url () . '/images/books/' . $book ['book_img'],
                            'class' => 'img-rounded smallbook',
                            'alt' => $book ['book_name'] 
                        ) )?>
                    </div>
				</div>
				<div class ="panel-footer">
                    <button type="button" class="btn btn-default" aria-label="Left Align">
                        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Añadir a mi lista
                    </button>
                    <button type="button" class="btn btn-default" aria-label="Left Align">
                        <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> Votar
                    </button>
                    
                </div>
            </div>
            <?php endforeach;?>
        </div>
	</div>
</div>