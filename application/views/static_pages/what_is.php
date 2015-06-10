<!-- START THE FEATURETTES -->
<div class="container">
	<!-- CAROUSEL -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
			    <?php echo img(array(
                    'src' => asset_url(). '/images/general/banner/libros-banner.jpg',
			        'class' => 'first-slide',
			        'alt' => 'banner libros'
				))?>
				<div class="container">
					<div class="carousel-caption">
						<h1>¿Qué es Bookcorner?.</h1>
						<p>Te damos la bienvenida a Bookcorner: Lugar de gestión de tus
							libros y autores preferidos.</p>
						<p>
						    <?php echo anchor(base_url('home'), 'Inicio', [
								            'class' => 'btn btn-lg btn-primary',
								            'role' => 'button'
						    ])?>
						</p>
					</div>
				</div>
			</div>
			<div class="item">
			    <?php echo img(array(
                    'src' => asset_url(). '/images/general/banner/list-banner.jpeg',
			        'class' => 'second-slide',
			        'alt' => 'banner listas'
				))?>
				<div class="container">
					<div class="carousel-caption">
						<h1>Actualiza tu lista de libros.</h1>
						<p>Gestiona en un lugar centralizado todos los libros que te has
							leído, y compártelos con tus amigos de forma sencilla.</p>
						<p>
						    <?php echo anchor(base_url('lista-libros'), '¡Quiero
								Gestionar mis listas!', [
								            'class' => 'btn btn-lg btn-primary',
								            'role' => 'button'
						    ])?>
						</p>
					</div>
				</div>
			</div>
			<div class="item">
			    <?php echo img(array(
                    'src' => asset_url(). '/images/general/banner/crecimiento-banner.jpeg',
			        'class' => 'third-slide',
			        'alt' => 'banner crecimiento'
				))?>
				<div class="container">
					<div class="carousel-caption">
						<h1>Continuo crecimiento.</h1>
						<p>El contenido dinámico de Bookcorner permite que el libro que no
							encuentres hoy, esté mañana disponible. Para que el sitio crezca,
							es necesaria tu ayuda. ¿Nos echas un cable?</p>
						<p>
						    <?php echo anchor(base_url('reportes'), '¡Quiero ayudar!', [
								            'class' => 'btn btn-lg btn-primary',
								            'role' => 'button'
						    ])?>
						</p>
					</div>
				</div>
			</div>
			<div class="item">
			    <?php echo img(array(
                    'src' => asset_url(). '/images/general/banner/vote-banner.jpg',
			        'class' => 'forth-slide',
			        'alt' => 'banner votos'
				))?>
				<div class="container">
					<div class="carousel-caption">
						<h1>Vota a tus libros y autores preferidos.</h1>
						<p>Comparte tus gustos y opiniones con el resto de la comunidad
							por medio de los votos de libros y autores</p>
						<p>
						    <?php echo anchor(base_url('ver-votos'), '¡Quiero votar!', [
								            'class' => 'btn btn-lg btn-primary',
								            'role' => 'button'
						    ])?>
						</p>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button"
			data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"
			aria-hidden="true"></span> <span class="sr-only">Previous</span>
		</a> <a class="right carousel-control" href="#myCarousel"
			role="button" data-slide="next"> <span
			class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- FIN CAROUSEL -->
		<hr>
		<div class="row">
			<div class="col-md-7">
				<h2>
					Bookcorner <span class="text-muted"> dedicado única y
						exclusivamente a los libros </span>
				</h2>
				<p class="lead">
					Pretende ser un lugar donde los amantes de los mismos puedan tener
					un <strong>registro organizado de todos los libros</strong> que han
					leído o quieren leer, así como poder conocer las tendencias
					principales de libros de la actualidad.
				</p>
			</div>
			<div class="col-md-5">
			    <?php echo img(array(
                    'src' => asset_url(). '/images/general/libros.jpg',
			        'class' => 'featurette-image img-responsive center-block',
			        'alt' => 'Libros',
			        'data-src' => 'holder.js/500x500/auto'
				))?>
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-md-7 col-md-push-5">
				<h2>Actualiza tus listas</h2>
				<p class="lead">Bookcorner pretende ser un sitio en el que puedas
					organizar y compartir tus libros preferidos con la comunidad.</p>
				<p class="lead">Para ello, te proveemos de la gestión total de los
					libros que estás leyendo actualmente, pudiendo poner notas sobre
					qué te parecieron, las páginas que te gustaría recordar de los
					mismos y apuntes de cualquier índole.</p>
			</div>
			<div class="col-md-5 col-md-pull-7">
			     <?php echo img(array(
                    'src' => asset_url(). '/images/general/listas.jpg',
			        'class' => 'featurette-image img-responsive center-block',
			        'alt' => 'Listas',
			        'data-src' => 'holder.js/500x500/auto'
				))?>
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-md-7">
				<h2>
					Crecimiento Constante y Colectivo. <span class="text-muted">Ayuda a
						la página a crecer</span>
				</h2>
				<p class="lead">Dado que los libros no paran de salir, es (y será)
					frecuente que el sitio no disponga del libro que quieres añadir a
					tu lista en este momento. Debido a la cantidad ingente de libros
					que hay, os pedimos vuestra ayuda para seguir aumentando el
					contenido del sitio, pudiendo vosotros enviar la información de ese
					libro o de ese autor que tanto os gusta y que no está registrado
					todavía.</p>
			</div>
			<div class="col-md-5">
				<?php echo img(array(
                    'src' => asset_url(). '/images/general/crecimiento.jpg',
			        'class' => 'featurette-image img-responsive center-block',
			        'alt' => 'Crecimiento',
			        'data-src' => 'holder.js/500x500/auto'
				))?>
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-md-7 col-md-push-5">
				<h2>Vota tus preferidos</h2>
				<p class="lead">Bookcorner te la posibilidad de votar sobre los
					autores y libros de la página, pudiendo así conocer la popularidad
					de cada uno e inevitablemente descubriendo nuevos libros y autores</p>
			</div>
			<div class="col-md-5 col-md-pull-7">
				<?php echo img(array(
                    'src' => asset_url(). '/images/general/votacion.jpg',
			        'class' => 'featurette-image img-responsive center-block',
			        'alt' => 'Votación',
			        'data-src' => 'holder.js/500x500/auto'
				))?>
			</div>
		</div>
	<!-- /END THE FEATURETTES -->
</div>
