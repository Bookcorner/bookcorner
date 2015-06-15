<!-- BREADCRUMB -->
<div>
	<ol class="breadcrumb">
		<li><?php echo anchor(base_url('home'), 'Home')?></li>
		<li><?php echo anchor(base_url('contacto'), 'Contacto')?></li>
	</ol>
</div>
<!-- FIN BREADCRUMB -->
<div class="row">
	<div class="col-xs-12">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="text-center">
					Contáctanos <i class="fa fa-phone fa-2x"></i>
				</h3>
			</div>
			<div class="panel-body">
				<div class="col-xs-12 col-sm-6">
					<ul>
						<li>¿Te ha gustado la página?</li>
						<li>¿Tienes ideas innovadoras que le puedan venir bien al sitio?</li>
						<li>¿Quieres preguntarnos algo?</li>
						<li>¿Estás interesado en algún creador de la página (laboralmente
							hablando... :D)?</li>
					</ul>
				</div>
				<div class="col-sm-6">
    				    <?php
            echo img ( array (
                    'src' => asset_url () . '/images/general/contacto.png',
                    'class' => 'img-rounded bigimage pull-right hidden-xs',
                    'alt' => 'mortadelo' 
            ) )?>
				    </div>
				<div class="col-xs-6 col-xs-push-3 visible-xs">
    				    <?php
            echo img ( array (
                    'src' => asset_url () . '/images/general/contacto.png',
                    'class' => 'img-rounded smallimage',
                    'alt' => 'mortadelo' 
            ) )?>
				    </div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-4 col-md-4 col-lg-4">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="text-center">
					Horarios de atención <i class="fa fa-clock-o fa-2x"></i>
				</h3>
			</div>
			<div class="panel-body">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Día</th>
							<th>Horario</th>
						</tr>
					</thead>
					<tbody>
						<tr class="success">
							<td>Diario</td>
							<td>9:00 a 18:00</td>
						</tr>
						<tr class="warning">
							<td>Sábado</td>
							<td>9:00 a 14:00</td>
						</tr>
						<tr class="danger">
							<td>Domingo</td>
							<td>11:00 a 14:00</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-sm-8 col-md-8 col-lg-8">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="text-center">
					<i class="fa fa-envelope-o fa-2x"></i> Contacto
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
						<textarea rows="10" cols="100" class="form-control" id="idMessage"
							name="message" placeholder="Mensaje" required></textarea>
					</div>
					<div class="help-block with-errors"></div>
				</div>

				<div class="form-group form-inline">
					<label class="control-label" for=idCaptchaControl> Introduce
						Captcha: </label>
					<div class="controls">												        				    
						    <?php getCaptcha(); ?>
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