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
			<div class="panel-group" id="idAllBooks" role="tablist"
				aria-multiselectable="true">
		     <?php foreach ($books as $book):?>
		     <div class="panel">
					<div class="panel-heading" role="tab"
						id="head<?php echo 'libro'.$book['id']?>">
						<div class="panel-title overflow">
							<h4 class="alignleft"><?php echo $book['book_name']?></h4>
							<a data-toggle="collapse" data-parent="#idAllBooks"
								href="<?php echo '#libro'.$book['id']?>" aria-expanded="false"
								aria-controls="<?php echo 'autor'.$book['id']?>"
								class="collapsed alignright"> <span
								class="glyphicon glyphicon-resize-full" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div id="<?php echo 'libro'.$book['id']?>"
						class="panel-collapse collapse" role="tabpanel"
						aria-labelledby="head<?php echo 'libro'.$book['id']?>">
						<div class="panel-body">
							<div class="col-md-9 col-md-push-3">
								<h2>
                            <?php echo anchor('libro/'.$book['id'], $book['book_name'], [
                                'class' => 'nolink'
                            ])?></h2>
								<p><?php echo substr($book['book_desc'], 0, 300)?>...<?php echo anchor('libro/'.$book['id'], 'leer más')?></p>
							</div>
							<div class="col-md-3 col-md-pull-9">
							<a href="<?= 'libro/'.$book['id'] ?>">
                                <?php echo img ( array (
                                    'src' => asset_url () . '/images/books/' . $book ['book_img'],
                                    'class' => 'img-rounded smallbook',
                                    'alt' => $book ['book_name'] 
                                ) )?>
                            </a>
                        </div>
						</div>
					</div>
					<div class="panel-footer">
						<a href="anadir-libro/<?php echo $book['id']?>" class="btn btn-success"> 
                            <i class="fa fa-plus"></i> Añadir a mi lista
						</a>
						<a href="votar-libro/<?= $book->id ?>" class="btn btn-warning"> 
                            <i class="fa fa-thumbs-up"></i> Votar Libro
						</a>
					</div>
				</div>
            <?php endforeach;?>
        </div>
        <div class="panel">
            <div class="panel-body">
                ¿No encontraste el libro que buscabas? Ayúdanos añadiendólo a la <a href="<?php echo base_url('reportes')?>">base de datos de libros</a>
            </div>
        </div>
		</div>
	</div>
</div>
