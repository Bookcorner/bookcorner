<div class="container">
	<!-- BREADCRUMB -->
	<div>
		<ol class="breadcrumb">
			<li><?php echo anchor(base_url('home'), 'Home')?></li>
			<li><?php echo anchor(base_url('ver-votos'), 'Votaciones')?></li>
			<li><?php echo anchor(base_url('estado-general-libros'), 'Ranking Estado de los libros puntuados')?></li>
		</ol>
	</div>
	<!-- FIN BREADCRUMB -->
	<div class="row">
		<!-- CONTENIDO PPAL-->
		<div class="col-xs-12">
			<div class="panel table-responsive">
				<div class="panel-heading">
					<h3 class="lead text-center">
						<i class="fa fa-star-o fa-2x"></i> Estado de los libros <i
							class="fa fa-star-o fa-2x"></i>
					</h3>
				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Portada</th>
								<th class="text-center">Libro</th>
								<th class="text-center">Estado del libro</th>
								<th class="text-center">Usuarios</th>
							</tr>
						</thead>
						<tbody>
        		        <?php foreach ($stateBooks as $book):?>
                            <tr>
								<td><a
									href="<?php echo 'libro/'.filterQuitSpecChar($book['book_name'])?>"
									class="text-left">
                                        <?php echo img(asset_url().'images/books/'.$book['book_img'], $book['book_name'], ['class' => 'avatar'])?>
                                    </a>
                                </td>
								<td class="text-center">
								    <h3>
								        <a href="<?php echo 'libro/'.filterQuitSpecChar($book['book_name'])?>">
        				                <?php echo $book['book_name']?>
                                        </a>
                                    </h3>
                                </td>
								<td>
								    <h3 class="text-center">
								        <?php switch ($book['estado']){
								            case 1:
                                                echo 'Leyendo';
                                                break;
                                            case 2:
                                                echo 'Pendiente de leer';
                                                break;
                                            case 3:
                                                echo 'Abandonado';
                                                break;
                                            case 4:
                                                echo 'Terminado';
                                                break;
								        }?>
								        <i class="fa fa-thumbs-o-up"></i>
                                    </h3>
                                </td>
								<td>
								    <h3 class="text-center">
								        <?php echo $book['n_usuarios']?> 
								        <i class="fa fa-users"></i>
                                    </h3>
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