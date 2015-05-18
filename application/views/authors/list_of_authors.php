<div class="container">
    <div>
        <!-- CONTENIDO PPAL-->
        <div class="col-xs-12">
        	<div class="col-xs-6 col-xs-offset-2">
        		<?php foreach ($authors as $author):?>
        		<div>
        			<p>Name: <?php echo $author['author_fullname']?></p>
        		</div>
        		<?php endforeach;?>
        	</div>
        </div>
    </div>
</div>