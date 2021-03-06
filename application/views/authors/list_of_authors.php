<div class="container">
	<!-- BREADCRUMB -->
	<div>
		<ol class="breadcrumb">
			<li><?php echo anchor(base_url('home'), 'Home')?></li>
			<li><?php echo anchor(base_url('autores'), 'Autores')?></li>
		</ol>
	</div>
	<!-- FIN BREADCRUMB -->
	<!-- CONTENIDO PPAL-->
	<div class="row">
		<div class="col-xs-12">
            <div class="panel-group" id="idAllAuthors" role="tablist" aria-multiselectable="true">
		     <?php foreach ($authors as $author):?>
                <div class="panel">
                    <div class="panel-heading" role="tab" id="head<?php echo 'autor'.$author['id']?>">
                        <div class="panel-title overflow">
                            <h4 class="alignleft">
                                <a href="<?= base_url('autor/'.filterQuitSpecChar($author->author_fullname)) ?>" class="nolink"><?php echo $author['author_fullname']?></a>
                            </h4>
                            <a data-toggle="collapse" 
                                    data-parent="#idAllAuthors" 
                                    href="<?php echo '#autor'.$author['id']?>" 
                                    aria-expanded="false" 
                                    aria-controls="<?php echo 'autor'.$author['id']?>" 
                                    class="collapsed alignright">
                                    <span class="glyphicon glyphicon-resize-full" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                    <div id="<?php echo 'autor'.$author['id']?>" 
                        class="panel-collapse collapse" 
                        role="tabpanel" 
                        aria-labelledby="head<?php echo 'autor'.$author['id']?>">
        				<div class="panel-body">
                            <div class="col-sm-3 col-sm-push-9 col-md-3 col-md-push-9 col-lg-2 col-lg-push-10">
                                <a href="<?= base_url().'autor/'.filterQuitSpecChar($author->author_fullname) ?>">
            					    <?php echo img ( array (
                                        'src' => asset_url () . '/images/authors/' . $author ['author_img'],
                                        'class' => 'img-circle smallauthor',
                                        'alt' => $author ['author_fullname'] 
                                    ) )?>
                                </a>
                            </div>
        					<div class="col-sm-9 col-sm-pull-3 col-md-9 col-md-pull-3 col-lg-10 col-lg-pull-2">
                                <h2 class="text-right">
                                    <?php echo anchor('autor/'.filterQuitSpecChar($author->author_fullname), $author['author_fullname'], [
                                        'class' => 'nolink'
                                    ])?>
                                </h2>
                                <p><?php echo substr($author['author_desc'], 0, 300)?>...<?php echo anchor('autor/'.filterQuitSpecChar($author->author_fullname), 'leer más')?></p>  
        			         </div>
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
            <div class="panel">
                <div class="panel-body">
                    ¿No encontraste el autor que buscabas? Ayúdanos añadiendólo a la <a href="<?php echo base_url('reportes')?>">base de datos de autores</a>
                </div>
            </div>
        </div>
    </div>
</div>