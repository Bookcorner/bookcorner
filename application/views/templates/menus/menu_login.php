<!--HEADER-->
<div class="container">

	<!--Comienza el menú header principal-->
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
					<a class="navbar-brand" href="#">Bootstrap</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#about">Elemento 1</a></li>
					<li><a href="#about">Elemento 2</a></li>
					<li><a href="#about">Elemento 3</a></li>
				</ul>
				<div class="collapse navbar-collapse"
					id="bs-example-navbar-collapse-1">
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Buscar">
						</div>
						<button type="submit" class="btn btn-default">
							<i class="glyphicon glyphicon-search"></i>
						</button>
					</form>

					<ul class="nav navbar-nav navbar-right">
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
											<?php echo form_open ( '#', [
														'class' => 'form-horizontal',
														'data-toggle' => 'validator',
														'method' => 'post',
														'accept-charset' => 'UTF-8',
														'id' => 'idFormSignIn' 
												] )?>
												<fieldset>
													<!-- Name input-->
													<div class="form-group">
														<label class="control-label" for="name">Nombre:</label>
														<div class="controls">
															<input id="name" name="name" class="form-control"
																type="text" placeholder="Nombre" class="input-large"
																required>
														</div>
														<div class="help-block with-errors"></div>
													</div>

													<div class="form-group">
														<label class="control-label" for="surname">Apellido:</label>
														<div class="controls">
															<input id="surname" name="surname" class="form-control"
																type="text" placeholder="Apellido" class="input-large"
																required>
														</div>
														<div class="help-block with-errors"></div>
													</div>

													<!-- Username input-->
													<div class="form-group">
														<label class="control-label" for="user">Nombre de usuario:</label>
														<div class="controls">
															<input id="user" name="user" class="form-control"
																type="text"
																placeholder="Usuario (tu nombre visible en la página)"
																class="input-large" required>
														</div>
														<div class="help-block with-errors"></div>
													</div>

													<!-- Password input-->
													<div class="form-group">
														<label class="control-label" for="pass">Contraseña:</label>
														<div class="controls">
															<input id="pass" name="pass" class="form-control" pattern="^{5,12}$"
																type="password" placeholder="********"
																data-error="Contraseña no válida"
																class="input-large" required>
																
														</div>
														<div class="help-block with-errors"></div>
													</div>

													<div class="form-group">
														<label class="control-label" for="repass">Introduce
															contraseña de nuevo:</label>
														<div class="controls">
															<input id="repass" name="repass" data-match="#pass"
																class="form-control" type="password"
																placeholder="********" class="input-large"
																data-match-error="Error, la contraseña no coincide"
																required>
														</div>
														<div class="help-block with-errors"></div>
													</div>

													<!-- Email input-->
													<div class="form-group">
														<label class="control-label" for="email">Email:</label>
														<div class="controls">
															<input id="email" name="email"
																pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$"
																class="input-large form-control" type="text"
																placeholder="email"
																data-error="Dirección de correo no válida"
																required>
														</div>
														<div class="help-block with-errors"></div>
													</div>

													<div class="form-group">
														<label class="control-label" for="reemail">Introduce email
															de nuevo:</label>
														<div class="controls">
															<input id="reemail" name="reemail" data-match="#email"
																class="input-large form-control" type="text"
																placeholder="email"
																data-match-error="Error, el email no coincide" required>
														</div>
														<div class="help-block with-errors"></div>
													</div>

													<!-- Button -->
													<div class="form-group">
														<label class="control-label" for="confirmsignup"></label>
														<div class="controls">
															<button id="confirmsignup" name="confirmsignup"
																class="btn btn-success">Registrar</button>
															<button type="button" class="btn btn-danger"
																data-dismiss="modal">Cerrar</button>
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
						<li class="dropdown"><a href="#" class="dropdown-toggle"
							data-toggle="dropdown">Entrar<b class="caret"></b></a>
							<ul class="dropdown-menu"
								style="padding: 15px; min-width: 250px;">
								<li>
									<div class="row">
										<div class="col-md-12">
											<div><?php echo validation_errors()?></div>
											<div><?php echo $this->session->flashdata('error')?></div>
												<?php
												echo form_open ( 'login/signin', [
														'class' => 'form',
														'role' => 'form',
														'method' => 'post',
														'accept-charset' => 'UTF-8',
														'id' => 'idFormLogin' 
												] )?>
												<div class="form-group">
													<label class="sr-only" for="emailLogin">Usuario</label> <input
														type="text" class="form-control" id="emailLogin"
														placeholder="Usuario" required>
												</div>
												<div class="form-group">
													<label class="sr-only" for="passLogin">Contraseña</label> <input
														type="password" class="form-control" id="passLogin"
														placeholder="Contraseña" required>
												</div>
												<div class="checkbox">
													<label> <input type="checkbox"> Recordar
													</label>
												</div>
												<div class="form-group">
													<button type="submit" class="btn btn-success btn-block">Acceder</button>
												</div>
											</form>
										</div>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</div>

<script>
$('#myForm').validator()
</script>