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
				<div class="panel-body">
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
						<li><strong>Libros más puntuados</strong>: En esta tabla podrás
							ver cuales son los libros que más votos totales tienen de la
							aplicación.</li>
						<li><strong>Media de puntuación más alta</strong>: En esta, podrás
							ver la puntuación media de cada libro, así como el número de
							usuarios que conforman la media. Esta puntuación te da una
							opinión general de lo que opinan las personas que poseen el libro
							en su lista.</li>
						<li><strong>Estado general de los libros</strong>: Conoce la
							cantidad de personas que han abandonado, están leyendo, o han
							terminado un libro para obetener una rápida primera impresión del
							mismo.</li>
					</ul>
				</div>
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
							<div>
								<h2>Libros más puntuados</h2>
							</div>
						</div>
					</div>
				</div>
				<a href="<?php echo base_url('libros-mas-puntuados')?>">
					<div class="panel-footer">
						<span class="pull-left">Ver los libros más puntuados</span> <span
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
							<div>
								<h2>Media de Puntuación</h2>
							</div>
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
							<div>
								<h2>Estado general de los libros</h2>
							</div>
						</div>
					</div>
				</div>
				<a href="<?php echo base_url('estado-general-libros')?>">
					<div class="panel-footer">
						<span class="pull-left">Ver el estado general de los libros</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>