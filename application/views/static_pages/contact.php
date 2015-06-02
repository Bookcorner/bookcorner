<?php if($this->session->flashdata('sendmailerror')) { ?> <div class="alert alert-info text-center" role="alert"> <?= $this->session->flashdata('sendmailerror') ?> </div> <?php } ?>
<div class="container">
	<!-- BREADCRUMB -->
	<div>
		<ol class="breadcrumb">
			<li><?php echo anchor(base_url('home'), 'Home')?></li>
			<li><?php echo anchor(base_url('contacto'), 'Contacto')?></li>
		</ol>
	</div>
	<!-- FIN BREADCRUMB -->
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="lead">
						<i class="icon-map-marker main-color"></i> Contáctanos
					</h3>
				</div>
				<div class="panel-body">
					<ul>
						<li>¿Te ha gustado la página?</li>
						<li>¿Tienes ideas innovadoras que le puedan venir bien al sitio?</li>
						<li>¿Quieres preguntarnos algo?</li>
						<li>¿Estás interesado en algún creador de la página (laboralmente
							hablando... :D)?</li>
					</ul>
					<p>
						Sea cual sea tu interés puedes contactarnos <strong>thecornerbook@gmail.com</strong>
					</p>
					<p>Estaría bien que esta página tuviera la información puesta
						arriba a la izquierda, y a la derecha una foto chula de algún
						libro</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4 col-lg-4">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="lead">
						<i class="icon-time main-color"></i> Horarios de atención
					</h3>
				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Day</th>
								<th>Time</th>
							</tr>
						</thead>
						<tbody>
							<tr class="success">
								<td>Lunes</td>
								<td>9:00 to 18:00</td>
							</tr>
							<tr class="success">
								<td>Martes</td>
								<td>9:00 to 18:00</td>
							</tr>
							<tr class="success">

								<td>Miércoles</td>
								<td>9:00 to 18:00</td>
							</tr>
							<tr class="success">

								<td>Jueves</td>
								<td>9:00 to 18:00</td>
							</tr>
							<tr class="success">

								<td>Viernes</td>
								<td>9:00 to 18:00</td>
							</tr>
							<tr class="warning">

								<td>Sábado</td>
								<td>9:00 to 14:00</td>
							</tr>
							<tr class="danger">

								<td>Domingo</td>
								<td>Descanso</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-8">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="lead">
						<i class="icon-envelope main-color"></i> Contacto
					</h3>
				</div>
				<div class="panel-body">
					<!-- CONTACT FORM -->
				    <?php
        echo form_open ( 'contactar', [ 
                'role' => 'form',
                'data-toggle' => 'validator',
                'method' => 'post',
                'accept-charset' => 'UTF-8',
                'idContactForm' 
        ] )?>
					<div class="form-group">
						<label class="control-label" for="idName">Nombre:</label>
						<div class="controls">
							<input id="idName" name="name" class="form-control" type="text"
								placeholder="Nombre" class="input-large" required />
						</div>
						<div class="help-block with-errors"></div>
					</div>

					<div class="form-group">
						<label class="control-label" for="idEmail">Introduce tu correo
							electrónico:</label>
						<div class="controls">
							<input id="idEmail" name="email"
								pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$"
								class="input-large form-control" type="text" placeholder="email"
								data-error="Dirección de correo no válida" required />
						</div>
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group">
						<label class="control-label" for="idName">Mensaje:</label>
						<div class="controls">
							<textarea rows="10" cols="100" class="form-control"
								id="idMessage" name="message" placeholder="Mensaje" required></textarea>
						</div>
						<div class="help-block with-errors"></div>
					</div>
                    
                    <div class="form-group form-inline">
					    <label class="control-label" for=idCaptchaControl> Introduce Captcha: </label>
					    <div class="controls">												        				    
						    <?= getCaptcha('feedback') ?>			    
						</div>
						<div class="help-block with-errors"></div>
					</div>
					
					<br />
						
					<button type="submit" id="feedbackSubmit"
						class="btn btn-primary btn-lg"
						style="display: block; margin-top: 10px;">Enviar Feedback</button>
					<?php echo form_close()?>
					<!-- END CONTACT FORM -->
				</div>
			</div>
		</div>
	</div>
</div>