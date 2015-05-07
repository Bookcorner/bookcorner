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
					<a class="navbar-brand" href="home">BookCorner</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#about">Libros</a></li>
					<li><a href="#about">Autores</a></li>
				</ul>
				<div class="collapse navbar-collapse"
					id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<form class="navbar-form navbar-left" role="search">
								<select class="form-control">
									<option value="author">Autores</option>
									<option value="book">Libros</option>
								</select>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Buscar...">
								</div>
								<button type="submit" class="btn btn-default">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</form>
						</li>
						<li><a href="#" data-toggle="modal" data-target="#myModal">Registrarse</a></li>
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
							aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"
											aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										<h4 class="modal-title" id="myModalLabel">Formulario de
											registro</h4>
									</div>
									<div class="modal-body">
										<div class="col-xs-12">
											<?php
											echo form_open ( '#', [ 
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
															required>
													</div>
													<div class="help-block with-errors"></div>
												</div>

												<div class="form-group">
													<label class="control-label" for="idSurname">Apellido:</label>
													<div class="controls">
														<input id="idSurname" name="surname" class="form-control"
															type="text" placeholder="Apellido" class="input-large"
															required>
													</div>
													<div class="help-block with-errors"></div>
												</div>

												<!-- Username input-->
												<div class="form-group">
													<label class="control-label" for="iDusername">Nombre de
														usuario:</label>
													<div class="controls">
														<input id="idUsername" name="user" class="form-control"
															type="text"
															placeholder="Usuario (tu nombre visible en la página)"
															class="input-large" required>
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
															required>

													</div>
													<div class="help-block with-errors"></div>
												</div>

												<div class="form-group">
													<label class="control-label" for="idRepass">Introduce
														contraseña de nuevo:</label>
													<div class="controls">
														<input id="idRepass" name="repass" data-match="#pass"
															class="form-control" type="password"
															placeholder="********" class="input-large"
															data-match-error="Error, la contraseña no coincide"
															required>
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
															placeholder="email"
															data-error="Dirección de correo no válida" required>
													</div>
													<div class="help-block with-errors"></div>
												</div>

												<div class="form-group">
													<label class="control-label" for="idReemail">Introduce
														email de nuevo:</label>
													<div class="controls">
														<input id="idReemail" name="reemail" data-match="#email"
															class="input-large form-control" type="text"
															placeholder="email"
															data-match-error="Error, el email no coincide" required>
													</div>
													<div class="help-block with-errors"></div>
												</div>

												<!-- Button -->
												<div class="form-group">
													<label class="control-label" for="idConfirmsignup"></label>
													<div class="controls">
														<button id="idConfirmsignup" name="confirmsignup"
															class="btn btn-success">Registrar</button>
														<button type="button" class="btn btn-danger"
															data-dismiss="modal">Cancelar</button>
													</div>
												</div>
											</fieldset>
											</form>
										</div>
									</div>
									<div class="modal-footer"></div>
								</div>
							</div>
						</div>
						<li
							class="dropdown <?php
							if (validation_errors () || $this->session->flashdata ( 'error' )) {
								echo "open";
							}
							?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Entrar<b
								class="caret"></b></a>
							<ul class="dropdown-menu"
								style="padding: 15px; min-width: 250px;">
								<li>
									<div class="row">
										<div class="col-md-12">
											<p class="bg-danger text-danger"><?php echo validation_errors()?></p>
											<p class="bg-danger text-danger"><?php echo $this->session->flashdata('error')?></p>
												<?php
												echo form_open ( 'login/signin', [ 
														'class' => 'form',
														'role' => 'form',
														'method' => 'post',
														'accept-charset' => 'UTF-8',
														'id' => 'idFormLogin' 
												] )?>
												<div class="form-group">
												<label class="sr-only" for="idUsername">Usuario</label> <input
													type="text" class="form-control" id="idUsername"
													name="username" placeholder="Usuario" required>
											</div>
											<div class="form-group">
												<label class="sr-only" for="idPwd">Contraseña</label> <input
													type="password" class="form-control" id="idPwd" name="pwd"
													placeholder="Contraseña" required>
											</div>
											<div class="checkbox">
												<label> <input type="checkbox" name="remember" checked>
													Recordarme
												</label>
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-success btn-block">Acceder</button>
											</div>
											</form>
										</div>
									</div>
								</li>
							</ul></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</div>
<!-- SCRIPTS -->
<script>
$('#myForm').validator()
</script>
<!-- SCRIPTS -->