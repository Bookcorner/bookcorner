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
				<!-- BODY LG -->
				<div class="panel-body visible-lg">
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
						<div class="col-xs-3">
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
						<div class="col-xs-3">
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
					<!-- BODY RESTO -->
				<div class="panel-body visible-md">
					<div class="row">
						<div class="col-xs-2">
							<a href="<?php echo base_url('adminusers')?>">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<div class="row">
											<div class="col-xs-3">
												<i class="fa fa-users fa-5x"></i>
											</div>
											<div class="col-xs-9 text-right"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-3">
							<a href="<?php echo base_url('adminauthors')?>">
								<div class="panel panel-info">
									<div class="panel-heading">
										<div class="row">
											<div class="col-xs-3">
												<i class="fa fa-pencil-square-o fa-5x"></i>
											</div>
											<div class="col-xs-9 text-right"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-3">
							<a href="<?php echo base_url('adminbooks')?>">
								<div class="panel panel-success">
									<div class="panel-heading">
										<div class="row">
											<div class="col-xs-3">
												<i class="fa fa-book fa-5x"></i>
											</div>
											<div class="col-xs-9 text-right"></div>
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
					<!-- BODY SM -->
				<div class="panel-body visible-sm">
					<div class="row">
						<div class="col-xs-2">
							<a href="<?php echo base_url('adminusers')?>">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<div class="row">
											<div class="col-xs-3">
												<i class="fa fa-users fa-3x"></i>
											</div>
											<div class="col-xs-9 text-right"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-3">
							<a href="<?php echo base_url('adminauthors')?>">
								<div class="panel panel-info">
									<div class="panel-heading">
										<div class="row">
											<div class="col-xs-3">
												<i class="fa fa-pencil-square-o fa-3x"></i>
											</div>
											<div class="col-xs-9 text-right"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-3">
							<a href="<?php echo base_url('adminbooks')?>">
								<div class="panel panel-success">
									<div class="panel-heading">
										<div class="row">
											<div class="col-xs-3">
												<i class="fa fa-book fa-3x"></i>
											</div>
											<div class="col-xs-9 text-right"></div>
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
												<i class="fa fa-female fa-3x"></i> <i
													class="fa fa-male fa-3x"></i>
											</div>
											<div class="col-xs-6 text-right"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<!-- /.panel-body -->
				</div>
					<!-- BODY XS -->
				<div class="panel-body visible-xs">
					<div class="row">
						<div class="col-xs-6">
							<a href="<?php echo base_url('adminusers')?>">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<div class="row">
											<div class="col-xs-3">
												<i class="fa fa-users fa-2x"></i>
											</div>
											<div class="col-xs-9 text-right">Usuarios</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-6">
							<a href="<?php echo base_url('adminauthors')?>">
								<div class="panel panel-info">
									<div class="panel-heading">
										<div class="row">
											<div class="col-xs-3">
												<i class="fa fa-pencil-square-o fa-2x"></i>
											</div>
											<div class="col-xs-9 text-right">Autores</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-6">
							<a href="<?php echo base_url('adminbooks')?>">
								<div class="panel panel-success">
									<div class="panel-heading">
										<div class="row">
											<div class="col-xs-3">
												<i class="fa fa-book fa-2x"></i>
											</div>
											<div class="col-xs-9 text-right">Libros</div>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-6">
							<a href="<?php echo base_url('admingenre')?>">
								<div class="panel panel-warning">
									<div class="panel-heading">
										<div class="row">
											<div class="col-xs-3">
												<i class="fa fa-female fa-2x"></i>
											</div>
											<div class="col-xs-9 text-right">Generos</div>
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
	<div class="row">
        <?php echo $output->output; ?>
	</div>
</div>