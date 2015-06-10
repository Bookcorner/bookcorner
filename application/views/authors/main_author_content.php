<div class="container">
	<!-- BREADCRUMB -->
	<div>
		<ol class="breadcrumb">
			<li><?php echo anchor(base_url('home'), 'Home')?></li>
			<li><?php echo anchor(base_url('autores'), 'Autores')?></li>
		</ol>
	</div>
	<!-- FIN BREADCRUMB -->
	<div class="row">
		<!-- CONTENIDO PPAL-->
		<div class="col-xs-12">
		     <?php foreach ($authors as $author):?>
		     <div class="panel">
				<div class="panel-body">
                    <div class="col-md-2 col-md-push-10">
                        <a href="<?= 'autor/'.filterQuitSpecChar($author->author_fullname) ?>">
    					    <?php echo img ( array (
                                'src' => asset_url () . '/images/authors/' . $author ['author_img'],
                                'class' => 'img-circle smallauthor',
                                'alt' => $author ['author_fullname'] 
                            ) )?>
                        </a>
                    </div>
					<div class="col-md-10 col-md-pull-2">
                        <h2 class="text-right">
                            <?php echo anchor('autor/'.filterQuitSpecChar($author->author_fullname), $author['author_fullname'], [
                                'class' => 'nolink'
                            ])?>
                        </h2>
                        <p><?php echo substr($author['author_desc'], 0, 300)?>...<?php echo anchor('autor/'.filterQuitSpecChar($author->author_fullname), 'leer más')?></p>  
			         </div>
                </div>
                <div class ="panel-footer hidden">
                    <a href="votar-autor" class="btn btn-warning"> 
                        <i class="fa fa-thumbs-up"></i> Votar Autor
                    </a>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel">
                <div class="panel-body">
                    ¿No encontraste el autor que buscabas? Ayúdanos añadiendólo a la <a href="<?php echo base_url('reportes')?>">base de datos de autores</a>
                </div>
            </div>
        </div>
    </div>
</div>
