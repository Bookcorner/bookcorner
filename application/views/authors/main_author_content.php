<!-- CONTENIDO PPAL-->
<div class="col-xs-12">
	<div class="col-xs-6 col-xs-offset-2">
		<?php foreach ($authors as $author):?>
		<ul>
			<li><h4>Full name:</h4> <?php echo $author['author_fullname']?></li>
			<li><h4>Desc:</h4> <?php echo $author['author_desc']?></li>
			<li><h4>Img:</h4> <?php echo $author['author_img']?></li>
		</ul>
		<br /> <br />
		<?php endforeach;?>
	</div>
</div>