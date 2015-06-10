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

				<div class="panel panel-default">
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
            										<td>
                                                        <a href="#"
                                                            data-name="bookisbn" 
                                                            data-type="text" 
                                                            data-pk="<?php echo $book['id']?>"
                                                            data-url="book/updateBookisbn/<?php echo $book['id']?>" 
                                                            data-value="<?php echo $book['book_isbn']?>"
                                                            aria-describedBy="<?php echo $book['id']?>"
                                                            class="btn btn-default btn-md">
                                                        </a>
                                                    </td>
            										<td>
                                                        <a href="#"
                                                            data-name="bookname" 
                                                            data-type="text" 
                                                            data-pk="<?php echo $book['id']?>"
                                                            data-url="book/updateBookname/<?php echo $book['id']?>" 
                                                            data-value="<?php echo $book['book_name']?>"
                                                            aria-describedBy="<?php echo $book['id']?>"
                                                            class="btn btn-default btn-md">
                                                        </a>
                                                    </td>
            										<td>
                                                        <a href="#"
                                                            data-name="bookdesc" 
                                                            data-type="textarea" 
                                                            data-pk="<?php echo $book['id']?>"
                                                            data-url="book/updateBookdesc/<?php echo $book['id']?>" 
                                                            data-value="<?php echo $book['book_desc']?>"
                                                            aria-describedBy="<?php echo $book['id']?>"
                                                            class="btn btn-default btn-md">
                                                        </a>
            										</td>
            										<td><?php echo img(asset_url().'images/books/'.$book['book_img'], $book['book_name'])?></td>
            										<td><?php echo $book['author_fullname']?>
            										</td>
            										<td><a href="verificar-libro/<?php echo $book['id']?>"
            											class="btn btn-default"> Verificar <i class="fa fa-check"></i>
            										</a></td>
            							</tr>    
                    		        <?php endforeach;?>
                                </tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="panel panel-default">
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
            								<td>
            								    <a href="#"
                                                    data-name="authorname" 
                                                    data-type="text" 
                                                    data-pk="<?php echo $author['id']?>"
                                                    data-url="author/updateAuthorname/<?php echo $author['id']?>" 
                                                    data-value="<?php echo $author['author_fullname']?>"
                                                    aria-describedBy="<?php echo $author['id']?>"
                                                    class="btn btn-default btn-md">
                                                </a>
                                            </td>
            								<td><a href="#"
                                                    data-name="authordesc" 
                                                    data-type="textarea" 
                                                    data-pk="<?php echo $author['id']?>"
                                                    data-url="author/updateAuthordesc/<?php echo $author['id']?>" 
                                                    data-value="<?php echo $author['author_desc']?>"
                                                    aria-describedBy="<?php echo $author['id']?>"
                                                    class="btn btn-default btn-md">
                                                </a></td>
            								<td><?php echo img(asset_url().'images/authors/'.$author['author_img'], $author['author_fullname'])?></td>
            								<td>
            									<a href="verificar-autor/<?php echo $author['id']?>"
            											class="btn btn-default"> Verificar <i class="fa fa-check"></i>
            									</a>
            								</td>
            							</tr>    
                    		        <?php endforeach;?>
                                </tbody>
							</table> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>