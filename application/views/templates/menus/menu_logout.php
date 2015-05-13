<!--CONTAINER-->
<div class="container">
	<!--MENU-->
	<div class="row">
		<div class="col-xs-12">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>
					<?php echo anchor(base_url('home'), 'Book Corner', ['class' => 'navbar-brand'])?>
				</div>
				<div class="collapse navbar-collapse" id="idHeader">
					<ul class="nav navbar-nav">
						<li class="<?php if ($title == 'Home') { echo 'active'; }?>"><?php echo anchor(base_url('home'), 'Home')?></li>
						<li class="<?php if ($title == 'Libros') { echo 'active'; }?>"><?php echo anchor(base_url('libros'), 'Libros')?></li>
						<li class="<?php if ($title == 'Autores') { echo 'active'; }?>"><?php echo anchor(base_url('autores'), 'Autores')?></li>
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
							<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
							     <?php echo img(array(
							             'src' => asset_url(). '/images/users/'.$avatar,
							             'class' => 'avatar'
							     ))?>
							     <?php echo "$nickname"?>
							     <b class="caret"></b>
							</a>
							<ul class="dropdown-menu" style="padding: 15px; min-width: 250px;">
								<li role="presentation" class="dropdown-header"><?php echo "$username $surname"?></li>
								<li role="presentation">
								    <a role="menuitem" tabindex="-1" href="#">Perfil</a>
								</li>
								<li role="presentation" class="divider"></li>
								<li role="presentation">
								    <a role="menuitem" tabindex="-1" href="#">Configuración</a>
								</li>
							</ul>
						</li>
						<li><?php echo anchor(base_url('login/logout'), 'Salir')?></li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- FIN DE MENU-->
	</div>
</div>