<div class="container">
	<!-- BREADCRUMB -->
	<div>
		<ol class="breadcrumb">
			<li><?php echo anchor(base_url('home'), 'Home')?></li>
			<li><?php echo anchor(base_url('libros'), 'Libros')?></li>
			<li><?php echo anchor( '#', 'Titulo del Autor')?></li>
		</ol>
	</div>
	<!-- FIN BREADCRUMB -->
	<div class="row">
		<!-- CONTENIDO PPAL-->
		<div class="col-xs-12">
			<div class="panel">
				<div class="panel-heading">
					<p class="lead text-center">Nombre del Autor</p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-7">
							<div class="row">
								<div class="col-xs-12">
									<p>Titulo: Nombre del autor</p>
									<p>Libros Escritos: Lista de los libros escritos</p>
									<p>Sinopsis: Descripción del Autor</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<a href="votar-autor" class="btn btn-warning"> <i
										class="fa fa-thumbs-up"></i> Votar Autor
									</a>
								</div>
							</div>
						</div>
						<div class="col-xs-5">
                        <?php
                        echo img ( array (
                                'src' => asset_url () . '/images/authors/' . 'author_img',
                                'class' => 'img-rounded bigauthor',
                                'alt' => 'authorname' 
                        ) )?>
                        </div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="row">
						<div class="col-xs-12">
							<p>Comentarios:</p>
						</div>
					</div>
					<div class="row">
						<!-- Comienzo del forechach justo debajo de este comentario -->
						<div class="col-xs-9 col-xs-push-3">
							<h4>
								Nombre del usuario.
								</h2>
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
	<div class="row">
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
</div>