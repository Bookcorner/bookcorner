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
		<div class="col-xs-9">
            <div class="panel">
					<div class="panel-heading">
						<h3>
							<i class="icon-time main-color"></i> Administración
						</h3>
					</div>
					<div class="panel-body">
					    <div>
    						<h2 class="lead">Instrucciones</h2>					    
    						<p>Escoge una table en la lista de la derecha para editar el CRUD</p>
					    </div>
					    <div>
    						<h2 class="lead">Datos estadísticos sobre la página</h2>					    
    						<p>Número de usuarios, número de libros, número de autores, número de votos, número de libros en todas las listbooks...</p>
					    </div>
					</div>
				</div>
		</div>
		<div class="col-xs-3">
			<ul class="list-group">
				<li class="list-group-item"><?php echo anchor(base_url('adminusers'), 'Administración Usuarios')?></li>
				<li class="list-group-item"><?php echo anchor(base_url('adminlistbook'), 'Administración Lista de Libros')?></li>
				<li class="list-group-item"><?php echo anchor(base_url('adminauthors'), 'Administración Autores')?></li>
				<li class="list-group-item"><?php echo anchor(base_url('adminbooks'), 'Administración Libros')?></li>
				<li class="list-group-item"><?php echo anchor(base_url('admingenre'), 'Administración Género')?></li>
			</ul>
		</div>
	</div>
</div>