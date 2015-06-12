<script type="text/javascript">
$( document ).ready(function() {
    var bookId = null;
	
	$('.deleteBook').on({
		'click': function() {
			bookId = $(this).attr('id');
			$( "#dialog" ).dialog( "open" );
			$('.ui-dialog-titlebar-close').text("X").addClass('close').removeClass('ui-dialog-titlebar-close');
			$('button:contains("Eliminar libro")').addClass('btn btn-default');
			$('button:contains("Cancelar")').addClass('btn btn-default');
		}
	});

	$( "#dialog" ).dialog({
      autoOpen: false,
      buttons: {
          "Eliminar libro": function() {
        	  window.location.replace('<?= base_url().'quitar-libro/'?>'+bookId);
          },
          "Cancelar": function() {
            $( this ).dialog( "close" );
          }
        }
    });
	
});
</script>

<div id="dialog" title="Eliminar libro">
    <p>¿Seguro que desea quitar el libro de su lista?</p>
    <p>Se perderán sus valoraciones.</p>
</div>

<div class="container">
	<!-- BREADCRUMB -->
	<div>
		<ol class="breadcrumb">
			<li><?php echo anchor(base_url('home'), 'Home')?></li>
			<li><?php echo anchor(base_url('lista-libros'), 'Lista')?></li>
		</ol>
	</div>
	<!-- FIN BREADCRUMB -->
	<div class="row">
		<!-- CONTENIDO PPAL ESCRITORIO-->
		<div class="col-sm-12 hidden-xs">
			<div class="panel table-responsive">
				<div class="panel-heading">
					<h4 class="lead text-center">Libros favoritos de <?php echo $nickname?></h4>
				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>ISBN</th>
								<th>Título</th>
								<th>Estado</th>
								<th>Puntuación</th>
								<th>Notas</th>
								<th>Eliminar</th>
							</tr>
						</thead>
        				<tbody>
        		        <?php foreach ($books as $book):?>
                            <tr>
                                <td><?php echo $book['book_isbn']?></td>
        				        <td><?php echo anchor('libro/'.filterQuitSpecChar($book['book_name']),$book['book_name'])?></td>
                                <td>
                                    <a href="#"
                                        data-name="status" 
                                        data-type="select" 
                                        data-pk=""
                                        data-url="listbook/updateBookState/<?php echo $book['id']?>" 
                                        data-title="Selecciona un estado" 
                                        data-value="<?php echo $book['val_estado_libro']?>"
                                        aria-describedBy="<?php echo $book['id']?>"
                                        class="btn btn-default btn-md">
                                    </a>
                                </td>
                                <td>
                                    <a href="#"
                                        data-name="score" 
                                        data-type="select"
                                        data-pk=""
                                        data-url="listbook/updateBookScore/<?php echo $book['id']?>" 
                                        data-title="Puntuación" 
                                        data-value="<?php echo $book['val_puntuacion']?>"
                                        aria-describedBy="<?php echo $book['id']?>"
                                        class="btn btn-default btn-md">
                                    </a>
                                </td>
                                <td>
                                    <a href="#"
                                        data-name="note" 
                                        data-type="textarea"
                                        data-pk=""
                                        data-url="listbook/updateBookNote/<?php echo $book['id']?>" 
                                        data-title="Introduce tus notas:" 
                                        data-value="<?php echo $book['val_nota_libro']?>"
                                        aria-describedBy="<?php echo $book['id']?>"
                                        class="btn btn-default btn-md">
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <div class="btn btn-default deleteBook" id="<?= $book['book_id'] ?>">
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                    </div>
                                </td>
        				    </tr>    
        		        <?php endforeach;?>
        		        </tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- FIN CONTENIDO PRINCIPAL ESCRITORIO -->
		<!-- COMIENZO CONTENIDO MOVIL -->
		<div class="col-xs-12 visible-xs">
            <div class="panel panel-default">
                <div class="panel-heading">
					<h4 class="lead text-center">Libros favoritos de <?php echo $nickname?></h4>
				</div>
                <?php foreach ($books as $book):?>
                <div class="panel-body">
                    <a class="btn btn-default" data-toggle="collapse" href="#idContentBook<?php echo $book['id']?>" aria-expanded="false" aria-controls="idContentBook<?php echo $book['id']?>">
                      <?php echo $book['book_name']?>
                    </a>
                    <div class="collapse" id="idContentBook<?php echo $book['id']?>">
                      <ul id="<?php echo $book['id']?>" class="list-group">
                        <li class="list-group-item"><strong>ISBN</strong>: <?php echo $book['book_isbn']?></li>
                        <li class="list-group-item"><strong>Título</strong>: <?php echo anchor('libro/'.filterQuitSpecChar($book['book_name']),$book['book_name'])?></li>
                        <li class="list-group-item">
                            <strong>Estado</strong>:
                            <a href="#"
                                data-name="status" 
                                data-type="select" 
                                data-pk=""
                                data-url="listbook/updateBookState/<?php echo $book['id']?>" 
                                data-title="Selecciona un estado" 
                                data-value="<?php echo $book['val_estado_libro']?>"
                                aria-describedBy="<?php echo $book['id']?>"
                                class="btn btn-default btn-md">
                            </a>
                        </li>
                        <li class="list-group-item">
                            <strong>Puntuación</strong>:
                            <a href="#"
                               data-name="score" 
                               data-type="select"
                               data-pk=""
                               data-url="listbook/updateBookScore/<?php echo $book['id']?>" 
                               data-title="Puntuación" 
                               data-value="<?php echo $book['val_puntuacion']?>"
                               aria-describedBy="<?php echo $book['id']?>"
                               class="btn btn-default btn-md">
                            </a>
                        </li>
                        <li class="list-group-item">
                            <strong>Notas</strong>:
                             <a href="#"
                                data-name="note" 
                                data-type="textarea"
                                data-pk=""
                                data-url="listbook/updateBookNote/<?php echo $book['id']?>" 
                                data-title="Introduce tus notas:" 
                                data-value="<?php echo $book['val_nota_libro']?>"
                                aria-describedBy="<?php echo $book['id']?>"
                                class="btn btn-default btn-md">
                                <i class="glyphicon glyphicon-edit"></i>
                              </a>
                        </li>
                        <li class="list-group-item">
                            <strong>Eliminar</strong>:
                            <div class="btn btn-default deleteBook" id="<?= $book['book_id'] ?>">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                <?php endforeach;?>
            </div>
		</div>
	</div>
</div>
