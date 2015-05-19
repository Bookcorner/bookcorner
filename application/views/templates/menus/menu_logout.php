<div class="container">
	<!--MENU-->
	<div class="row">
		<div class="col-xs-12">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#idHeader">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>
					<?php echo anchor(base_url('que-es-bookcorner'), 'Book Corner', ['class' => 'navbar-brand'])?>
				</div>
				<div class="collapse navbar-collapse" id="idHeader">
					<ul class="nav navbar-nav">
						<li class="<?php if ($title == 'Home') { echo 'active'; }?>"><?php echo anchor(base_url('home'), 'Home')?></li>
						<li class="<?php if ($title == 'Libros') { echo 'active'; }?>"><?php echo anchor(base_url('libros'), 'Libros')?></li>
						<li class="<?php if ($title == 'Autores') { echo 'active'; }?>"><?php echo anchor(base_url('autores'), 'Autores')?></li>
						<li class="<?php if ($title == 'Lista de libros') { echo 'active'; }?>"><?php echo anchor(base_url('lista-libros'), 'Listas')?></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<?php echo form_open ( 'busqueda', [ 
								'id' => 'idSearchForm',
								'class' => 'navbar-form navbar-left',
								'role' => 'search' 
							] )?>
								<select class="form-control" name="typeOfSearch">
									<option value="author">Autores</option>
									<option value="book">Libros</option>
								</select>
								<div class="form-group">
    								<input type="text" id="idSearchName" name="searchName" class="form-control" placeholder="Buscar...">
    							</div>
								<button type="submit" class="btn btn-default">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							<?php echo form_close()?>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle img-responsive contenedor-avatar" data-toggle="dropdown">
							     <?php echo img(array(
							             'src' => asset_url(). '/images/users/'.$avatar,
							             'class' => 'avatar'
							     ))?>

							</a>
							<ul class="dropdown-menu" style="padding: 15px; min-width: 150px;">
								<li role="presentation" class="dropdown-header"><?php echo "$username $surname"?></li>
								<li role="presentation">
								    <?php echo anchor(base_url('informacion-de-usuario'), 'Perfil', ['role' => 'menuitem'])?>
								</li>
								<li role="presentation" class="divider"></li>
								<li role="presentation">
								    <?php echo anchor(base_url('configuracion-de-usuario'), 'Configuración', [
								            'role' => 'menuitem',
								            'tabindex' => '-1'
								    ])?>
								</li>
								<li><?php echo anchor(base_url('login/logout'), 'Salir')?></li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- FIN DE MENU-->
	</div>
</div>

<?php if($this->session->flashdata('signUpError')) { ?> <div class="alert alert-danger text-center" role="alert"> <?= $this->session->flashdata('signUpError') ?> </div> <?php } ?>
<?php if($this->session->flashdata('ok')) { ?> <div class="alert alert-info text-center" role="alert"> <?= $this->session->flashdata('ok') ?> </div> <?php } ?>
