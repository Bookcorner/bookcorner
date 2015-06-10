<script type="text/javascript">
$(document).ready(function() {
	var states = {1: 'Leyendo', 2: 'Pendiente', 3: 'Abandonado', 4: 'Terminado' };
	$('.bookState').each(function(){
		var stateValue = $(this).text();
		$(this).text(states[stateValue]);
	});
});
</script>
<div class="container">
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
		<div class="col-xs-12">
			<div class="panel table-responsive">
				<div class="panel-heading">
					<h4 class="lead text-center">Lista de <?= $user['user_nickname'] ?></h4>
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
	</div>
</div>