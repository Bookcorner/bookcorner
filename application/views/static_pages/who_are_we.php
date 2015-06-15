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
		<p>
			Somos tres estudiantes del ciclo formativo de grado superior de <strong>Desarrollo
				de Aplicaciones Web</strong>. Nos gusta la informática, sobre todo
			el diseño web. Esta página es parte del proyecto de fin de curso de
			ciclo, y esperamos que sea de vueltro agrado.
		</p>
		<h3 class="text-center">Desarrolladores</h3>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 placeholder">
		    <?php
    
    echo img ( array (
            'src' => asset_url () . 'images/users/developers/juanan.png',
            'class' => 'img-responsive img-circle',
            'alt' => 'Juanan' 
    ) )?>
			<h4>Juan Antonio Ortiz</h4>
		<span class="text-muted">Creador de bookcorner</span>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 placeholder">
			<?php

echo img ( array (
        'src' => asset_url () . 'images/users/developers/mario.jpg',
        'class' => 'img-responsive img-circle',
        'alt' => 'Mario' 
) )?>
			<h4>Mario Cantelar</h4>
		<span class="text-muted">Creador de bookcorner</span>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 placeholder">
		    <?php
    
    echo img ( array (
            'src' => asset_url () . 'images/users/developers/ruben.jpg',
            'class' => 'img-responsive img-circle',
            'alt' => 'Ruben' 
    ) )?>
			<h4>Rubén Cortés</h4>
		<span class="text-muted">Creador de bookcorner</span>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<h3 align="text-center">Administradores</h3>
	</div>
</div>
<div class="row">
        <?php foreach ($administrators as $admin):?>	   
    		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 placeholder">
    		    <?php
            
            echo img ( array (
                    'src' => asset_url () . 'images/users/' . $admin->user_avatar,
                    'class' => 'img-responsive img-circle',
                    'alt' => $admin->user_nickname 
            ) )?>
    			<h4><?php echo $admin->user_nickname?></h4>
		<span class="text-muted">Administrador</span>
	</div>
    	<?php endforeach;?>
	</div>
<div class="row">
	<div class="col-xs-12">
		<h3 align="text-center">Colaboradores</h3>
	</div>
</div>
<div class="row">
    <?php foreach ($moderators as $moderator):?>	   
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 placeholder">
		    <?php
        
        echo img ( array (
                'src' => asset_url () . 'images/users/' . $moderator->user_avatar,
                'class' => 'img-responsive img-circle',
                'alt' => $moderator->user_nickname 
        ) )?>
			<h4><?php echo $moderator->user_nickname?></h4>
		<span class="text-muted">Moderador</span>
	</div>
	<?php endforeach;?>
</div>