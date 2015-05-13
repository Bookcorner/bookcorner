<div class="col-xs-12" style="padding-top:200px; padding-left:200px;">
	<div class="col-xs-10 col-xs-offset-2">
		<figure class="book">
			
			<!-- Front -->
			<ul class="hardcover_front">
				<li>
					<?php echo img([
					        'src' => asset_url(). '/animatedbooks/img/cover.jpg',
							'class' => 'book'
					])?>
				</li>
				<li></li>
				<li><?php echo img(['src' => asset_url(). '/images/users/' . $userInfo->user_avatar])?></li>
			</ul>

			<!-- Back -->
			<ul class="hardcover_back">
				<li>
				    <p>Información de usuario</p>
				    <p>Nombre: <?php echo $userInfo->user_name?></p>
				    <p>Apellidos: <?php echo $userInfo->user_surname?></p>
				    <p>Alias: <?php echo $userInfo->user_nickname?></p>
				    <p>Correo Electrónico: <?php echo $userInfo->user_email?></p>
				    <p>
				        Género: 
				        <?php if ('M' === $userInfo->user_genre){
				            echo 'Hombre';
				        } else {
				            echo 'Mujer';
				        }?>     
				    </p>
				</li>
				<li></li>
			</ul>
			
			<ul class="book_spine">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</figure>
	</div>
</div>