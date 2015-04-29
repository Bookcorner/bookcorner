
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
					<a class="navbar-brand" href="#">Book Corner</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#about">Quienes somos</a></li>
					<li><a href="#about">¿Qué es Bookcorner?</a></li>
					<li><a href="#about">Contáctanos</a></li>
				</ul>
				<div class="collapse navbar-collapse"
					id="bs-example-navbar-collapse-1">
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control"
								placeholder="Buscar libros...">
						</div>
						<button type="submit" class="btn btn-default">
							<i class="glyphicon glyphicon-search"></i>
						</button>
					</form>

					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Registrarse</a></li>
						<li class="dropdown"><a href="#" class="dropdown-toggle"
							data-toggle="dropdown">Entrar <b class="caret"></b></a>
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
												<form class="form" role="form" method="post" action="login"
												accept-charset="UTF-8" id="login-nav">
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
													<label> <input type="checkbox" name="remember"> Recordar
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