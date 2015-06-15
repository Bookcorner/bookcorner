    <!-- INICIO MENU ESCRITORIO -->
	<nav class="navbar navbar-default navbar-inverse hidden-xs">
		<div class="container-fluid">
            <!-- IMAGEN -->
			<div class="navbar-header visible-lg visible-md">
				<a class="navbar-brand" href="<?= base_url('home')?>">
				    <?php echo img ( array (
                          'src' => asset_url () . '/images/logo/bc.png',
                          'class' => 'Brand logo-lg-md' 
                    ) )?>
				</a>
			</div>
			<div class="navbar-header visible-sm no-padding col-sm-1">
				<a class="navbar-brand no-padding" href="<?= base_url('que-es-bookcorner')?>"> 
				    <?php echo img ( array (
                          'src' => asset_url () . '/images/logo/bc.png',
                          'class' => 'Brand logo-sm' 
                    ) )?>
				</a>
			</div>
			<!-- FIN IMAGEN -->
			<!-- OPCIONES MENU -->
			<!-- LG -->
			<ul class="nav navbar-nav visible-lg">
				<li class="<?php if ($title == 'Home') { echo 'active'; }?>">
					<a href="<?php echo base_url('home')?>">
    					<i class="fa fa-home"></i>
						Home
					</a>
				</li>
				<li class="<?php if ($title == 'Libros') { echo 'active'; }?>">
					<a href="<?php echo base_url('libros')?>">
    					<i class="fa fa-book"></i>
						Libros
					</a>
				</li>
				<li class="<?php if ($title == 'Autores') { echo 'active'; }?>">
					<a href="<?php echo base_url('autores')?>">
    					<i class="fa fa-user"></i>
						Autores
					</a>
				</li>
				<li class="<?php if ($title == 'Lista de libros') { echo 'active'; }?>">
					<a href="<?php echo base_url('lista-libros')?>">
    					<i class="fa fa-list-alt"></i>
						Lista
					</a>
				</li>
			</ul>
			<!-- MD -->
			<ul class="nav navbar-nav visible-md">
				<li class="<?php if ($title == 'Home') { echo 'active'; }?>">
					<a href="<?php echo base_url('home')?>">
						Home
					</a>
				</li>
				<li class="<?php if ($title == 'Libros') { echo 'active'; }?>">
					<a href="<?php echo base_url('libros')?>">
						Libros
					</a>
				</li>
				<li class="<?php if ($title == 'Autores') { echo 'active'; }?>">
					<a href="<?php echo base_url('autores')?>">
						Autores
					</a>
				</li>
				<li class="<?php if ($title == 'Lista de libros') { echo 'active'; }?>">
					<a href="<?php echo base_url('lista-libros')?>">
						Lista
					</a>
				</li>
			</ul>
			<!-- SM -->
			<ul class="nav navbar-nav visible-sm">
				<li class="<?php if ($title == 'Home') { echo 'active'; }?>">
					<a href="<?php echo base_url('home')?>">
    					<i class="fa fa-home"></i>
					</a>
				</li>
				<li class="<?php if ($title == 'Libros') { echo 'active'; }?>">
					<a href="<?php echo base_url('libros')?>">
    					<i class="fa fa-book"></i>
					</a>
				</li>
				<li class="<?php if ($title == 'Autores') { echo 'active'; }?>">
					<a href="<?php echo base_url('autores')?>">
    					<i class="fa fa-user"></i>
					</a>
				</li>
				<li class="<?php if ($title == 'Lista de libros') { echo 'active'; }?>">
					<a href="<?php echo base_url('lista-libros')?>">
    					<i class="fa fa-list-alt"></i>
					</a>
				</li>
			</ul>
            <!-- FIN OPCIONES MENU -->
			<div class="collapse navbar-collapse navbar-right"
				id="idFormAndLogin">
				<!-- BUSCADOR -->
                <?php
                echo form_open ( 'busqueda', [ 
                        'id' => 'idSearchForm',
                        'class' => 'navbar-form navbar-left no-padding',
                        'role' => 'search' 
                ] )?>
    				<div class="form-group">
                    <select class="form-control" name="typeOfSearch">
    					<option value="book">Libros</option>
    					<option value="author">Autores</option>
    				</select>
    				
    				<input type="text" id="idSearchName" name="searchName"
    						class="form-control" placeholder="Buscar...">
    				
    				<button type="submit" class="btn btn-default">
    					<i class="glyphicon glyphicon-search"></i>
    				</button>
    				</div>
        		<?php echo form_close()?>
        		<!-- FIN BUSCADOR -->
                    <!-- PERFIL -->
                    <ul class="nav navbar-nav navbar-right">
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
								    <a href="<?php echo base_url('informacion-de-usuario')?>" role="menuitem">
								        <i class="fa fa-user"></i>
								        Perfil
								    </a>
								</li>
								<li role="presentation">
								    <a href="<?php echo base_url('reportes')?>" role="menuitem">
								        <i class="fa fa-ambulance"></i>
								        Reportes
								    </a>
								</li>
								<li role="presentation">
								    <a href="<?php echo base_url('ver-votos')?>" role="menuitem">
								        <i class="fa fa-thumbs-o-up"></i> Votaciones 
								    </a>
								</li>
								<li role="presentation">
								    <?php if ($role == 2 || $role == 3):?>
								    <a href="<?php echo base_url('moderar')?>" role="menuitem">
								        <i class="fa fa-eye"></i>
								        Moderar
								        <span class="badge"><?php echo $number_of_reports?></span>
								    </a>
								    <?php endif;?>
								</li>
															
								<li role="presentation" class="divider"></li>
								<?php if ($role == 3) { ?>
								<li role="presentation">
								    <a href="<?php echo base_url('Admin')?>">
								        <i class="fa fa-cog fa-spin"></i>
								        Admin
								    </a>
								</li>
								<?php } ?>
								<li>
								    <a href="<?php echo base_url('salir')?>">
								        <i class="fa fa-sign-out"></i>
								        Salir
								    </a>
                                </li>
							</ul>
						</li>
    				</ul>
    			<!-- PERFIL -->
			</div>
		</div>
	</nav>
	<!-- FIN MENU ESCRITORIO -->
	<!-- INICIO MENU MOVILES -->
	<nav class="navbar navbar-inverse visible-xs">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#idMenuContent">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?= base_url('home')?>">
				    <?php echo img ( array (
                          'src' => asset_url () . '/images/logo/bc.png',
                          'class' => 'Brand logo-lg-md' 
                    ) )?>
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="idMenuContent">
				<ul class="nav navbar-nav">
					<li class="<?php if ($title == 'Home') { echo 'active'; }?>"><a
						href="<?php echo base_url('home')?>"> <i class="fa fa-home"></i>
							Home
					</a></li>
					<li class="<?php if ($title == 'Libros') { echo 'active'; }?>"><a
						href="<?php echo base_url('libros')?>"> <i class="fa fa-book"></i>
							Libros
					</a></li>
					<li class="<?php if ($title == 'Autores') { echo 'active'; }?>"><a
						href="<?php echo base_url('autores')?>"> <i class="fa fa-user"></i>
							Autores
					</a></li>
					<li class="<?php if ($title == 'Lista de libros') { echo 'active'; }?>">
    					<a href="<?php echo base_url('lista-libros')?>">
        					<i class="fa fa-list-alt"></i>
    						Lista
    					</a>
				    </li>
				</ul>
				<?php
                echo form_open ( 'busqueda', [ 
                        'id' => 'idSearchForm',
                        'class' => 'navbar-form navbar-left overflow',
                        'role' => 'search' 
                ] )?>
                <div class="col-xs-4">
                    <select class="form-control" name="typeOfSearch">
    					<option value="book">Libros</option>
    					<option value="author">Autores</option>
    				</select>
                </div>
                <div class="form-group col-xs-6">
					<input type="text" id="idSearchName" name="searchName"
						class="form-control" placeholder="Buscar...">
				</div>
				<button type="submit" class="btn btn-default col-xs-2">
					<i class="glyphicon glyphicon-search"></i>
				</button>
        		<?php echo form_close()?>
				<!-- PERFIL -->
                    <ul class="nav navbar-nav navbar-right">
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
								    <a href="<?php echo base_url('informacion-de-usuario')?>" role="menuitem">
								        <i class="fa fa-user"></i>
								        Perfil
								    </a>
								</li>
								<li role="presentation">
								    <a href="<?php echo base_url('reportes')?>" role="menuitem">
								        <i class="fa fa-ambulance"></i>
								        Reportes
								    </a>
								</li>
								<li role="presentation">
								    <a href="<?php echo base_url('ver-votos')?>" role="menuitem">
								        <i class="fa fa-thumbs-o-up"></i> Votaciones 
								    </a>
								</li>
								<li role="presentation">
								    <?php if ($role == 2 || $role == 3):?>
								    <a href="<?php echo base_url('moderar')?>" role="menuitem">
								        <i class="fa fa-eye"></i>
								        Moderar
								        <span class="badge"><?php echo $number_of_reports?></span>
								    </a>
								    <?php endif;?>
								</li>
															
								<li role="presentation" class="divider"></li>
								<?php if ($role == 3) { ?>
								<li role="presentation">
								    <a href="<?php echo base_url('Admin')?>">
								        <i class="fa fa-cog fa-spin"></i>
								        Admin
								    </a>
								</li>
								<?php } ?>
								<li>
								    <a href="<?php echo base_url('salir')?>">
								        <i class="fa fa-sign-out"></i>
								        Salir
								    </a>
                                </li>
							</ul>
						</li>
    				</ul>
    			<!-- PERFIL -->
			</div>
		</div>
	</nav>
	<!-- FIN MENU MOVILES -->