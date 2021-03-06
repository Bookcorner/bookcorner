
<!-- BREADCRUMB -->
<div>
	<ol class="breadcrumb">
		<li><?php echo anchor(base_url('home'), 'Home')?></li>
		<li><?php echo anchor(base_url('autores'), 'Autores')?></li>
		<li><?php echo anchor(base_url('autor/'.filterQuitSpecChar($author->author_fullname)), $author->author_fullname)?></li>
	</ol>
</div>
<!-- FIN BREADCRUMB -->
<div class="row">
	<!-- CONTENIDO PPAL-->
	<div class="col-xs-12">
		<div class="panel">
			<div class="panel-heading">
				<h2 class="text-center"><?= $author->author_fullname ?></h2>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
						<div class="row">
							<div class="col-xs-12">
								<p>
									<strong>Nombre</strong>: <?= $author->author_fullname ?></p>
								<p>
									<strong>Sinopsis</strong>: <?= $author->author_desc ?></p>
								<p>
									<strong>Libros Escritos</strong>:
								
								
								<ol style="list-style-type: none;">
									       <?php foreach ($books as $book){echo '<li>'.anchor(base_url('libro/'.filterQuitSpecChar($book['book_name'])), $book['book_name']).'</li>';}?>
									   </ol>
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<a href="votar-autor" class="btn btn-warning hidden"> <i
									class="fa fa-thumbs-up"></i> Votar Autor
								</a>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                        <?php
                        echo img ( array (
                                'src' => asset_url () . '/images/authors/' . $author->author_img,
                                'class' => 'img-rounded bigauthor img-circle visible-lg visible-md',
                                'alt' => 'authorname' 
                        ) )?>
                        <?php
                        echo img ( array (
                                'src' => asset_url () . '/images/authors/' . $author->author_img,
                                'class' => 'img-rounded mediumauthor img-circle visible-sm',
                                'alt' => 'authorname' 
                        ) )?>
                        <?php
                        echo img ( array (
                                'src' => asset_url () . '/images/authors/' . $author->author_img,
                                'class' => 'img-rounded smallauthor img-circle visible-xs',
                                'alt' => 'authorname' 
                        ) )?>
                        </div>
				</div>
			</div>
			<div class="panel-footer hidden">
				<div class="row">
					<div class="col-xs-12">
						<p>Comentarios:</p>
					</div>
				</div>
				<div class="row">
					<!-- Comienzo del forechach justo debajo de este comentario -->
					<div class="col-xs-9 col-xs-push-3">
						<h4>Nombre del usuario.</h4>
						<p>Comentario. Debe ser de 500 letras maomeno, que no sean mazo
							extensos pls</p>
					</div>
					<div class="col-xs-3 col-xs-pull-9">
    				        <?php
                echo img ( array (
                        'src' => asset_url () . '/images/users/' . 'avatar', // cambiar lo de avatar por el nombre de la imagen
                        'class' => 'img-rounded smallauthor',
                        'alt' => 'user_name' 
                ) )?>
                        </div>
					<!-- Fin del forechach justo encima de este comentario -->
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row hidden">
	<div class="col-xs-12">
		<div class="panel">
			<div class="panel-heading">
				<h3>¡Dinos que te parece!</h3>
			</div>
			<div class="panel-body">
                    <?php
                    echo form_open ( 'addAuthorComments', [ 
                            'id' => 'idCommentsForm',
                            'class' => 'form-horizontal' 
                    ] )?>
					<div>
					<label for="idComment" class="control-label lead">Introduce un
						comentario:</label>
					<textarea id="idComment" class="form-control" rows="4"
						name="comment"></textarea>
				</div>

				<button type="submit" class="btn btn-info">
					<i class="fa fa-share-square fa-x2"></i> Comentar
				</button>
					<?php echo form_close()?>
	           </div>
		</div>
	</div>
</div>