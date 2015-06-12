<div class="container">
	<!-- BREADCRUMB -->
	<div>
		<ol class="breadcrumb">
			<li><?php echo anchor(base_url('home'), 'Home')?></li>
			<li><?php echo anchor(base_url('ver-votos'), 'Votaciones')?></li>
			<li><?php echo anchor(base_url('libros-mas-puntuados'), 'Ranking de puntuación máxima')?></li>
		</ol>
	</div>
	<!-- FIN BREADCRUMB -->
	<div class="row">
		<!-- CONTENIDO PPAL-->
		<div class="col-xs-12">
			<div class="panel table-responsive">
				<div class="panel-heading">
					<h4 class="lead text-center">
						<i class="fa fa-star-o fa-2x"></i> Libros más puntuados <i
							class="fa fa-star-o fa-2x"></i>
					</h4>
				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Portada</th>
								<th class="text-center">Libro</th>
								<th class="text-center">Puntuación</th>
							</tr>
						</thead>
						<tbody>
        		        <?php foreach ($popularBooks as $book):?>
                            <tr>
								<td><a
									href="<?php echo 'libro/'.filterQuitSpecChar($book['book_name'])?>"
									class="text-left">
                                        <?php echo img(asset_url().'images/books/'.$book['book_img'], $book['book_name'], ['class' => 'avatar'])?>
                                    </a></td>
								<td class="text-center">
								    <h3 class="hidden-xs"><a href="<?php echo 'libro/'.filterQuitSpecChar($book['book_name'])?>">
        				                <?php echo $book['book_name']?>
                                    </a></h3>
                                    <h5 class="visible-xs"><a href="<?php echo 'libro/'.filterQuitSpecChar($book['book_name'])?>">
        				                <?php echo $book['book_name']?>
                                    </a></h5>
                                </td>
								<td>
								    <h3 class="hidden-xs text-center"><?php echo $book['total']?> <i class="fa fa-thumbs-o-up"></i></h3>
								    <h5 class="visible-xs text-center"><?php echo $book['total']?> <i class="fa fa-thumbs-o-up"></i></h5>
								</td>
							</tr>    
        		        <?php endforeach;?>
        		        </tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- FIN CONTENIDO PRINCIPAL ESCRITORIO -->
	</div>
</div>