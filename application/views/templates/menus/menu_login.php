<div class="container">
	<nav class="navbar navbar-default navbar-inverse">
		<div class="container-fluid">
            <!-- IMAGEN -->
			<div class="navbar-header visible-lg visible-md">
				<a class="navbar-brand" href="<?= base_url('que-es-bookcorner')?>">
				    <?php echo img ( array (
                          'src' => asset_url () . '/images/logo/bc.png',
                          'class' => 'Brand logo-lg-md' 
                    ) )?>
				</a>
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#idFormAndLogin">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
			</div>
			<div class="navbar-header visible-sm no-padding col-sm-1">
				<a class="navbar-brand no-padding" href="<?= base_url('que-es-bookcorner')?>"> 
				    <?php echo img ( array (
                          'src' => asset_url () . '/images/logo/bc.png',
                          'class' => 'Brand logo-sm' 
                    ) )?>
				</a>
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#idFormAndLogin">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
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
                    <select class="form-control" name="typeOfSearch">
    					<option value="book">Libros</option>
    					<option value="author">Autores</option>
    				</select>
    				<div class="form-group">
    					<input type="text" id="idSearchName" name="searchName"
    						class="form-control" placeholder="Buscar...">
    				</div>
    				<button type="submit" class="btn btn-default">
    					<i class="glyphicon glyphicon-search"></i>
    				</button>
        		<?php echo form_close()?>
        		<!-- FIN BUSCADOR -->
        		<!-- REGISTRO -->
                    <!-- LG MD -->
                    <ul class="nav navbar-nav navbar-right visible-lg visible-md">
    					<li>
						  <a href="" data-toggle="modal" data-target="#myModal">
						      <i class="fa fa-users"></i>
						      Registro
						  </a>
						</li>
    					<li class="dropdown <?php
                            if (validation_errors () || $this->session->flashdata ( 'loginError' )) {
								echo "open";
							}
							?>">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Entrar
                                <i class="fa fa-chevron-down"></i>
							</a>
    						<ul class="dropdown-menu dropdown-menu-right"
								style="padding: 15px; min-width: 250px;">
								<p class="bg-danger text-danger"><?php echo $this->session->flashdata('loginError')?></p>
								<li>
									<div class="row">
										<div class="col-md-12">
											<p class="bg-danger text-danger"><?php echo validation_errors()?></p>
											<?php echo form_open ( 'login/signin', [ 
												'class' => 'form',
												'role' => 'form',
												'method' => 'post',
												'accept-charset' => 'UTF-8',
												'id' => 'idFormLogin' 
											] )?>
                                                <div class="form-group">
                                                    <label class="sr-only" for="idUsername">Usuario</label> 
						                            <input type="text" class="form-control" id="idUsername"
													   name="username" placeholder="Usuario" required />
											    </div>
											    <div class="form-group">
												    <label class="sr-only" for="idPwd">Contraseña</label> 
												    <input type="password" class="form-control" id="idPwd" 
												        name="pwd" placeholder="Contraseña" required />
											    </div>
											    <div class="checkbox">
												    <label> 
												        <input type="checkbox" name="remember" checked />
													   Recordarme
												    </label>
											    </div>
											    <div class="form-group">
												    <button type="submit" class="btn btn-success btn-block">
												        <i class="fa fa-sign-in"></i> 
												        Acceder
                                                    </button>
											    </div>
											<?php echo form_close()?>
										</div>
									</div>
								</li>
							</ul>
    					</li>
                    </ul>
                
                    <!-- SM -->
                    <ul class="nav navbar-nav navbar-right visible-sm">
    					<li>
						  <a href="" data-toggle="modal" data-target="#myModal">
						      <i class="fa fa-users"></i>
						  </a>
						</li>
    					<li class="dropdown <?php
                            if (validation_errors () || $this->session->flashdata ( 'loginError' )) {
								echo "open";
							}
							?>">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-chevron-down"></i>
							</a>
    						<ul class="dropdown-menu dropdown-menu-right"
								style="padding: 15px; min-width: 250px;">
								<p class="bg-danger text-danger"><?php echo $this->session->flashdata('loginError')?></p>
								<li>
									<div class="row">
										<div class="col-md-12">
											<p class="bg-danger text-danger"><?php echo validation_errors()?></p>
											<?php echo form_open ( 'login/signin', [ 
												'class' => 'form',
												'role' => 'form',
												'method' => 'post',
												'accept-charset' => 'UTF-8',
												'id' => 'idFormLogin' 
											] )?>
                                                <div class="form-group">
                                                    <label class="sr-only" for="idUsername">Usuario</label> 
						                            <input type="text" class="form-control" id="idUsername"
													   name="username" placeholder="Usuario" required />
											    </div>
											    <div class="form-group">
												    <label class="sr-only" for="idPwd">Contraseña</label> 
												    <input type="password" class="form-control" id="idPwd" 
												        name="pwd" placeholder="Contraseña" required />
											    </div>
											    <div class="checkbox">
												    <label> 
												        <input type="checkbox" name="remember" checked />
													   Recordarme
												    </label>
											    </div>
											    <div class="form-group">
												    <button type="submit" class="btn btn-success btn-block">
												        <i class="fa fa-sign-in"></i> 
												        Acceder
                                                    </button>
											    </div>
											<?php echo form_close()?>
										</div>
									</div>
								</li>
							</ul>
    					</li>
                    </ul>
                    <!-- MODAL -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
							aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"
											aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										<h4 class="modal-title" id="myModalLabel">
										      Formulario de registro
										</h4>
									</div>
									<div class="modal-body">
										<div>
											<?php echo form_open ( base_url().'registrarse', [ 
												'class' => 'form-horizontal',
												'data-toggle' => 'validator',
												'method' => 'post',
												'accept-charset' => 'UTF-8',
												'id' => 'idFormSignIn' 
											] )?>
												<fieldset>
												<!-- Name input-->
												<div class="form-group">
													<label class="control-label" for="idName">Nombre:</label>
													<div class="controls">
														<input id="idName" name="name" class="form-control"
															type="text" placeholder="Nombre" class="input-large"
															required />
													</div>
													<div class="help-block with-errors"></div>
												</div>

												<div class="form-group">
													<label class="control-label" for="idSurname">Apellido:</label>
													<div class="controls">
														<input id="idSurname" name="surname" class="form-control"
															type="text" placeholder="Apellido" class="input-large"
															required />
													</div>
													<div class="help-block with-errors"></div>
												</div>
												
												<div class="form-group">
												    <label class="control-label" for="idGenre">Género:</label>
												    <div class="controls">
												        <label class="radio-inline"><input type="radio" value="M" name="genre" checked>Hombre</label>
                                                        <label class="radio-inline"><input type="radio" value="F" name="genre">Mujer</label>
												    </div>
												</div>

												<!-- Username input-->
												<div class="form-group">
													<label class="control-label" for="idUsername">Nombre de
														usuario:</label>
													<div class="controls">
														<input id="idUsername" name="user" class="form-control"
															pattern="^{1,20}$" type="text"
															placeholder="Usuario (tu nombre visible en la página)"
															data-error="Nombre de usuario no válido" class="input-large" required />
													</div>
													<div class="help-block with-errors"></div>
												</div>

												<!-- Password input-->
												<div class="form-group">
													<label class="control-label" for="idPass">Contraseña:</label>
													<div class="controls">
														<input id="idPass" name="pass" class="form-control"
															pattern="^{5,12}$" type="password" placeholder="********"
															data-error="Contraseña no válida" class="input-large"
															required />

													</div>
													<div class="help-block with-errors"></div>
												</div>

												<div class="form-group">
													<label class="control-label" for="idRepass">Introduce
														contraseña de nuevo:</label>
													<div class="controls">
														<input id="idRepass" name="repass" data-match="#idPass"
															class="form-control" type="password"
															placeholder="********" class="input-large"
															data-match-error="Error, la contraseña no coincide"
															required />
													</div>
													<div class="help-block with-errors"></div>
												</div>

												<!-- Email input-->
												<div class="form-group">
													<label class="control-label" for="idEmail">Email:</label>
													<div class="controls">
														<input id="idEmail" name="email"
															pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$"
															class="input-large form-control" type="text"
															placeholder="Email"
															data-error="Dirección de correo no válida" required />
													</div>
													<div class="help-block with-errors"></div>
												</div>

												<div class="form-group">
													<label class="control-label" for="idReemail">Introduce
														email de nuevo:</label>
													<div class="controls">
														<input id="idReemail" name="reemail" data-match="#idEmail"
															class="input-large form-control" type="text"
															placeholder="Email"
															data-match-error="Error, el email no coincide" required />
													</div>
													<div class="help-block with-errors"></div>
												</div>
												
												<div class="form-group form-inline">
												    <label class="control-label" for=idCaptchaControl> Introduce Captcha: </label>
												    <div class="controls">												        				    
    												    <?= getCaptcha('signup') ?>
    												</div>
    												<div class="help-block with-errors"></div>
												</div>

												<!-- Button -->
												<div class="form-group">
													<label class="control-label" for="idConfirmsignup"></label>
													<div class="controls">
														<button id="idConfirmsignup" name="confirmsignup"
															class="btn btn-success">
															<i class="fa fa-sign-in"></i>
															Registrar</button>
														<button type="button" class="btn btn-danger"
															data-dismiss="modal">
															<i class="fa fa-ban"></i>
															Cancelar
                                                        </button>
													</div>
												</div>
											</fieldset>
											<?php echo form_close()?>
										</div>
									</div>
								</div>
							</div>
						</div>
                    <!-- FIN MODAL -->
    			<!-- REGISTRO -->
			</div>
		</div>
	</nav>
</div>