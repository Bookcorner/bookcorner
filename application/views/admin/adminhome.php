<div class="container">
	<!-- BREADCRUMB -->
	<div>
		<ol class="breadcrumb">
			<li><?php echo anchor(base_url('home'), 'Home')?></li>
			<li><?php echo anchor(base_url('admin'), 'Home Administración')?></li>
		</ol>
	</div>
	<!-- FIN BREADCRUMB -->
	<!-- CONTENIDO PPAL-->
	<div class="row">
		<div class="col-xs-8">
   			<div class="row">
   				<div class="col-xs-6">
   					<div class="panel panel-primary">
   						<div class="panel-heading">
   							<div class="row">
   								<div class="col-xs-3">
   									<i class="fa fa-users fa-5x"></i>
   								</div>
   								<div class="col-xs-9 text-right">
   									<div class="huge"><h1><?php echo $number_of_users?></h1></div>
   									<div>Usuarios</div>
   								</div>
   							</div>
   						</div>
   						<a href="<?php echo base_url('adminusers')?>">
   							<div class="panel-footer">
   								<span class="pull-left">Ver Detalles</span> <span
   									class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
   								<div class="clearfix"></div>
   							</div>
   						</a>
   					</div>
   				</div>
   				<div class="col-xs-6">
   					<div class="panel panel-success">
   						<div class="panel-heading">
   							<div class="row">
   								<div class="col-xs-3">
   									<i class="fa fa-book fa-5x"></i>
   								</div>
   								<div class="col-xs-9 text-right">
   									<div class="huge"><h1><?php echo $number_of_books?></h1></div>
   									<div>Libros</div>
   								</div>
   							</div>
   						</div>
  						<a href="<?php echo base_url('adminlistbook')?>">
   							<div class="panel-footer">
   								<span class="pull-left">Ver Detalles</span> <span
   									class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
   								<div class="clearfix"></div>
   							</div>
   						</a>
   					</div>
   				</div>
       		</div>
   	    	<div class="row">
    			<div class="col-xs-6">
    				<div class="panel panel-info">
    					<div class="panel-heading">
    						<div class="row">
    							<div class="col-xs-3">
    								<i class="fa fa-pencil-square-o fa-5x"></i>
    							</div>
    							<div class="col-xs-9 text-right">
    								<div class="huge"><h1><?php echo $number_of_authors?></h1></div>
    								<div>Autores</div>
    							</div>
    						</div>
    					</div>
    					<a href="<?php echo base_url('adminauthors')?>">
    						<div class="panel-footer">
    							<span class="pull-left">Ver Detalles</span> <span
    								class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
    							<div class="clearfix"></div>
    						</div>
    					</a>
    				</div>
    			</div>
    			<div class="col-xs-6">
    				<div class="panel panel-warning">
    					<div class="panel-heading">
    						<div class="row">
    							<div class="col-xs-6">
    								<i class="fa fa-female fa-5x"></i>
    								<i class="fa fa-male fa-5x"></i>
    							</div>
    							<div class="col-xs-6 text-right">
    								<div class="huge"><h1><?php echo $number_of_genres?></h1></div>
    								<div>Géneros Literarios</div>
    							</div>
    						</div>
    					</div>
    					<a href="<?php echo base_url('admingenre')?>">
    						<div class="panel-footer">
    							<span class="pull-left">Ver Detalles</span> <span
    								class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
    							<div class="clearfix"></div>
    						</div>
    					</a>
    				</div>
    			</div>
    		</div>
		</div>
		<div class="col-xs-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<i class="fa fa-database" fa-fw"></i> Administración Tablas
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="list-group">
						<a href="<?php echo base_url('adminusers')?>"
							class="list-group-item"> <i class="fa fa-users"></i>
							Administración Usuarios
						</a> 
						<a href="<?php echo base_url('adminlistbook')?>" class="list-group-item"> 
						  <i class="fa fa-list"></i> Administración Lista de Libros
						</a> 
						<a href="<?php echo base_url('adminauthors')?>" class="list-group-item"> 
						  <i class="fa fa-pencil-square-o"></i> Administración Autores
						</a> 
						<a href="<?php echo base_url('adminbooks')?>" class="list-group-item"> 
						  <i class="fa fa-book"></i> Administración Libros
						</a> 
						<a href="<?php echo base_url('admingenre')?>" class="list-group-item"> 
						  <i class="fa fa-female"></i><i class="fa fa-male"></i>  Administración Géneros Literarios
						</a>
					</div>
					<!-- /.list-group -->
				</div>
				<!-- /.panel-body -->
			</div>
		</div>
	</div>
</div>