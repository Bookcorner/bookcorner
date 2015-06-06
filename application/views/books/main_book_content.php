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
					<div class="col-sm-9 col-sm-push-3">
						<h2>
                            <?php
                            echo anchor ( 'libro/' . $book ['id'], $book ['book_name'], [ 
                                    'class' => 'nolink' 
                            ] )?>
                        </h2>
						<p><?php echo substr($book['book_desc'], 0, 300)?>...<?php echo anchor('libro/'.$book['id'], 'leer más')?></p>
					</div>
					
					<div class="col-sm-1 col-sm-pull-9">
                        <?php
                        echo img ( array (
                                'src' => asset_url () . 'images/books/' . $book ['book_img'],
                                'class' => 'img-rounded smallbook',
                                'alt' => $book ['book_name'] 
                        ) )?>
                    </div>
				</div>
				<div class="panel-footer">
					<a href="anadir-libro/<?php echo $book['id']?>"
						class="btn btn-success"> <i class="fa fa-plus"></i> Añadir a mi
						lista
					</a> <a href="votar-libro/<?= $book->id ?>" class="btn btn-warning"> <i
						class="fa fa-thumbs-up"></i> Votar Libro
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