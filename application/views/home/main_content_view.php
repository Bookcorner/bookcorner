<!-- CONTENIDO PPAL-->
<div class="container">
	<!-- BREADCRUMB -->
	<div>
		<ol class="breadcrumb">
			<li><?php echo anchor(base_url('home'), 'Home')?></li>
		</ol>
	</div>
	<!-- FIN BREADCRUMB -->
	<!-- CONTENIDO -->
	<div class="row">
		<!-- CONTENIDO CENTRAL -->
		<div class="row col-lg-8 col-md-8 col-sm-12">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="jumbotron jumbo">
					<h1 class="text-center">
						<span class="destacado">¡Bienvenido a Bookcorner!</span>
					</h1>
					<p class="destacado">En este portal podrás generar listas con tus
						libros favoritos y compartir tus opiniones con la comunidad.</p>
					<p><?php
    
    echo anchor ( base_url ( 'que-es-bookcorner' ), 'Saber más', [ 
            'btn btn-default btn-md' 
    ] )?></p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="panel">
					<div class="panel-heading">
						<h3>
							5 Libros más votados <i class="fa fa-star-o"></i>
						</h3>
					</div>
					<div class="panel-body">
						<table>
							<thead>
								<tr>
									<th>Portada</th>
									<th class="text-center">Libro</th>
									<th>Puntuación</th>
								</tr>
							</thead>
							<tbody>
                            <?php foreach ($popularbooks as $book):?>
    						<tr>
									<td><a
										href="<?php echo 'libro/'.filterQuitSpecChar($book['book_name'])?>"
										class="text-left">
                                        <?php echo img(asset_url().'images/books/'.$book['book_img'], $book['book_name'], ['class' => 'avatar'])?>
                                    </a></td>
									<td><a href="<?php echo 'libro/'.filterQuitSpecChar($book['book_name'])?>"
										class="text-center">
                                        <?php echo $book['book_name']?>
                                    </a></td>
									<td class="text-center"><?php echo $book['total']?></td>
								</tr>
    						<?php endforeach;?>
                            </tbody>
							<tfoot>
								<tr>
									<td colspan="2"><a href="<?php echo base_url('ver-votos')?>"><i
											class="fa fa-eye"></i> Ver más...</a></td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="panel">
					<div class="panel-heading">
						<h3>Top Puntuaciones medias</h3>
					</div>
					<div class="panel-body">
						<table>
							<thead>
								<tr>
									<th>Portada</th>
									<th class="text-center">Libro</th>
									<th class="text-center">Puntuación Media</th>
								</tr>
							</thead>
							<tbody>
                            <?php foreach ($averagebooks as $book):?>
    						<tr>
									<td><a
										href="<?php echo 'libro/'.filterQuitSpecChar($book['book_name'])?>"
										class="text-left">
                                        <?php echo img(asset_url().'images/books/'.$book['book_img'], $book['book_name'], ['class' => 'avatar'])?>
                                    </a></td>
									<td><a href="<?php echo 'libro/'.filterQuitSpecChar($book['book_name'])?>"
										class="text-center">
                                        <?php echo $book['book_name']?>
                                    </a></td>
									<td class="text-center"><?php echo $book['total']?></td>
								</tr>
    						<?php endforeach;?>
                            </tbody>
							<tfoot>
								<tr>
									<td colspan="2"><a href="<?php echo base_url('ver-votos')?>"
										class="text-center"><i class="fa fa-eye"></i>Ver más...</a></td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- CONTENIDO CENTRAL -->
		<!-- MENU LATERAL -->
		<div class="row col-lg-4 col-md-4 col-sm-12">
			<div class="col-lg-12 col-md-12 col-sm-6">
				<div class="panel">
					<div class="panel-heading">
						<h3>Libros Recientes</h3>
					</div>
					<div class="panel-body">
						<ul>
                            <?php foreach ($books as $book):?>
    						<li><a
								href="<?php echo 'libro/'.filterQuitSpecChar($book['book_name'])?>">
                                    <?php echo img(asset_url().'images/books/'.$book['book_img'], $book['book_name'], ['class' => 'avatar'])?>
                                    <?php echo $book['book_name']?>
                                </a></li>
    						<?php endforeach;?>
                        </ul>
						<a href="<?php echo base_url('libros')?>"><i class="fa fa-eye"></i>
							Ver más...</a>
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-6">
				<div class="panel">
					<div class="panel-heading">
						<h3>
							<i class="icon-time main-color"></i> Autores Recientes
						</h3>
					</div>
					<div class="panel-body">
						<ul>
                            <?php foreach ($authors as $author):?>
    						<li><a
								href="<?php echo 'autor/'.filterQuitSpecChar($author['author_fullname'])?>">
                                    <?php echo img(asset_url().'images/authors/'.$author['author_img'], $author['author_fullname'], ['class' => 'avatar'])?>
                                    <?php echo $author['author_fullname']?>
                                </a></li>
    						<?php endforeach;?>
    					</ul>
						<a href="<?php echo base_url('autores')?>"><i class="fa fa-eye"></i>
							Ver más...</a>
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-6">
				
						<a class="twitter-timeline"
							href="https://twitter.com/_Bookcorner_"
							data-widget-id="608682590535577601">Tweets por el @_Bookcorner_.</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					
			</div>
		</div>

		<!-- FIN MENU LATERAL -->
	</div>
</div>
<!-- CONTENIDO PPAL-->