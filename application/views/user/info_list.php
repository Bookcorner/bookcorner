<script type="text/javascript">
$(document).ready(function() {
	var states = {1: 'Leyendo', 2: 'Pendiente de leer', 3: 'Abandonado', 4: 'Terminado' };
	$('.bookState').each(function(){
		var stateValue = $(this).text();
		$(this).text(states[stateValue]);
	});
});
</script>
<!-- BREADCRUMB -->
<div>
	<ol class="breadcrumb">
		<li><?php echo anchor(base_url('home'), 'Home')?></li>
		<li><?php echo anchor(base_url('usuario/'.$user['user_nickname']), 'Lista de '.$user->user_nickname)?></li>
	</ol>
</div>
<!-- FIN BREADCRUMB -->
<div class="row">
	<!-- CONTENIDO PPAL-->
	<div class="col-xs-12 hidden-xs">
		<div class="panel">
                <?php
                echo img ( array (
                        'src' => asset_url () . '/images/users/' . $user->user_avatar,
                        'class' => 'perfilAvatar',
                        'alt' => $user->user_nickname 
                ) )?>
				<div class="panel-heading">
				<h4 class="lead text-center">Lista de <?= $user['user_nickname'] ?></h4>
				<h5 class="text-center">
					<strong><?php echo $user['user_name'].' '.$user['user_surname'] ?></strong>
				</h5>
			</div>
			<div class="panel-body">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ISBN</th>
							<th>Título</th>
							<th>Estado</th>
							<th>Puntuación</th>
						</tr>
					</thead>
					<tbody>
        		        <?php foreach ($books as $book):?>
                            <tr>
							<td><?php echo $book['book_isbn']?></td>
							<td><?php echo anchor('libro/'.filterQuitSpecChar($book['book_name']),$book['book_name'])?></td>
							<td class="bookState"><?php echo $book['val_estado_libro']?></td>
							<td><?php echo $book['val_puntuacion']?></td>
						</tr>    
        		        <?php endforeach;?>
        		        </tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- FIN CONTENIDO PPAL -->
	<!-- COMIENZO CONTENIDO MOVIL -->
	<div class="col-xs-12 visible-xs">
		<div class="panel panel-default">
			<div class="panel-heading">
				<span class="pull-left">
                    <?php
                    echo img ( array (
                            'src' => asset_url () . '/images/users/' . $user->user_avatar,
                            'class' => 'perfilAvatarMovil',
                            'alt' => $user->user_nickname 
                    ) )?>
                    </span>
				<h4 class="lead text-right">Lista de <?= $user['user_nickname'] ?></h4>
				<h5 class="text-right">
					<strong><?php echo $user['user_name'].' '.$user['user_surname'] ?></strong>
				</h5>
			</div>
                <?php foreach ($books as $book):?>
                <div class="panel-body">
				<a class="btn btn-default" data-toggle="collapse"
					href="#idContentBook<?php echo $book['id']?>" aria-expanded="false"
					aria-controls="idContentBook<?php echo $book['id']?>">
                      <?php echo $book['book_name']?>
                    </a>
				<div class="collapse" id="idContentBook<?php echo $book['id']?>">
					<ul id="<?php echo $book['id']?>" class="list-group">
						<li class="list-group-item"><strong>ISBN</strong>: <?php echo $book['book_isbn']?></li>
						<li class="list-group-item"><strong>Título</strong>: <?php echo anchor('libro/'.filterQuitSpecChar($book['book_name']),$book['book_name'])?></li>
						<li class="list-group-item"><strong>Estado</strong>: <span
							class="bookState"><?php echo $book['val_estado_libro']?></span></li>
						<li class="list-group-item"><strong>Puntuación</strong>: <?php echo $book['val_puntuacion']?>
                        </li>
					</ul>
				</div>
			</div>
                <?php endforeach;?>
            </div>
	</div>
	<!-- FIN CONTENIDO MOVIL -->
</div>