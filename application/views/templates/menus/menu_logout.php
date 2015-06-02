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
						<li class="<?php if ($title == 'Home') { echo 'active'; }?>">
						  <a href="<?php echo base_url('home')?>">
    						  <i class="fa fa-home fa-2x"></i>
						      Home
						  </a>
						</li>
						<li class="<?php if ($title == 'Libros') { echo 'active'; }?>">
						  <a href="<?php echo base_url('libros')?>">
    						  <i class="fa fa-book fa-2x"></i>
						      Libros
						  </a>
						</li>
						<li class="<?php if ($title == 'Autores') { echo 'active'; }?>">
						  <a href="<?php echo base_url('autores')?>">
    						  <i class="fa fa-pencil-square-o fa-2x"></i>
						      Autores
						  </a>
						</li>						
						<li class="dropdown <?php if ($title == 'Lista de libros' || $title == 'Lista de autores') echo 'active' ?>">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
    						  <i class="fa fa-list fa-2x"></i>
						      Listas
						    </a>
    						<ul class="dropdown-menu" role="menu">
    							<li>
                                    <a href="<?php echo base_url('lista-libros')?>">
                                        <i class="fa fa-book"></i>
                                        Lista de libros
                                    </a>
                                </li>
    							<li class="divider"></li>
    							<li>
                                    <a href="<?php echo base_url('lista-autores')?>">
                                        <i class="fa fa-users"></i>
                                        Lista de autores
                                    </a>
                                </li>
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
								    <a href="<?php echo base_url('informacion-de-usuario')?>" role="menuitem">
								        <i class="fa fa-user"></i>
								        Perfil
								    </a>
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
								<li>
								    <a href="<?php echo base_url('salir')?>">
								        <i class="fa fa-sign-out"></i>
								        Salir
								    </a>
                                </li>
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
            <?php if($this->session->flashdata('ok')) { ?> <div class="alert alert-info text-center" role="alert"> <?= $this->session->flashdata('ok') ?> </div> <?php } ?>
        </div>
    </div>
</div>