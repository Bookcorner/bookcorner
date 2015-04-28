<body>
	<div class="bs-example">
		<nav role="navigation" class="navbar navbar-default">
			<div class="navbar-header">
				<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Logo</a>
			</div>
			<div id="navbarCollapse" class="collapse navbar-collapse">
				<button class="btn btn-default dropdown-toggle navbar-form navbar-right" type="button" id="dropdownMenu1" data-toggle="dropdown">
					Login
					<span class="caret"></span>
				</button>
				<a class="btn btn-default navbar-form navbar-right">
					Registro
				</a>
				<form role="search" class="navbar-form navbar-right">
					<div class="form-group pull-right">
						<input type="text" placeholder="Buscar" class="form-control">
						<i class="glyphicon glyphicon-search"  style="cursor: pointer"></i>
					</div>
				</form>
				<ul class="dropdown-menu" role="menu">
					<div class="container pull-right col-xs-12">
						<form role="form">
							<div class="form-group">
								<label for="usr">Name: </label>
								<input type="text" id="usr">
							</div>
							<div class="form-group">
								<label for="pwd">Password: </label>
								<input type="password" id="pwd">
								<input type="checkbox" id="remember"> 
								<label for="remember">Stay Logged In</label>
							</div>
							<div class="form-group">
								<label for="login"></label>
								<button class="btn btn-primary">Login</button>
							</div>
						</form>
					</div>
				</ul>
			</div>
		</nav>
	</div>