<div class="container">
	<!-- BREADCRUMB -->
	<div>
		<ol class="breadcrumb">
			<li><?php echo anchor(base_url('home'), 'Home')?></li>
			<li><?php echo anchor(base_url('reportes'), 'Reportes')?></li>
		</ol>
	</div>
	<!-- FIN BREADCRUMB -->
	<!-- CONTENIDO PPAL-->
	<div class="row">
		<div class="col-xs-12">
			<div class="panel">
				<div class="panel-header">
					<h3 class="lead text-center">
						<strong>Añadir un nuevo libro</strong>
					</h3>
				</div>
				<div class="panel-body">
                    <?php
                    echo form_open_multipart ( base_url () . 'crear-libro-y-autor', [ 
                            'class' => 'form-horizontal',
                            'data-toggle' => 'validator',
                            'method' => 'post',
                            'accept-charset' => 'UTF-8',
                            'id' => 'idFormAddBook' 
                    ] )?>
					<fieldset>
						<!-- Name input-->
						<div class="form-group">
							<label class="control-label col-xs-2" for="idIsbn">ISBN:</label>
							<div class="controls col-xs-9">
								<input id="idIsbn" name="isbn" class="form-control" type="text"
									placeholder="Isbn" class="input" required />
							</div>
							<div class="help-block with-errors"></div>

						</div>
						<div class="form-group">
							<label class="control-label col-xs-2" for="idBookName">Nombre:</label>
							<div class="controls col-xs-9">
								<input id="idBookName" name="bookname" class="form-control"
									type="text" placeholder="Título del libro" class="input"
									required />
							</div>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-2" for="idBookgenre">Géneros:</label>
							<div class="controls col-xs-9">
								<select id="idBookgenre" name="genrebooks[]" class="form-control control-label" multiple>
                                    <?php foreach ($genres as $genre):?>
                                        <option value="<?php echo $genre->id?>"><?php echo $genre->genrebook_name?></option>
                                    <?php endforeach;?>
                                </select>
							</div>
							<div class="help-block with-errors"></div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-2" for="idBookDesc">Descripción:</label>
							<div class="controls col-xs-9">
								<textarea id="idBookDesc" name="bookdesc" class="form-control"
									type="textarea"
									placeholder="Introduce una breve descripción del libro"
									class="input" rows="10" required></textarea>
							</div>
							<div class="help-block with-errors"></div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-2" for="idBookImg">Imagen de
								Portada:</label>
							<div class="controls col-xs-9">
								<span class="btn btn-default btn-file"> <i
									class="fa fa-picture-o"></i> Elegir una imagen...(5 MB máx) <input
									id="idBookImg" name="bookimg" class="form-control" type="file"
									required />
								</span>
							</div>
							<div class="help-block with-errors"></div>
						</div>
						<div class="panel-group" id="elecionAutor" role="tablist"
							aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="authorExistente">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="elecionAutor"
											href="#collapseOne" aria-expanded="false"
											aria-controls="collapseOne"> Comprueba si existe el autor <i class="fa fa-chevron-down"></i></a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in"
									role="tabpanel" aria-labelledby="authorExistente">
									<div class="panel-body">
									<div class="controls">
										<div class="form-group">
											<label class="control-label col-xs-2" for="idBookAuthor">Elige
												al autor:</label>
											<div class="controls col-xs-9">
												<select id="idBookAuthor" name="bookauthor"
													class="form-control control-label">
													<option value="none">-- Elige un Autor --</option>
													<option value="none">AUTOR INEXISTENTE</option>
                                                    <?php foreach ($authors as $author):?>
                                                        <option
														value="<?php echo $author->id?>"><?php echo $author->author_fullname?></option>
                                                    <?php endforeach;?>
                                                </select>
											</div>
											<div class="help-block with-errors"></div>
										</div>
                                    </div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="creacionAutor">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse"
											data-parent="#eleccionAutor" href="#collapseTwo"
											aria-expanded="false" aria-controls="collapseTwo"> ¿No encuentras el autor? ¡Añádelo Aquí! <i class="fa fa-chevron-down"></i> </a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse"
									role="tabpanel" aria-labelledby="creacionAutor">
									<div class="panel-body">
										<div class="panel">
											<div class="panel-header">
												<h3 class="lead text-center">
													<strong>Añadir un nuevo autor</strong>
												</h3>
											</div>
											<div class="panel-body">
												<fieldset>
													<!-- Name input-->
													<div class="form-group">
														<label class="control-label col-xs-2" for="idAuthorName">Nombre
															Completo:</label>
														<div class="controls col-xs-9">
															<input id="idAuthorName" name="authorname"
																class="form-control" type="text"
																placeholder="Nombre Completo del autor" class="input"
																required />
														</div>
														<div class="help-block with-errors"></div>
													</div>

													<div class="form-group">
														<label class="control-label col-xs-2" for="idAuthorDesc">Sinopsis:</label>
														<div class="controls col-xs-9">
															<textarea id="idBookDesc" name="authordesc"
																class="form-control" type="textarea"
																placeholder="Cuéntanos sobre la vida del autor brevemente"
																class="input" rows="10" required></textarea>
														</div>
														<div class="help-block with-errors"></div>
													</div>

													<div class="form-group">
														<label class="control-label col-xs-2" for="idAuthorImg">Imagen
															del Autor:</label>
														<div class="controls col-xs-9">
                            								<span class="btn btn-default btn-file"> <i
                            									class="fa fa-picture-o"></i> Elegir una imagen...(5MB máx) <input
                            									id="idBookImg" name="authorimg" class="form-control" type="file"
                            									required />
                            								</span>
                            							</div>
														<div class="help-block with-errors"></div>
													</div>
												</fieldset>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-info btn-block">
						<i class="fa fa-sign-in"></i> Enviar solicitud libro
					</button>
				</div>
				</fieldset>
                    <?php echo form_close()?>
                </div>
		</div>
	</div>
	<div class="col-xs-5  "></div>
</div>
</div>