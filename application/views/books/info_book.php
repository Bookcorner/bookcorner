<div class="container">
	<!-- BREADCRUMB -->
	<div>
		<ol class="breadcrumb">
			<li><?php echo anchor(base_url('home'), 'Home')?></li>
			<li><?php echo anchor(base_url('libros'), 'Libros')?></li>
			<li><?php echo anchor( base_url('libro/'.filterQuitSpecChar($book->book_name)), $book->book_name)?></li>
		</ol>
	</div>
	<!-- FIN BREADCRUMB -->
	<div class="row">
		<!-- CONTENIDO PPAL-->
		<div class="col-xs-12">
			<div class="panel">
				<div class="panel-heading">
					<p class="lead text-center"><?= $book->book_name ?></p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-5">
                        <?php
                        echo img ( array (
                                'src' => asset_url () . '/images/books/' . $book->book_img,
                                'class' => 'img-rounded bigbook visible-lg visible-md',
                                'alt' => $book->book_name 
                        ) )?>
                        </div>
						<div class="col-xs-7">
							<div class="row">
								<div class="col-xs-12">
									<p>Titulo: <?= $book->book_name ?></p>
									<p>Autor: <?= anchor( base_url().'autor/'.filterQuitSpecChar($author->author_fullname),$author->author_fullname) ?></p>									
									<p>Géneros:
									   <ol style="list-style-type:none;">
									       <?php foreach ($genres as $genre){ echo '<li>'.$genre['genrebook_name'].'</li>'; }?>
									   </ol>
									</p>
									<p>Descripción: <?= $book->book_desc ?></p>
								</div>
							</div>
							<div class="row">
							    <?php if(!$bookInList) { ?>
								<div class="col-xs-6">
									<a href="<?= base_url() ?>anadir-libro/<?= $book->id ?>" class="btn btn-success"> <i
										class="fa fa-plus"></i> Añadir a mi lista
									</a>
								</div>
								<?php } else { ?>
							     <div class="col-xs-6">
								    <a href="<?= base_url() ?>quitar-libro/<?= $book->id ?>" class="btn btn-danger"> <i
										class="fa fa-minus"></i> Quitar de mi lista
									</a>
								 </div>
								<?php } ?>
								<div class="col-xs-6">
									<a href="<?= base_url('lista-libros') ?>" class="btn btn-warning"> 
									<i class="fa fa-thumbs-up"></i> Votar Libro
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if( count($comments)!= 0 ) { ?>
				<div class="panel-footer">
					<div class="row">
						<div class="col-xs-12">
							<p>Comentarios:</p>
						</div>
					</div>
					<div class="row">
						<?php foreach($comments as $comment) { ?>
						<div>
    						<div class="col-xs-9 col-xs-push-3">
    							<h4>#<?= $comment['num_comment'];?> <?= anchor(base_url('usuario/'.$comment['user_nickname']),$comment['user_nickname']); ?></h4>
								<p> <?= $comment['text'] ?> </p>
    						
    						</div>
    						<div class="col-xs-2 col-xs-pull-9">
        				        <?php
                                echo img ( array (
                                    'src' => asset_url () . '/images/users/' . $comment['user_avatar'], //cambiar lo de avatar x el nombre de la imagen
                                    'class' => 'img-rounded smallauthor',
                                    'alt' => 'user_name' 
                                ) )?>
                            </div>
                        </div>
                        <?php } ?>
					</div>
				</div>
				<?php } ?>
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
                    echo form_open ( base_url('comentar'), [ 
                            'id' => 'idCommentsForm',
                            'class' => 'form-horizontal',
                            'data-toggle' => 'validator',
                            'method' => 'post',
                            'accept-charset' => 'UTF-8',
                    ] )?>
					<div>
						<label for="idComment" class="control-label lead">Introduce un
							comentario:</label>
						<textarea id="idComment" class="form-control" rows="4"
							name="comment" maxlength="500"></textarea>
						<input type="text" name="nickUser" value="<?= $nickname ?>" hidden>
						<input type="text" name="bookName" value="<?= filterQuitSpecChar($book->book_name); ?>" hidden>
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