<div class="container">
	<!-- BREADCRUMB -->
	<div>
		<ol class="breadcrumb">
			<li><?php echo anchor(base_url('home'), 'Home')?></li>
			<li><?php echo anchor(base_url('libros'), 'Libros')?></li>
		</ol>
	</div>
	<!-- FIN BREADCRUMB -->
	<div class="row">
		<!-- CONTENIDO PPAL-->
		<div class="col-xs-12">
             <div class="panel-group" id="idAllBooks" role="tablist" aria-multiselectable="true">
		     <?php foreach ($books as $book):?>
		     <div class="panel">
                <div class="panel-heading" role="tab" id="head<?php echo 'libro'.$book['id']?>">
                    <div class="panel-title overflow">
                        <h4 class="alignleft"><?php echo $book['book_name']?></h4>
                        <a data-toggle="collapse" 
                                data-parent="#idAllBooks" 
                                href="<?php echo '#libro'.$book['id']?>" 
                                aria-expanded="false" 
                                aria-controls="<?php echo 'autor'.$book['id']?>" 
                                class="collapsed alignright">
                                <span class="glyphicon glyphicon-resize-full" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <div id="<?php echo 'libro'.$book['id']?>" 
                    class="panel-collapse collapse" 
                    role="tabpanel" 
                    aria-labelledby="head<?php echo 'libro'.$book['id']?>">
                    <div class="panel-body">
                        <div class="col-md-10 col-md-push-2">
                            <h2>
                            <?php echo anchor('book/'.$book['id'], $book['book_name'], [
                                'class' => 'nolink'
                            ])?></h2>
                            <p><?php echo substr($book['book_desc'], 0, 300)?>...<?php echo anchor('book/'.$book['id'], 'leer más')?></p>
                        </div>
    
                        <div class="col-md-2 col-md-pull-10">
                            <?php echo img ( array (
                                'src' => asset_url () . '/images/books/' . $book ['book_img'],
                                'class' => 'img-rounded smallbook',
                                'alt' => $book ['book_name'] 
                            ) )?>
                        </div>
    				</div>
    			 </div>
				 <div class ="panel-footer">
				    <a href="listbook/addBookToList/<?php echo $book['id']?>" class="btn btn-default">
				        <i class="glyphicon glyphicon-plus-sign" aria-hidden="true"></i>
				        Añadir a mi lista
				    </a>
                    
                    <a href="anadir-libro" class="btn btn-default">
				        <i class="glyphicon glyphicon-hand-up" aria-hidden="true"></i>
				        Votar
				    </a>
                </div>
            </div>
            <?php endforeach;?>
        </div>
	</div>
</div>