<!-- CONTENIDO PPAL-->
<div class="container">
    <!-- BREADCRUMB -->
    <div>
        <ol class="breadcrumb">
            <li><?php echo anchor(base_url('home'), 'Home')?></li>
        </ol>
    </div>
    <!-- FIN BREADCRUMB -->
	<!-- CONTENIDO -->
	<div class="row">
		<div class="col-lg-8">
			<div class="jumbotron jumbo">
                    <h1 class="text-center"><span class="destacado">¡Bienvenido a BookCorner!</span></h1>
                    <p class="destacado">En este portal podrás generar listas
					con tus libros favoritos y compartir tus opiniones con la comunidad.</p>
                    <p><?php echo anchor(base_url('que-es-bookcorner'), 'Saber más', [
                            'btn btn-default btn-md'
                    ])?></p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="panel">
				<div class="panel-heading">
					<h3>
						<i class="icon-time main-color"></i> Libros Recientes
					</h3>
				</div>
				<div class="panel-body">
					<ul>
                        <?php foreach ($books as $book):?>
						<li>
                            <a href="<?php echo 'libro/'.filterQuitSpecChar($book['book_name'])?>">
                                <?php echo img(asset_url().'images/books/'.$book['book_img'], $book['book_name'], ['class' => 'avatar'])?>
                                <?php echo $book['book_name']?>
                            </a>
                        </li>
						<?php endforeach;?>
                    </ul>
					<a href="<?php echo base_url('libros')?>"><i class="fa fa-eye"></i> Ver más...</a>
                </div>
			</div>
			<div class="panel">
				<div class="panel-heading">
					<h3>
					   <i class="icon-time main-color"></i> Autores Recientes
					</h3>
				</div>
				<div class="panel-body">
					<ul>
                        <?php foreach ($authors as $author):?>
						<li>
                            <a href="<?php echo 'autor/'.filterQuitSpecChar($author['author_fullname'])?>">
                                <?php echo img(asset_url().'images/authors/'.$author['author_img'], $author['author_fullname'], ['class' => 'avatar'])?>
                                <?php echo $author['author_fullname']?>
                            </a>
                        </li>
						<?php endforeach;?>
					</ul>
					<a href="<?php echo base_url('autores')?>"><i class="fa fa-eye"></i> Ver más...</a>
				</div>
			</div>
        </div>
	</div>
</div>
<!-- CONTENIDO PPAL-->