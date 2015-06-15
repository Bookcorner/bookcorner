<!-- BREADCRUMB -->
<div>
	<ol class="breadcrumb">
		<li><?php echo anchor(base_url('home'), 'Home')?></li>
		<li><?php echo anchor(base_url('ver-votos'), 'Votaciones')?></li>
		<li><?php echo anchor(base_url('estado-general-libros'), 'Estado de los libros puntuados')?></li>
	</ol>
</div>
<!-- FIN BREADCRUMB -->
<div class="row">
	<!-- CONTENIDO PPAL-->
	<div class="col-xs-12">
		<div class="panel table-responsive">
			<div class="panel-heading">
				<h3 class="lead text-center">
					<i class="fa fa-star-o fa-2x"></i> Estado de los libros <i
						class="fa fa-star-o fa-2x"></i>
				</h3>
			</div>
			<div class="panel-body">
				<!-- LIBROS LEIDOS -->
				<table class="table table-hover">
					<thead>
						<tr>
							<th colspan="3" class="text-center alert alert-info">Terminados</th>
						</tr>
						<tr>
							<th>Portada</th>
							<th class="text-center">Título</th>
							<th class="text-right">Usuarios</th>
						</tr>
					</thead>
					<tbody>
							<?php foreach ($readedBooks as $book):?>
                            <tr>
							<td><a
								href="<?php echo 'libro/'.filterQuitSpecChar($book['book_name'])?>"
								class="text-left">
                                        <?php echo img(asset_url().'images/books/'.$book['book_img'], $book['book_name'], ['class' => 'avatar'])?>
                                    </a></td>
							<td class="text-center">
								<h3 class="hidden-xs">
									<a
										href="<?php echo 'libro/'.filterQuitSpecChar($book['book_name'])?>">
        				                <?php echo $book['book_name']?>
                                        </a>
								</h3>
								<h5 class="visible-xs">
									<a
										href="<?php echo 'libro/'.filterQuitSpecChar($book['book_name'])?>">
        				                <?php echo $book['book_name']?>
                                        </a>
								</h5>
							</td>
							<td>
								<h3 class="hidden-xs text-right">
								        <?php echo $book['n_usuarios']?> 
								        <i class="fa fa-users"></i>
								</h3>
								<h3 class="visible-xs text-right">
								        <?php echo $book['n_usuarios']?> 
								        <i class="fa fa-users"></i>
								</h3>
							</td>
						</tr>    
        		        <?php endforeach;?>
						</tbody>
				</table>
				<!-- FIN LIBROS LEIDOS -->

				<!-- LIBROS LEYENDO -->
				<table class="table table-striped">
					<thead>
						<tr>
							<th colspan="3" class="text-center alert alert-success">Leyendo<i
								class="fa fa-leanpub"></i></th>
						</tr>
						<tr>
							<th>Portada</th>
							<th class="text-center">Título</th>
							<th class="text-right">Usuarios</th>
						</tr>
					</thead>
					<tbody>
							<?php foreach ($readingBooks as $book):?>
                            <tr>
							<td><a
								href="<?php echo 'libro/'.filterQuitSpecChar($book['book_name'])?>"
								class="text-left">
                                        <?php echo img(asset_url().'images/books/'.$book['book_img'], $book['book_name'], ['class' => 'avatar'])?>
                                    </a></td>
							<td class="text-center">
								<h3 class="hidden-xs">
									<a
										href="<?php echo 'libro/'.filterQuitSpecChar($book['book_name'])?>">
        				                <?php echo $book['book_name']?>
                                        </a>
								</h3>
								<h5 class="visible-xs">
									<a
										href="<?php echo 'libro/'.filterQuitSpecChar($book['book_name'])?>">
        				                <?php echo $book['book_name']?>
                                        </a>
								</h5>
							</td>
							<td>
								<h3 class="hidden-xs text-right">
								        <?php echo $book['n_usuarios']?> 
								        <i class="fa fa-users"></i>
								</h3>
								<h3 class="visible-xs text-right">
								        <?php echo $book['n_usuarios']?> 
								        <i class="fa fa-users"></i>
								</h3>
							</td>
						</tr>    
        		        <?php endforeach;?>
						</tbody>
				</table>
				<!-- FIN LIBROS LEYENDO -->
				<!-- LIBROS ABANDONADOS -->
				<table class="table table-striped">
					<thead>
						<tr>
							<th colspan="3" class="text-center alert alert-danger">Abandonados</th>
						</tr>
						<tr>
							<th>Portada</th>
							<th class="text-center">Título</th>
							<th class="text-right">Usuarios</th>
						</tr>
					</thead>
					<tbody>
							<?php foreach ($abandonedBooks as $book):?>
                            <tr>
							<td><a
								href="<?php echo 'libro/'.filterQuitSpecChar($book['book_name'])?>"
								class="text-left">
                                        <?php echo img(asset_url().'images/books/'.$book['book_img'], $book['book_name'], ['class' => 'avatar'])?>
                                    </a></td>
							<td class="text-center">
								<h3 class="hidden-xs">
									<a
										href="<?php echo 'libro/'.filterQuitSpecChar($book['book_name'])?>">
        				                <?php echo $book['book_name']?>
                                        </a>
								</h3>
								<h5 class="visible-xs">
									<a
										href="<?php echo 'libro/'.filterQuitSpecChar($book['book_name'])?>">
        				                <?php echo $book['book_name']?>
                                        </a>
								</h5>
							</td>
							<td>
								<h3 class="hidden-xs text-right">
								        <?php echo $book['n_usuarios']?> 
								        <i class="fa fa-users"></i>
								</h3>
								<h3 class="visible-xs text-right">
								        <?php echo $book['n_usuarios']?> 
								        <i class="fa fa-users"></i>
								</h3>
							</td>
						</tr>    
        		        <?php endforeach;?>
						</tbody>
				</table>
				<!-- FIN LIBROS ABANDONADOS -->
			</div>
		</div>
	</div>
</div>