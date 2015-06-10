<div class="container">
	<!-- BREADCRUMB -->
	<div>
		<ol class="breadcrumb">
			<li><?php echo anchor(base_url('home'), 'Home')?></li>
			<li><?php echo anchor(base_url('ver-votos'), 'Votaciones')?></li>
		</ol>
	</div>
	<!-- FIN BREADCRUMB -->
	<div class="row">
		<div class="col-xs-12">
			<div class="panel">
				<h4 class="lead text-center">
					<i class="fa fa-thumbs-o-up"></i> Votaciones <i
						class="fa fa-thumbs-o-up"></i>
				</h4>
				<p>Bienvenido al panel de votaciones. Aquí puedes comprobar cuales
					son los libros mejor puntuados de la aplicación, teniendo una
					visión objetiva de cuales son las tendencias actuales.</p>
				<p>Aquí encontrarás 3 tablas diferentes, en las cuales aparecen los
					votos de distinta forma:</p>
				<ul>
					<li><strong>Libros más puntuados</strong>: En esta tabla podrás ver
						cuales son los libros que más votos totales tienen de la
						aplicación.</li>
					<li><strong>Media de puntuación más alta</strong>: En esta, podrás
						ver la puntuación media de cada libro, así como el número de
						usuarios que conforman la media. Esta puntuación te da una opinión
						general de lo que opinan las personas que poseen el libro en su
						lista.</li>
					<li><strong>Estado general de los libros</strong>: Conoce la
						cantidad de personas que han abandonado, están leyendo, o han
						terminado un libro para obetener una rápida primera impresión del
						mismo.</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-star-o fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div><h2>Libros más Puntuados</h2></div>
						</div>
					</div>
				</div>
				<a href="<?php echo base_url('libros-mas-puntuados')?>">
					<div class="panel-footer">
						<span class="pull-left">Ver los Libros más Puntuados</span> <span
							class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-star-o fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div><h2>Media de Puntuación</h2></div>
						</div>
					</div>
				</div>
				<a href="<?php echo base_url('media-libros-mas-puntuados')?>">
					<div class="panel-footer">
						<span class="pull-left">Ver la media de la puntuación</span> <span
							class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-star-o fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div><h2>Estado general de los libros</h2></div>
						</div>
					</div>
				</div>
				<a href="<?php echo base_url('media-libros-mas-puntuados')?>">
					<div class="panel-footer">
						<span class="pull-left">Ver la media de la puntuación</span> <span
							class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
	</div>
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
                                        <?php echo img(asset_url().'images/books/'.$book['book_img'], $book['book_name'], ['class' => 'votebook'])?>
                                    </a></td>
								<td class="text-center"><a
									href="<?php echo 'libro/'.$book['id']?>">
        				                <?php echo $book['book_name']?>
                                    </a></td>
								<td><h2 class="text-center"><?php echo $book['total']?> Puntos</h2></td>
							</tr>    
        		        <?php endforeach;?>
        		        </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>