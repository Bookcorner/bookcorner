<!-- CONTENIDO PPAL-->
<div class="col-xs-12">
	<div class="col-xs-6 col-xs-offset-2">
		<?php foreach ($books as $book):?>
		<ul>
			<li><h4>ISBN:</h4> <?php echo $book['book_isbn']?></li>
			<li><h4>Name:</h4> <?php echo $book['book_name']?></li>
			<li><h4>Desc:</h4> <?php echo $book['book_desc']?></li>
			<li><h4>IMG: </h4> <?php echo $book['book_img']?></li>
		</ul>
		<br /> <br />
		<?php endforeach;?>
	</div>
</div>