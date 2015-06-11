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
					<h2 class="text-center"><?= $book->book_name ?></h2>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-5 col-xs-12">
                        <?php
                        echo img ( array (
                                'src' => asset_url () . '/images/books/' . $book->book_img,
                                'class' => 'img-rounded bigbook visible-lg visible-md',
                                'alt' => $book->book_name 
                        ) )?>
                        <?php
                        echo img ( array (
                                'src' => asset_url () . '/images/books/' . $book->book_img,
                                'class' => 'img-rounded mediumbook visible-sm',
                                'alt' => $book->book_name 
                        ) )?>
                        <?php
                        echo img ( array (
                                'src' => asset_url () . '/images/books/' . $book->book_img,
                                'class' => 'img-rounded smallbook visible-xs',
                                'alt' => $book->book_name 
                        ) )?>
                        </div>
						<div class="col-sm-7 col-xs-12">
							<div class="row">
								<div class="col-sm-12">
									<p><strong>Titulo</strong>: <?= $book->book_name ?></p>
									<p><strong>Autor</strong>: <?= anchor( base_url().'autor/'.filterQuitSpecChar($author->author_fullname),$author->author_fullname) ?></p>									
									<p><strong>Géneros</strong>:
									   <ol style="list-style-type:none;">
									       <?php foreach ($genres as $genre){ echo '<li>'.$genre['genrebook_name'].'</li>'; }?>
									   </ol>
									</p>
									<p><strong>Descripción:</strong> <?= $book->book_desc ?></p>
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
						
						<div class="panel panel-info">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <span id="<?= $comment['num_comment'];?>" class="id-user-comment">#<?= $comment['num_comment'];?></span>
                                    <?= anchor(base_url('usuario/'.$comment['user_nickname']),$comment['user_nickname']); ?>
                                    <span class="text-date">
                                    <?php
                                        setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
                                        $commentDate = strftime("%d de %B de %Y, a las %H:%m:%S", strtotime($comment['date_publish']));
                                        echo $commentDate;
                                    ?>
                                    </span>
                                </h4>                                
                            </div>
                            <div class="panel-body">
                                <a href="<?= base_url('usuario/'.$comment['user_nickname']) ?>">
                                    <img alt="Brand" class="commentAvatar" src="<?= asset_url().'images/users/'.$comment['user_avatar'] ?>">
                                </a>
                                <?= $comment['text'] ?>
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
                    <?php if (check_session_exist ('id')) { ?>
					<div>
						<label for="idComment" class="control-label lead">Introduce un
							comentario:</label>
						<textarea id="idComment" class="form-control" rows="4"
							name="comment" maxlength="500"></textarea>
						<input type="text" name="userId" value="<?= $id ?>" hidden>
						<input type="text" name="bookId" value="<?= $book->id ?>" hidden>
					</div>

					<button type="submit" class="btn btn-info">
						<i class="fa fa-share-square fa-x2"></i> Comentar
					</button>
					<?php echo form_close(); } else { ?>
					<div>
						<label for="idComment" class="control-label lead">
    						Inicia sesión para comentar
						</label>
					</div>
					<?php } ?>
	           </div>
			</div>
		</div>
	</div>
</div>