<div class="col-xs-12">
	<div class="col-xs-6 col-xs-offset-2">
		<?php foreach ($books as $book):?>
		<div>
			<p>ISBN: <?php echo $book['book_isbn']?></p>
			<p>Name: <?php echo $book['book_name']?></p>
		</div>
		<?php endforeach;?>
	</div>
</div>
