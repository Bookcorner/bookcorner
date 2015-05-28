<div class="container">
	<!-- BREADCRUMB -->
	<div>
		<ol class="breadcrumb">
			<li><?php echo anchor(base_url('home'), 'Home')?></li>
			<li><?php echo anchor(base_url('lista-libros'), 'Lista')?></li>
		</ol>
	</div>
	<!-- FIN BREADCRUMB -->
	<div class="row">
		<!-- CONTENIDO PPAL-->
		<div class="col-xs-12">
			<div class="panel table-responsive">
				<div class="panel-heading">
					<h4 class="lead text-center">Poner el nombre de la lista del usuario</h4>
				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>ISBN</th>
								<th>Título</th>
								<th>Estado</th>
								<th>Puntuación</th>
								<th>Notas</th>
							</tr>
						</thead>
        				<tbody>
        		        <?php foreach ($books as $book):?>
                            <tr>
        				        <td><?php echo $book['book_id']?></td>
                                <td><?php echo $book['book_isbn']?></td>
        				        <td><?php echo $book['book_name']?></td>
                                <td>
                                    <a href="#"
                                        data-name="status" 
                                        data-type="select" 
                                        data-pk=""
                                        data-url="listbook/updateBookState/<?php echo $book['val_id']?>" 
                                        data-title="Selecciona un estado" 
                                        data-value="<?php echo $book['val_estado_libro']?>"
                                        aria-describedBy="<?php echo $book['book_id']?>"
                                        class="btn btn-default btn-md">
                                    </a>
                                </td>
                                <td>
                                    <a href="#"
                                        data-name="score" 
                                        data-type="select"
                                        data-pk=""
                                        data-url="listbook/updateBookScore/<?php echo $book['val_id']?>" 
                                        data-title="Puntuación" 
                                        data-value="<?php echo $book['val_puntuacion']?>"
                                        aria-describedBy="<?php echo $book['book_id']?>"
                                        class="btn btn-default btn-md">
                                    </a>
                                </td>
                                <td>
                                    <a href="#"
                                        data-name="note" 
                                        data-type="textarea"
                                        data-pk=""
                                        data-url="listbook/updateBookNote/<?php echo $book['val_id']?>" 
                                        data-title="Introduce tus notas:" 
                                        data-value="<?php echo $book['val_nota_libro']?>"
                                        aria-describedBy="<?php echo $book['book_id']?>"
                                        class="btn btn-default btn-md">
                                        <i class="glyphicon glyphicon-edit"></i>
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