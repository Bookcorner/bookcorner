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
        <div class="row col-lg-8">
            <div class="col-lg-12">
                <div class="jumbotron jumbo">
                    <h1 class="text-center"><span class="destacado">¡Bienvenido a BookCorner!</span></h1>
                    <p class="destacado">En este portal podrás generar listas
					con tus libros favoritos y compartir tus opiniones con la comunidad.</p>
                    <p><?php echo anchor(base_url('que-es-bookcorner'), 'Saber más', [
                            'btn btn-default btn-md'
                    ])?></p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel">
    				<div class="panel-heading">
    					<h3>
    						<i class="icon-time main-color"></i> 5 Libros más votados
    					</h3>
    				</div>
    				<div class="panel-body">
    					<table>
                            <thead>
                                <tr>
                                    <th>Libro</th>
                                    <th>Puntuación</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($popularbooks as $book):?>
    						<tr>
                                <td>
                                    <a href="<?php echo 'libro/'.$book['id']?>" class="text-left">
                                        <?php echo img(asset_url().'images/books/'.$book['book_img'], $book['book_name'], ['class' => 'avatar'])?>
                                        <?php echo $book['book_name']?>
                                    </a>
                                </td>
                                
                                <td class="text-center"><?php echo $book['total']?></td>
                            </tr>
    						<?php endforeach;?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2"><a href="<?php echo base_url('votación')?>"><i class="fa fa-eye"></i> Ver más...</a>
                                    </td>
                                </tr>
                            </tfoot>
    					</table>
                    </div>
    			</div>
            </div>
            <div class="col-lg-6">
                <div class="panel">
    				<div class="panel-heading">
    					<h3>
    						<i class="icon-time main-color"></i> Puntuaciones medias más altas
    					</h3>
    				</div>
    				<div class="panel-body">
    					<table>
                            <thead>
                                <tr>
                                    <th>Libro</th>
                                    <th class="text-center">Puntuación Media</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($averagebooks as $book):?>
    						<tr>
                                <td>
                                    <a href="<?php echo 'libro/'.$book['id']?>" class="text-left">
                                        <?php echo img(asset_url().'images/books/'.$book['book_img'], $book['book_name'], ['class' => 'avatar'])?>
                                        <?php echo $book['book_name']?>
                                    </a>
                                </td>
                                
                                <td class="text-center"><?php echo $book['total']?></td>
                            </tr>
    						<?php endforeach;?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2"><a href="<?php echo base_url('votación')?>" class="text-center"><i class="fa fa-eye"></i>Ver más...</a>
                                    </td>
                                </tr>
                            </tfoot>
    					</table>
                    </div>
    			</div>
            </div>
        </div>
        <!-- CONTENIDO CENTRAL -->
        <!-- MENU LATERAL -->
        <div class="row col-lg-4"> 
            <div class="col-lg-12">
    			<div class="panel">
    				<div class="panel-heading">
    					<h3>
    					   <i class="icon-time main-color"></i> Autores Recientes
    					</h3>
    				</div>
    				<div class="panel-body">
    					<ul>
                            <?php foreach ($authors as $author):?>
    						<li>
                                <a href="<?php echo 'autor/'.$author['id']?>">
                                    <?php echo img(asset_url().'images/authors/'.$author['author_img'], $author['author_fullname'], ['class' => 'avatar'])?>
                                    <?php echo $author['author_fullname']?>
                                </a>
                            </li>
    						<?php endforeach;?>
    					</ul>
    					<a href="<?php echo base_url('autores')?>"><i class="fa fa-eye"></i> Ver más...</a>
    				</div>
    			</div>
            </div>
            <div class="col-lg-12">
                <div class="panel">
    				<div class="panel-heading">
    					<h3>
    						<i class="icon-time main-color"></i> Libros Recientes
    					</h3>
    				</div>
    				<div class="panel-body">
    					<ul>
                            <?php foreach ($books as $book):?>
    						<li>
                                <a href="<?php echo 'libro/'.$book['id']?>">
                                    <?php echo img(asset_url().'images/books/'.$book['book_img'], $book['book_name'], ['class' => 'avatar'])?>
                                    <?php echo $book['book_name']?>
                                </a>
                            </li>
    						<?php endforeach;?>
                        </ul>
    					<a href="<?php echo base_url('libros')?>"><i class="fa fa-eye"></i> Ver más...</a>
                    </div>
    			</div>
            </div>
        </div>
        <!-- FIN MENU LATERAL -->
    </div>
</div>
<!-- CONTENIDO PPAL-->