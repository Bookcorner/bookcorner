<div id="book" class="view-cover book">
	<div class="main">
		<div class="book-font">
			<div class="book-cover">
            			<?php
            echo img ( [ 
                    'src' => asset_url () . '/animatedbooks/img/cover.jpg',
                    'class' => 'coverImg' 
            ] )?>
            </div>
			<div class="book-cover-back">
            			<?php
            echo img ( [ 
                    'src' => asset_url () . '/images/users/' . $userInfo->user_avatar,
                    'class' => 'book, circle' 
            ] )?>
            </div>
		</div>

		<div id="page-3" class="book-page">
			<nav class="book-menu" role="">
				<ul class="nav navbar-nav navbar-right">
					<li class="book-menu-element open-page-1"><a href="#">Datos de
							usuario</a></li>
					<li class="book-menu-element open-page-2"><a href="#">Editar datos</a></li>
				</ul>
			</nav>
			<div class="page">
				<div class="col-xs-12">
					<div class="col-xs-10">
						<form>
							<label for="newusername">Introduce un nuevo nombre de usuario</label>
							<input type="text" name="newusername" id="newusername"
								class="form-control"
								placeholder="nombre de usuario"> <br />
							<button class="btn btn-primary">Cambiar nombre de usuario</button>
						</form>
						<hr />
						<form>
							<label for="newmail">Introduce la nueva dirección de correo electrónico</label> 
							<input id="idEmail" name="email"
								pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$"
								class="input-large form-control" type="text" placeholder="email"
								data-error="Dirección de correo no válida" required /> <br />
							<button class="btn btn-primary">Cambiar email</button>
						</form>
						<hr />
						<button class="btn btn-default goto-page-2">
							Volver <i class="glyphicon glyphicon-chevron-left"></i>
						</button>
					</div>
				</div>
			</div>
			<div class="page-number">- 3 -</div>
		</div>

		<div id="page-2" class="book-page">
			<nav class="book-menu" role="">
				<ul class="nav navbar-nav navbar-right">
					<li class="book-menu-element open-page-1"><a href="#">Datos de
							usuario</a></li>
					<li class="book-menu-element open-page-2"><a href="#">Editar datos</a></li>
				</ul>
			</nav>
			<div class="page">
				<div class="col-xs-12">
					<div class="col-xs-10">
						<h2>Cambiar datos de usuario</h2>
						<form data-toggle="validator">
							<label for="oldpass">Introduce la antigua contraseña</label> <input
								type="password" name="oldpass" id="oldpass"
								placeholder="********" class="form-control"> <br /> <label
								for="newpass">Introduce la nueva contraseña</label> <input
								type="password" name="newpass" id="newpass" pattern="^{5,12}$"
								placeholder="********" class="form-control"
								data-error="Contraseña no válida" class="input-large" required>
							<br /> <label for="renewpass">Introduce la nueva contraseña otra
								vez</label> <input type="password" name="renewpass"
								id="renewpass" data-match="#idPass" class="form-control"
								placeholder="********" class="input-large"
								data-match-error="Error, la contraseña no coincide" required> <br />
							<button class="btn btn-primary">Cambiar contraseña</button>
						</form>
						<hr />
						<button class="btn btn-default goto-page-3">
							Más opciones <i class="glyphicon glyphicon-chevron-right"></i>
						</button>
					</div>
				</div>
			</div>
			<div class="page-number">- 2 -</div>
		</div>

		<div id="page-1" class="book-page">
			<nav class="book-menu" role="">
				<ul class="nav navbar-nav navbar-right">
					<li class="book-menu-element open-page-1"><a href="#">Datos de
							usuario</a></li>
					<li class="book-menu-element open-page-2"><a href="#">Editar datos</a></li>
				</ul>
			</nav>
			<div class="page">
				<h2>Información de usuario</h2>
				<hr />
				<p>Nombre: <?php echo $userInfo->user_name?></p>
				<p>Apellidos: <?php echo $userInfo->user_surname?></p>
				<p>Alias: <?php echo $userInfo->user_nickname?></p>
				<p>Correo Electrónico: <?php echo $userInfo->user_email?></p>
				<p>
				        Género: 
				        <?php
            
            if ('M' === $userInfo->user_genre) {
                echo 'Hombre';
            } else {
                echo 'Mujer';
            }
            ?>     
				    </p>
			</div>
			<div class="page-number">- 1 -</div>
		</div>
	</div>
</div>