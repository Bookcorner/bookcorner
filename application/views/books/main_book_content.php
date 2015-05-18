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
</div>