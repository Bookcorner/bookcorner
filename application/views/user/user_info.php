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
						<?php
    
    echo form_open ( base_url () . '', [ 
            'class' => 'form-horizontal',
            'data-toggle' => 'validator',
            'method' => 'post',
            'accept-charset' => 'UTF-8',
            'id' => 'idFormSignIn' 
    ] )?>	
						<div class="form-group">
							<label class="control-label" for="idNewUsername">Nombre de usuario:</label>
							<div class="controls">
								<input id="idNewUsername" name="newUsername" class="form-control"
									pattern="^{1,20}$" type="text" placeholder="Nombre de usuario"
									data-error="Nombre de usuario no válido" required />
							</div>
							<div class="help-block with-errors"></div>
						</div>
						<button class="btn btn-primary">Cambiar nombre de usuario</button>
						<?php echo form_close()?>
						<hr />
						<?php
    
    echo form_open ( base_url () . '', [ 
            'class' => 'form-horizontal',
            'data-toggle' => 'validator',
            'method' => 'post',
            'accept-charset' => 'UTF-8',
            'id' => 'idFormSignIn' 
    ] )?>	
    
                        <div class="form-group">
							<label class="control-label" for="idEmail">Email:</label>
							<div class="controls">
								<input id="idEmail" name="email"
									pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$"
									class="input-large form-control" type="text"
									placeholder="Email" data-error="Dirección de correo no válida"
									required />
							</div>
							<div class="help-block with-errors"></div>
						</div>

						<button class="btn btn-primary">Cambiar email</button>
						<?php echo form_close()?>
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
						
            	<?php
            
            echo form_open ( base_url () . '', [ 
                    'class' => 'form-horizontal',
                    'data-toggle' => 'validator',
                    'method' => 'post',
                    'accept-charset' => 'UTF-8',
                    'id' => 'idFormSignIn' 
            ] )?>						
	                            
						<div class="form-group">
							<label for="oldpass">Introduce la antigua contraseña</label> <input
								type="password" name="oldPass" id="idOldPass"
								placeholder="********" class="form-control"
								data-error="Contraseña no válida" class="input-large" required />
							<br /> <label class="control-label" for="idPass">Introduce nueva
								contraseña:</label>
							<div class="controls">
								<input id="idNewPass" name="newPass" class="form-control"
									pattern="^{5,12}$" type="password" placeholder="********"
									data-error="Contraseña no válida" class="input-large" required />

							</div>
							<div class="help-block with-errors"></div>
						</div>

						<div class="form-group">
							<label class="control-label" for="idNewRepass">Introduce contraseña
								de nuevo:</label>
							<div class="controls">
								<input id="idNewRepass" name="newRepass" data-match="#idNewPass"
									class="form-control" type="password" placeholder="********"
									class="input-large"
									data-match-error="Error, la contraseña no coincide" required />
							</div>
							<div class="help-block with-errors"></div>
						</div>

						<button class="btn btn-primary">Cambiar contraseña</button>

						<?php echo form_close()?>
						<br />
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