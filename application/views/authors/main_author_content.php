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
		<div class="col-xs-12">
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
</div>