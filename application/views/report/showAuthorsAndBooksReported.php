<script type="text/javascript">
$(document).on("click", ".deleteBook", function(e) {
	var idBook = e.target.id;
	bootbox.dialog({
		  message: "¿Seguro que quiere rechazar el libro?",
		  title: "Confirmación",
		  buttons: {
		    yes: {
		      label: "SÍ",
		      className: "btn-success",
		      callback: function() {			      
		    	    window.location.replace('<?= base_url('rechazar-libro') ?>/'+idBook);
		      }
		    },
		    no: {
		      label: "NO",
		      className: "btn-danger"
		    }
		  }
		});
});
$(document).on("click", ".acceptBook", function(e) {
	var idBook = e.target.id;
	bootbox.dialog({
		  message: "¿Seguro que quiere aceptar el libro?",
		  title: "Confirmación",
		  buttons: {
		    yes: {
		      label: "SÍ",
		      className: "btn-success",
		      callback: function() {			      
		    	    window.location.replace('<?= base_url('verificar-libro') ?>/'+idBook);
		      }
		    },
		    no: {
		      label: "NO",
		      className: "btn-danger"
		    }
		  }
		});
});

$(document).on("click", ".deleteAuthor", function(e) {
	var idauthor = e.target.id;
	bootbox.dialog({
		  message: "¿Seguro que quiere rechazar el autor? Se borrarán sus libros asociados",
		  title: "Confirmación",
		  buttons: {
		    yes: {
		      label: "SÍ",
		      className: "btn-success",
		      callback: function() {			      
		    	    window.location.replace('<?= base_url('rechazar-autor') ?>/'+idauthor);
		      }
		    },
		    no: {
		      label: "NO",
		      className: "btn-danger"
		    }
		  }
		});
});
$(document).on("click", ".acceptAuthor", function(e) {
	var idauthor = e.target.id;
	bootbox.dialog({
		  message: "¿Seguro que quiere aceptar el autor?",
		  title: "Confirmación",
		  buttons: {
		    yes: {
		      label: "SÍ",
		      className: "btn-success",
		      callback: function() {			      
		    	    window.location.replace('<?= base_url('verificar-autor') ?>/'+idauthor);
		      }
		    },
		    no: {
		      label: "NO",
		      className: "btn-danger"
		    }
		  }
		});
});
</script>
<div class="container">
	<!-- BREADCRUMB -->
	<div>
		<ol class="breadcrumb">
			<li><?php echo anchor(base_url('home'), 'Home')?></li>
			<li><?php echo anchor(base_url('moderar'), 'Moderar libros y autores')?></li>
		</ol>
	</div>
	<!-- FIN BREADCRUMB -->
	<!-- CONTENIDO PPAL-->
	<div class="row">
		<div class="col-xs-12">
			<div class="panel-group" id="idModBookAuthors" role="tablist"
				aria-multiselectable="true">

				<!-- LIBROS REPORTADOS -->
				<div class="panel panel-default hidden-xs">
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#idModBookAuthors"
								href="#idReportBooks" aria-expanded="false"
								aria-controls="idReportBooks"> Moderar libros <i
								class="fa fa-chevron-down"></i> <span class="badge"><?php echo $booksReports?></span></a>
						</h4>
					</div>

					<div id="idReportBooks" class="panel-collapse collapse in"
						role="tabpanel" aria-labelledby="headingOne">
						<div class="panel-body">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>ISBN</th>
										<th>Título</th>
										<th>Descripción</th>
										<th>Imagen</th>
										<th>Autor</th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
                    		        <?php foreach ($books as $book):?>
                                        <tr>
										<td><a href="#" data-name="bookisbn" data-type="text"
											data-pk="<?php echo $book['id']?>"
											data-url="book/updateBookisbn/<?php echo $book['id']?>"
											data-value="<?php echo $book['book_isbn']?>"
											aria-describedBy="<?php echo $book['id']?>"
											class="btn btn-default btn-md"> </a></td>
										<td><a href="#" data-name="bookname" data-type="text"
											data-pk="<?php echo $book['id']?>"
											data-url="book/updateBookname/<?php echo $book['id']?>"
											data-value="<?php echo $book['book_name']?>"
											aria-describedBy="<?php echo $book['id']?>"
											class="btn btn-default btn-md"> </a></td>
										<td><a href="#" data-name="bookdesc" data-type="textarea"
											data-pk="<?php echo $book['id']?>"
											data-url="book/updateBookdesc/<?php echo $book['id']?>"
											data-value="<?php echo $book['book_desc']?>"
											aria-describedBy="<?php echo $book['id']?>"
											class="btn btn-default btn-md"> </a></td>
										<td><?php echo img(asset_url().'images/books/'.$book['book_img'], $book['book_name'], ['class' => 'votebook'])?></td>
										<td><?php echo $book['author_fullname']?>
            										</td>
										<td><a href="#" id="<?= $book['id'] ?>"
										class="btn btn-success acceptBook"> Verificar <i class="fa fa-check"></i>
										</a> <a href="#" id="<?= $book['id'] ?>"
											class="btn btn-danger deleteBook"> Rechazar <i class="fa fa-times"></i>
										</a></td>
									</tr>    
                    		        <?php endforeach;?>
                                </tbody>
							</table>
						</div>
					</div>
				</div>

				<!-- COMIENZO CONTENIDO MOVIL LIBRO -->
				<div class="panel panel-default visible-xs">
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#idModBookAuthors"
								href="#idReportBooksMobile" aria-expanded="false"
								aria-controls="idReportBooksMobile"> Moderar libros <i
								class="fa fa-chevron-down"></i> <span class="badge"><?php echo $booksReports?></span></a>
						</h4>
					</div>
					<div id="idReportBooksMobile" class="panel-collapse collapse in"
						role="tabpanel" aria-labelledby="headingOne">
						 <?php foreach ($books as $book):?>
                            <div class="panel-body">
							<a class="btn btn-default" data-toggle="collapse"
								href="#idContentBook<?php echo $book['id']?>"
								aria-expanded="false"
								aria-controls="idContentBook<?php echo $book['id']?>">
                                  Libro
                                </a>
							<div class="collapse" id="idContentBook<?php echo $book['id']?>">
								<ul id="<?php echo $book['id']?>" class="list-group">
									<li class="list-group-item"><strong>ISBN</strong>: <a href="#"
										data-name="bookisbn" data-type="text"
										data-pk="<?php echo $book['id']?>"
										data-url="book/updateBookisbn/<?php echo $book['id']?>"
										data-value="<?php echo $book['book_isbn']?>"
										aria-describedBy="<?php echo $book['id']?>"
										class="btn btn-default btn-md"> </a></li>
									<li class="list-group-item"><strong>Título</strong>: <a
										href="#" data-name="bookname" data-type="text"
										data-pk="<?php echo $book['id']?>"
										data-url="book/updateBookname/<?php echo $book['id']?>"
										data-value="<?php echo $book['book_name']?>"
										aria-describedBy="<?php echo $book['id']?>"
										class="btn btn-default btn-md"> </a></li>
									<li class="list-group-item"><strong>Descripción</strong>: <a
										href="#" data-name="bookdesc" data-type="textarea"
										data-pk="<?php echo $book['id']?>"
										data-url="book/updateBookdesc/<?php echo $book['id']?>"
										data-value="<?php echo $book['book_desc']?>"
										aria-describedBy="<?php echo $book['id']?>"
										class="btn btn-default btn-md"> </a></li>
									<li class="list-group-item"><strong>Imagen</strong>:
                                        <?php echo img(asset_url().'images/books/'.$book['book_img'], $book['book_name'], ['class' => 'votebook'])?>
                                    </li>
									<li class="list-group-item"><strong>Autor</strong>:
                                        <?php echo $book['author_fullname']?>
                                    </li>
									<li class="list-group-item"><strong>Acciones</strong>: <a
										href="#" id="<?= $book['id'] ?>"
										class="btn btn-success acceptBook"> Verificar <i class="fa fa-check"></i>
									</a> <a href="#"
										class="btn btn-danger deleteBook" id="<?= $book['id'] ?> ?>"> Rechazar <i class="fa fa-times"></i>
									</a></li>
								</ul>
							</div>
						</div>
                            <?php endforeach;?>
					 </div>
				</div>
				<!-- FIN CONTENIDO MOVIL LIBRO -->
				<!-- AUTORES REPORTADOS -->
				<div class="panel panel-default hidden-xs">
					<div class="panel-heading" role="tab" id="headingTwo">
						<h4 class="panel-title">
							<a class="collapsed" data-toggle="collapse"
								data-parent="#idModBookAuthors" href="#idReportAuthors"
								aria-expanded="false" aria-controls="idReportAuthors"> Moderar
								autores <i class="fa fa-chevron-down"></i> <span class="badge"><?php echo $authorsReports?></span>
							</a>
						</h4>
					</div>
					<div id="idReportAuthors" class="panel-collapse collapse"
						role="tabpanel" aria-labelledby="headingTwo">
						<div class="panel-body">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Nombre</th>
										<th>Sinopsis</th>
										<th>Imagen</th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
                    		        <?php foreach ($authors as $author):?>
                                        <tr>
										<td><a href="#" data-name="authorname" data-type="text"
											data-pk="<?php echo $author['id']?>"
											data-url="author/updateAuthorname/<?php echo $author['id']?>"
											data-value="<?php echo $author['author_fullname']?>"
											aria-describedBy="<?php echo $author['id']?>"
											class="btn btn-default btn-md"> </a></td>
										<td><a href="#" data-name="authordesc" data-type="textarea"
											data-pk="<?php echo $author['id']?>"
											data-url="author/updateAuthordesc/<?php echo $author['id']?>"
											data-value="<?php echo $author['author_desc']?>"
											aria-describedBy="<?php echo $author['id']?>"
											class="btn btn-default btn-md"> </a></td>
										<td><?php echo img(asset_url().'images/authors/'.$author['author_img'], $author['author_fullname'], ['class' => 'votebook'])?></td>
										<td><a href="#" id ="<?= $author['id'] ?>"
											class="btn btn-success acceptAuthor"> Verificar <i class="fa fa-check"></i>
										</a> <a href="#" id="<?= $author['id'] ?>"
											class="btn btn-danger deleteAuthor"> Rechazar <i class="fa fa-times"></i>
										</a></td>
									</tr>    
                    		        <?php endforeach;?>
                                </tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- FIN CONTENIDO AUTORES REPORTADOS -->
				<!-- COMIENZO CONTENIDO MOVIL AUTOR -->
				<div class="panel panel-default visible-xs">
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#idModBookAuthors"
								href="#idReportAuthorsMobile" aria-expanded="false"
								aria-controls="#idReportAuthorsMobile"> Moderar autores <i
								class="fa fa-chevron-down"></i> <span class="badge"><?php echo $authorsReports?></span></a>
						</h4>
					</div>
					<div id="idReportAuthorsMobile" class="panel-collapse collapse in"
						role="tabpanel" aria-labelledby="headingOne">
						 <?php foreach ($authors as $author):?>
                            <div class="panel-body">
							<a class="btn btn-default" data-toggle="collapse"
								href="#idContentBook<?php echo $author['id']?>"
								aria-expanded="false"
								aria-controls="idContentBook<?php echo $author['id']?>">
                                Autor
                                </a>
							<div class="collapse"
								id="idContentBook<?php echo $author['id']?>">
								<ul id="<?php echo $author['id']?>" class="list-group">
									<li class="list-group-item"><strong>Nombre</strong>: <a
										href="#" data-name="authorname" data-type="text"
										data-pk="<?php echo $author['id']?>"
										data-url="author/updateAuthorname/<?php echo $author['id']?>"
										data-value="<?php echo $author['author_fullname']?>"
										aria-describedBy="<?php echo $author['id']?>"
										class="btn btn-default btn-md"> </a></li>
									<li class="list-group-item"><strong>Sinopsis</strong>: <a
										href="#" data-name="authordesc" data-type="textarea"
										data-pk="<?php echo $author['id']?>"
										data-url="author/updateAuthordesc/<?php echo $author['id']?>"
										data-value="<?php echo $author['author_desc']?>"
										aria-describedBy="<?php echo $author['id']?>"
										class="btn btn-default btn-md"> </a></li>
									<li class="list-group-item"><strong>Imagen</strong>:
                                        <?php echo img(asset_url().'images/authors/'.$author['author_img'], $author['author_fullname'], ['class' => 'votebook'])?>
                                    </li>
									<li class="list-group-item"><strong>Acciones</strong>: <a
										href="#" id="<?= $author['id'] ?>"
										class="btn btn-success acceptAuthor"> Verificar <i class="fa fa-check"></i>
									</a> <a href="#" id="<?= $author['id'] ?>"
										class="btn btn-danger deleteAuthor"> Rechazar <i class="fa fa-times"></i>
									</a></li>
								</ul>
							</div>
						</div>
                            <?php endforeach;?>
					 </div>
				</div>
				<!-- FIN CONTENIDO MOVIL AUTOR -->
			</div>
		</div>
	</div>
</div>