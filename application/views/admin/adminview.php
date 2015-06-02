<div class="container">
	<!-- BREADCRUMB -->
	<div>
		<ol class="breadcrumb">
			<li><?php echo anchor(base_url('home'), 'Home')?></li>
			<li><?php echo anchor(base_url('admin'), 'Administración')?></li>
		</ol>
	</div>
	<!-- FIN BREADCRUMB -->
	<!-- CONTENIDO PPAL-->
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<i class="fa fa-database"fa-fw"></i> Administración Tablas
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-2">
							<a href="<?php echo base_url('adminusers')?>">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<div class="row">
											<div class="col-xs-3">
												<i class="fa fa-users fa-5x"></i>
											</div>
											<div class="col-xs-9 text-right">
												<div>Usuarios</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-2">
							<a href="<?php echo base_url('adminlistbook')?>">
								<div class="panel panel-danger">
									<div class="panel-heading">
										<div class="row">
											<div class="col-xs-3">
												<i class="fa fa-list fa-5x"></i>
											</div>
											<div class="col-xs-9 text-right">
												<div>Lista de Libros</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-2">
							<a href="<?php echo base_url('adminauthors')?>">
								<div class="panel panel-info">
									<div class="panel-heading">
										<div class="row">
											<div class="col-xs-3">
												<i class="fa fa-pencil-square-o fa-5x"></i>
											</div>
											<div class="col-xs-9 text-right">
												<div>Autores</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-2">
							<a href="<?php echo base_url('adminbooks')?>">
								<div class="panel panel-success">
									<div class="panel-heading">
										<div class="row">
											<div class="col-xs-3">
												<i class="fa fa-book fa-5x"></i>
											</div>
											<div class="col-xs-9 text-right">
												<div>Libros</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-4">
							<a href="<?php echo base_url('admingenre')?>">
								<div class="panel panel-warning">
									<div class="panel-heading">
										<div class="row">
											<div class="col-xs-6">
												<i class="fa fa-female fa-5x"></i> <i
													class="fa fa-male fa-5x"></i>
											</div>
											<div class="col-xs-6 text-right">
												<div>Géneros Literarios</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<!-- /.panel-body -->
				</div>
			</div>
		</div>
	</div>
	<div class="row panel">
        <?php echo $output->output; ?>
	</div>
</div>