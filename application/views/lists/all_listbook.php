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
                                        data-pk="<?php echo $book['val_id']?>"
                                        data-url="listbook/updateState/<?php echo $book['val_id']?>" 
                                        data-title="Selecciona un estado" 
                                        data-value="<?php echo $book['val_estado_libro']?>"
                                        aria-describedBy="<?php echo $book['book_id']?>"
                                        class="btn btn-default btn-xs"></a>
                                </td>
                                <td><?php echo $book['val_puntuacion']?></td>
                                <td>
                                    <button id="idNotas" type="button" class="btn btn-default muestratext" 
                                        data-container="body" data-toggle="popover" 
                                        data-placement="bottom" 
                                        data-content="<?php echo $book['val_nota_libro']?>">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </button>
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