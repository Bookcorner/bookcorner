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
        echo anchor ( 'libro/' . filterQuitSpecChar ( $book ['book_name'] ), $book ['book_name'], [ 
                'class' => 'nolink' 
        ] )?>
                        </h2>
					<p><?php echo substr($book['book_desc'], 0, 300)?>...<?php echo anchor('libro/'.filterQuitSpecChar($book['book_name']), 'leer más')?></p>
				</div>

				<div class="col-sm-1 col-sm-pull-9">
					<a href="<?= 'libro/'.filterQuitSpecChar($book['book_name']) ?>">
                            <?php
        echo img ( array (
                'src' => asset_url () . 'images/books/' . $book ['book_img'],
                'class' => 'img-rounded smallbook',
                'alt' => $book ['book_name'] 
        ) );
        ?>
                        </a>
				</div>
			</div>
			<div class="panel-footer">
				    <?php if (! in_array($book['id'], $listbook) ) { ?>
					<a href="anadir-libro/<?php echo $book['id']?>"
					class="btn btn-success"> <i class="fa fa-plus"></i> Añadir a mi
					lista
				</a> <a href="<?= base_url('lista-libros') ?>"
					class="btn btn-warning disabled"> <i class="fa fa-thumbs-up"></i>
					Votar Libro
				</a>
					<?php } else { ?>
					<a href="<?= base_url() ?>quitar-libro/<?= $book->id ?>"
					class="btn btn-danger"> <i class="fa fa-minus"></i> Quitar de mi
					lista
				</a> <a href="<?= base_url('lista-libros') ?>"
					class="btn btn-warning"> <i class="fa fa-thumbs-up"></i> Votar
					Libro
				</a>
					<?php } ?>					
				</div>
		</div>
            <?php endforeach;?>
        </div>
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="panel">
			<div class="panel-body">
				¿No encontraste el libro que buscabas? Ayúdanos añadiendólo a la <a
					href="<?php echo base_url('reportes')?>">base de datos de libros</a>
			</div>
		</div>
	</div>
</div>