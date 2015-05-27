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
                                <td>Estado del libro</td>
                                <td>Puntuación del libro</td>
                                <td>
                                    <button id="idNotas" type="button" class="btn btn-default" 
                                        data-container="body" data-toggle="popover" 
                                        data-placement="bottom" 
                                        data-content="formulario con un textarea que muestre el contenido de la nota y un botón de edición en el que puedas actualizar tus cambios. pasarle el código html">
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