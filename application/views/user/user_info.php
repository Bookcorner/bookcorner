<script type="text/javascript">
$( document ).ready(function() {
	
	$('#deleteAccount').on({
		'click': function() {
			$( "#dialog" ).dialog( "open" );
			$('.ui-dialog-titlebar-close').text("X").addClass('close').removeClass('ui-dialog-titlebar-close');
			$('button:contains("Borrar cuenta")').addClass('btn btn-default');
			$('button:contains("Cancelar")').addClass('btn btn-default');
		}
	});

	$( "#dialog" ).dialog({
      autoOpen: false,
      buttons: {
          "Borrar cuenta": function() {
            
            $.ajax({
    			url: "<?= base_url() ?>eliminar",
    			type: 'POST',
    			async: true,
    			data: {
    				idUser: <?= $id ?>,
    			    password: $('#confirmPassword').val()
    			},
    			success: function( data ) {
    				$('#message-container').html('<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="message-container"><div class="alert alert-info text-center" role="alert">'+data+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div></div>');

    			    if (data == "Cuenta borrada") {

    			    	setTimeout(function () {
    			    		window.location.replace("<?= base_url() ?>");
			    	    }, 3000);
    			    	
    			    }
    				
    			}, error: function( data ) {
    				$('#message-container').html('<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="message-container"><div class="alert alert-danger text-center" role="alert">'+data+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div></div>');
    			}
    		});
            
          },
          "Cancelar": function() {
            $( this ).dialog( "close" );
          }
        }
    });
	
});
</script>

<div id="dialog" title="Borrar cuenta">
    <p>Introduzca su contraseña para confirmar</p>
    <input id="confirmPassword" name="confirmPassword" class="form-control" type="password"
    	placeholder="Contraseña"
    	data-error="Contraseña no valida" required />
</div>

<div id="book" class="view-cover book">
	<div class="main ">
		<div class="book-font">
			<div class="book-cover">
                <?= img ( [ 
                    'src' => asset_url () . '/animatedbooks/img/cover.jpg',
                    'class' => 'coverImg' 
                ]) ?>
            </div>
			<div class="book-cover-back">
                <?= img ( [ 
                    'src' => asset_url () . '/images/users/' . $userInfo->user_avatar,
                    'class' => 'book, circle' 
                ]) ?>
            </div>
		</div>

		<div id="page-4" class="book-page">
			<nav class="book-menu" role="">
				<ul class="nav navbar-nav navbar-right">
					<li class="book-menu-element open-page-1"><a href="#">Datos de
							usuario</a></li>
					<li class="book-menu-element open-page-2"><a href="#">Editar datos</a></li>
				</ul>
			</nav>
			<div class="page">
                <?= form_open ( base_url () . 'actualizar-avatar', [ 
                    'class' => 'form-horizontal',
                    'data-toggle' => 'validator',
                    'method' => 'post',
                    'enctype' => 'multipart/form-data',
                    'accept-charset' => 'UTF-8',
                    'id' => 'idFormNewAvatar' 
                ]) ?>
					
					 <span class="btn btn-default btn-file">
						 Pincha para cargar la imagen
						 <input type="hidden" name="MAX_FILE_SIZE" value="5242880"> 
						 <input id="idNewAvatar" name="newAvatar" type="file" required/>
					 </span>
					<div class="help-block with-errors"></div>               
				    <button class="btn btn-primary">Cambiar avatar</button>
						<?php echo form_close()?>
						
						<hr />
						<button class="btn btn-danger" id="deleteAccount">						  
						   Eliminar mi cuenta
						</button>
						
						<hr/>
						<button class="btn btn-default goto-page-3">
							Volver a nombre de usuario / email <i class="glyphicon glyphicon-chevron-left"></i>
						</button>
			</div>
			<div class="page-number">- 4 -</div>
		</div>


		<div id="page-3" class="book-page">
			<nav class="book-menu" role="">
				<ul class="nav navbar-nav navbar-right">
					<li class="book-menu-element open-page-1"><a href="#">Datos de
							usuario</a></li>
					<li class="book-menu-element open-page-2"><a href="#">Editar datos</a></li>
				</ul>
			</nav>
			<div class="page">
				<div class="col-xs-12">
					<div class="col-xs-10">
                        <?= form_open ( base_url () . 'actualizar-username', [ 
                            'class' => 'form-horizontal',
                            'data-toggle' => 'validator',
                            'method' => 'post',
                            'accept-charset' => 'UTF-8',
                            'id' => 'idFormNewUsername' 
                        ]) ?>	
						<div class="form-group">
							<label class="control-label" for="idNewUsername">Nombre de
								usuario:</label>
							<div class="controls">
								<input id="idNewUsername" name="newUsername"
									class="form-control" pattern="^{1,20}$" type="text"
									placeholder="Nombre de usuario"
									data-error="Nombre de usuario no válido" required />
							</div>
							<div class="help-block with-errors"></div>
						</div>
						<button class="btn btn-primary">Cambiar nombre de usuario</button>
						<?php echo form_close()?>
						
						<hr />
                            <?= form_open ( base_url () . 'actualizar-mail', [ 
                                'class' => 'form-horizontal',
                                'data-toggle' => 'validator',
                                'method' => 'post',
                                'accept-charset' => 'UTF-8',
                                'id' => 'idFormNewEmail' 
                            ]) ?>	
    
                        <div class="form-group">
							<label class="control-label" for="idNewEmail">Email:</label>
							<div class="controls">
								<input id="idNewEmail" name="newEmail"
									pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$"
									class="input-large form-control" type="text"
									placeholder="Email" data-error="Dirección de correo no válida"
									required />
							</div>
							<div class="help-block with-errors"></div>
						</div>

						<button class="btn btn-primary">Cambiar email</button>
						<?php echo form_close()?>
						<hr />
						<button class="btn btn-default goto-page-2">
							Volver a contraseña <i class="glyphicon glyphicon-chevron-left"></i>
						</button>
						<hr />
						<button class="btn btn-default goto-page-4">
							Ir a avatar y otros<i class="glyphicon glyphicon-chevron-right"></i>
						</button>
					</div>
				</div>
			</div>
			<div class="page-number">- 3 -</div>
		</div>

		<div id="page-2" class="book-page">
			<nav class="book-menu" role="">
				<ul class="nav navbar-nav navbar-right">
					<li class="book-menu-element open-page-1"><a href="#">Datos de
							usuario</a></li>
					<li class="book-menu-element open-page-2"><a href="#">Editar datos</a></li>
				</ul>
			</nav>
			<div class="page">
				<div class="col-xs-12">
					<div class="col-xs-10">
						<h3><b>Cambiar datos de usuario</b></h3>						
                            <?= form_open ( base_url () . 'actualizar-pass', [ 
                                'class' => 'form-horizontal',
                                'data-toggle' => 'validator',
                                'method' => 'post',
                                'accept-charset' => 'UTF-8',
                                'id' => 'idFormNewPassword' 
                            ] )?>	                            
						<div class="form-group">
							<label for="oldpass">Introduce la antigua contraseña</label> 
							<div>
							    <input type="password" name="oldPass" id="idOldPass"
								placeholder="********" class="form-control"
								data-error="Contraseña no válida" class="input-large" required />
							</div>
							<div class="help-block with-errors"></div>
							<br /> 
							
							<label class="control-label" for="idPass">Introduce nueva contraseña:</label>
							<div class="controls">
								<input id="idNewPass" name="newPass" class="form-control"
									pattern="^{5,12}$" type="password" placeholder="********"
									data-error="Contraseña no válida" class="input-large" required />

							</div>
							<div class="help-block with-errors"></div>
						</div>

						<div class="form-group">
							<label class="control-label" for="idNewRepass">Introduce contraseña de nuevo:</label>
							<div class="controls">
								<input id="idNewRepass" name="newRepass" data-match="#idNewPass"
									class="form-control" type="password" placeholder="********"
									class="input-large"
									data-match-error="Error, la contraseña no coincide" required />
							</div>
							<div class="help-block with-errors"></div>
						</div>

						<button class="btn btn-primary">Cambiar contraseña</button>

						<?php echo form_close()?>
						<br />
						<button class="btn btn-default goto-page-3">
							Ir a nombre de usuario / email <i class="glyphicon glyphicon-chevron-right"></i>
						</button>
					</div>
				</div>
			</div>
			<div class="page-number">- 2 -</div>
		</div>

		<div id="page-1" class="book-page">
			<nav class="book-menu" role="">
				<ul class="nav navbar-nav navbar-right">
					<li class="book-menu-element open-page-1"><a href="#">Datos de
							usuario</a></li>
					<li class="book-menu-element open-page-2"><a href="#">Editar datos</a></li>
				</ul>
			</nav>
			<div class="page">
				<h2>Información de usuario</h2>
				<hr />
				<p>Nombre: <?php echo $userInfo->user_name?></p>
				<p>Apellidos: <?php echo $userInfo->user_surname?></p>
				<p>Alias: <?php echo $userInfo->user_nickname?></p>
				<p>Correo Electrónico: <?php echo $userInfo->user_email?></p>
				<p>
				        Género: 
				        <?php
            
            if ('M' === $userInfo->user_genre) {
                echo 'Hombre';
            } else {
                echo 'Mujer';
            }
            ?>     
				    </p>
			</div>
			<div class="page-number">- 1 -</div>
		</div>
	</div>
</div>