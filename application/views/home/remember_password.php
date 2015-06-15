
<div>
	<ol class="breadcrumb">
		<li><?php echo anchor(base_url('home'), 'Home')?></li>
		<li><?php echo anchor(base_url('recuperar_clave'), 'Recordar contraseña')?></li>
	</ol>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title text-center">
			<p>¿Olvidaste tu contraseña? ¡No te preocupes!</p>
			<p>Podemos mandarte una contraseña nueva al correo electrónico.</p>
		</h3>
	</div>
	<div class="panel-body">
           <?=form_open ( base_url ( 'clave_nueva' ), [ 'class' => 'form-horizontal','data-toggle' => 'validator','method' => 'post','accept-charset' => 'UTF-8' ] )?>
               <div class="form-group">
			<label class="control-label col-xs-3" for="emailReset">Email:</label>
			<div class="controls col-xs-6">
				<input id="emailReset" name="email"
					pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$"
					class="input-large form-control" type="text" placeholder="Email"
					data-error="Dirección de correo no válida" required />
			</div>
			<div class="help-block with-errors"></div>
		</div>
		<div class="form-group form-inline">
			<label class="control-label col-xs-3" for=idCaptchaControl> Introduce
				Captcha: </label>
			<div class="controls col-xs-6">
							        <?php getCaptcha(); ?>
								</div>
			<div class="help-block with-errors"></div>
		</div>
		<div class="form-group text-center">
			<label class="control-label col-xs-0" for="idConfirmsignup"></label>
			<div class="controls col-xs-3">
				<button id="idConfirmsignup" name="confirmsignup"
					class="btn btn-success">
					<i class="fa fa-sign-in"></i> Enviar
				</button>
			</div>
		</div>
		</form>
	</div>
</div>