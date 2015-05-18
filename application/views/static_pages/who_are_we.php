<div class="container">
	<!-- BREADCRUMB -->
	<div>
		<ol class="breadcrumb">
			<li><?php echo anchor(base_url('home'), 'Home')?></li>
			<li><?php echo anchor(base_url('quienes-somos'), 'Quienes Somos')?></li>
		</ol>
	</div>
	<!-- FIN BREADCRUMB -->
	<div class="row">
		<div class="col-xs-12">
			<h2>¿Quiénes somos?</h2>
			<p>Somos tres estudiantes del ciclo formativo de grado superior de
				Desarrollo de Aplicaciones Web. Nos gusta la informática, sobre todo
				el diseño web.</p>
			<h2 align="center">Desarrolladores</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 col-lg-4 placeholder">
		    <?php echo img(array(
                    'src' => asset_url(). '/images/users/juanan.png',
			        'class' => 'img-responsive"',
			        'alt' => 'Juanan',
		    ))?>
			<h4>Juan Antonio Ortiz</h4>
			<span class="text-muted">Creador de bookcorner</span>
		</div>
		<div class="col-xs-4 col-lg-4 placeholder">
			<?php echo img(array(
                    'src' => asset_url(). '/images/users/mario.jpg',
			        'class' => 'img-responsive',
			        'alt' => 'Mario'
		    ))?>
			<h4>Mario Cantelar</h4>
			<span class="text-muted">Creador de bookcorner</span>
		</div>
		<div class="col-xs-4 col-lg-4 placeholder">
		    <?php echo img(array(
                    'src' => asset_url(). '/images/users/ruben.jpg',
			        'class' => 'img-responsive',
			        'alt' => 'Ruben'
		    ))?>
			<h4>Rubén Cortés</h4>
			<span class="text-muted">Creador de bookcorner</span>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h2 align="center">Administradores</h2>
		</div>
	</div>
	<div class="row">
        <?php foreach ($administrators as $admin):?>	   
    		<div class="col-xs-4 col-lg-4 placeholder">
    		    <?php echo img(array(
                        'src' => asset_url(). '/images/users/'. $admin->user_avatar,
    			        'class' => 'img-responsive',
    			        'alt' => $admin->user_nickname
    		    ))?>
    			<h4><?php echo $admin->user_nickname?></h4>
    			<span class="text-muted">Administrador</span>
    		</div>
    	<?php endforeach;?>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h2 align="center">Colaboradores</h2>
		</div>
	</div>
	<div class="row">
        <?php foreach ($moderators as $moderator):?>	   
    		<div class="col-xs-4 col-lg-4 placeholder">
    		    <?php echo img(array(
                        'src' => asset_url(). '/images/users/'. $moderator->user_avatar,
    			        'class' => 'img-responsive',
    			        'alt' => $moderator->user_nickname
    		    ))?>
    			<h4><?php echo $moderator->user_nickname?></h4>
    			<span class="text-muted">Moderador</span>
    		</div>
    	<?php endforeach;?>
	</div>
</div>