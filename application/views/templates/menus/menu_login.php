	<!--HEADER-->
	<div class="container">

		<!--Esto es el sticky menu-->
		<!--Comentado para el futuro
		<div id="nav" class="row">
			<div class="col-xs-11">
				<nav class="navbar navbar-default navbar-static">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#">Home</a></li>
								<li><a href="#about">Elemento 1</a></li>
								<li><a href="#about">Elemento 2</a></li>
								<li><a href="#about">Elemento 3</a></li>
								<li><a href="#contact">Elemento 4</a></li>
								<li>
									<form class="navbar-form navbar-left" role="search">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Buscar"/>
										</div>
										<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
									</form>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>-->

		<!--Comienza el menú header principal-->
		<div class="row">
			<div class="col-xs-12">
				<nav class="navbar navbar-default" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Logo y nombre</a>
					</div>
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#about">Elemento 1</a></li>
						<li><a href="#about">Elemento 2</a></li>
						<li><a href="#about">Elemento 3</a></li>
						<li><a href="#contact">Elemento 4</a></li>
					</ul>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<form class="navbar-form navbar-left" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Buscar">
							</div>
							<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
						</form>

						<ul class="nav navbar-nav navbar-right">
							<li><a href="#">Registrarse</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Entrar <b class="caret"></b></a>
								<ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
									<li>
										<div class="row">
											<div class="col-md-12">
												<form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
													<div class="form-group">
														<label class="sr-only" for="exampleInputEmail2">Usuario</label>
														<input type="text" class="form-control" id="exampleInputEmail2" placeholder="Usuario" required>
													</div>
													<div class="form-group">
														<label class="sr-only" for="exampleInputPassword2">Contraseña</label>
														<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Contraseña" required>
													</div>
													<div class="checkbox">
														<label>
															<input type="checkbox"> Recordar
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