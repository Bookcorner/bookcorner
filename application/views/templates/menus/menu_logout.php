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
					<?php echo anchor(base_url('que-es-bookcorner'), 
					        img(array(
					                'src' => asset_url(). '/images/logo/logo2.png',
					                'class' => 'logo')),
					        ['class' => 'navbar-brand contenedor-logo'])?>
				</div>
				<div class="collapse navbar-collapse" id="idHeader">
					<ul class="nav navbar-nav">
						<li class="<?php if ($title == 'Home') { echo 'active'; }?>"><?php echo anchor(base_url('home'), 'Home')?></li>
						<li class="<?php if ($title == 'Libros') { echo 'active'; }?>"><?php echo anchor(base_url('libros'), 'Libros')?></li>
						<li class="<?php if ($title == 'Autores') { echo 'active'; }?>"><?php echo anchor(base_url('autores'), 'Autores')?></li>
												
						<li class="dropdown <?php if ($title == 'Lista de libros' || $title == 'Lista de autores') echo "active" ?>">
    						<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        						Listas 
                            </a>
    						<ul class="dropdown-menu" role="menu">
    							<li><?php echo anchor(base_url('lista-libros'), 'Lista de Libros')?></li>
    							<li class="divider"></li>
    							<li><?php echo anchor(base_url('lista-autores'), 'Lista de Autores')?></li>
    						</ul>
						</li>
											
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<?php echo form_open ( 'busqueda', [ 
								'id' => 'idSearchForm',
								'class' => 'navbar-form navbar-left',
								'role' => 'search' 
							] )?>
								<select class="form-control" name="typeOfSearch">
								    <option value="book">Libros</option>
									<option value="author">Autores</option>
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
								    <?php if($role == 3) {
								        echo anchor(base_url('Admin'), 'Admin', [
								                'role' => 'menuitem',
								                'tabindex' => '-1'
								        ]);
								    } ?>
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
	
    <div class="row">
        <div class="col-xs-12">
            <?php if($this->session->flashdata('bookAddedSuccess')) { ?> <div class="alert alert-success text-center" role="alert"> <?= $this->session->flashdata('bookAddedSuccess') ?> </div> <?php } ?>
            <?php if($this->session->flashdata('bookAlreadyAdded')) { ?> <div class="alert alert-warning text-center" role="alert"> <?= $this->session->flashdata('bookAlreadyAdded') ?> </div> <?php } ?>
            <?php if($this->session->flashdata('signUpFail')) { ?> <div class="alert alert-danger text-center" role="alert"> <?= $this->session->flashdata('signUpFail') ?> </div> <?php } ?>
            <?php if($this->session->flashdata('ok')) { ?> <div class="alert alert-info text-center" role="alert"> <?= $this->session->flashdata('ok') ?> </div> <?php } ?>
        </div>
    </div>
</div>