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
					    <?php echo img ( array (
                            'src' => asset_url () . '/images/authors/' . $author ['author_img'],
                            'class' => 'img-circle smallauthor',
                            'alt' => $author ['author_fullname'] 
                        ) )?>
                    </div>
					<div class="col-md-10 col-md-pull-2">
                        <h2 class="text-right">
                            <?php echo anchor('autor/'.$author['id'], $author['author_fullname'], [
                                'class' => 'nolink'
                            ])?>
                        </h2>
                        <p><?php echo substr($author['author_desc'], 0, 300)?>...<?php echo anchor('autor/'.$author['id'], 'leer más')?></p>  
			         </div>
                </div>
                <div class ="panel-footer">
                    <button type="button" class="btn btn-default" aria-label="Left Align">
                        <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> Votar
                    </button>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>