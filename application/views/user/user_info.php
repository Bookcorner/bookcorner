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
		<div id="page-1" class="book-page">
			<nav class="book-menu" role="">
				<ul class="nav navbar-nav navbar-right">
					<li class="book-menu-element open-page-1"><a href="#">Datos de usuario</a></li>
					<li class="book-menu-element open-page-2"><a href="#">Editar datos</a></li>
				</ul>
			</nav>
			<div id="page-1" class="page">
				<p>Información de usuario</p>
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

		<div id="page-2" class="book-page">
			<nav class="book-menu" role="">
				<ul class="nav navbar-nav navbar-right">
					<li class="book-menu-element open-page-1"><a href="#">Datos de usuario</a></li>
					<li class="book-menu-element open-page-2"><a href="#">Editar datos</a></li>
				</ul>
			</nav>
			<div id="page-2" class="page">

				<div class="col-xs-12">
					<div class="col-xs-10 col-xs-offset-2">
						<h2>CONFIGURACIÓN DEL USUARIO</h2>
						<p>Opciones:</p>
						<ul>
							<li>Cambiar tu contraseña</li>
							<li>Cambiar tu información de usuario:(nickname, nombre,
								apellido, género)</li>
							<li>Cambiar el correo electrónico asociado</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="page-number">- 2 -</div>
		</div>

	</div>
</div>