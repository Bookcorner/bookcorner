<div class="panel container">
	<div class="panel-heading-custom" role="tab" id="headCrudBook">
		<div class="panel-title overflow">
			<h4 class="alignleft">Libros</h4>
			<a data-toggle="collapse" href="#crudBook" aria-expanded="true"
				class="alignright"> <span class="glyphicon glyphicon-chevron-down"
				aria-hidden="true"></span> <span class="glyphicon glyphicon-resize-full"
				aria-hidden="true"></span>
			</a>
		</div>
	</div>
	<div id="crudBook" class="panel-collapse collapse" role="tabpanel"
		aria-labelledby="headCrudBook" aria-expanded="true">
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Acciones</th>
						<th>Book Id</th>
						<th>Book ISBN</th>
						<th>Book Name</th>
						<th>Book Description</th>
						<th>Book IMG</th>
						<th>Bookstate ID</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="checkbox">
							<button class="btn btn btn-xs btn-danger">
								<i class="glyphicon glyphicon-trash"></i> Borrar
							</button></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por nombre" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
							<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
							<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
					</tr>
					<tr>
						<td><input type="checkbox">
							<button class="btn btn-default btn-xs">
								Editar<i class="glyphicon glyphicon-pencil"></i>
							</button>

							<div class="btn-group">
								<button type="button"
									class="btn btn-default btn-xs dropdown-toggle"
									data-toggle="dropdown" aria-expanded="false">
									Más <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Ver <i class="glyphicon glyphicon-eye-open"></i></a></li>
									<li><a href="#">Borrar <i class="glyphicon glyphicon-trash"></i></a>									</li>
								</ul>
							</div></td>
						<td>1</td>
						<td>9788483462034</td>
						<td>La Casa de los Espíritus</td>
						<td>...</td>
						<td>lacasadelosespiritus.png</td>
						<td>1</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="panel-footer">
			<div class="alignleft form-inline">
				Mostrar <select class="form-control">
					<option>10</option>
					<option>25</option>
					<option>50</option>
					<option>100</option>
				</select> entradas por página
			</div>
			<div class="alignright">
				<ul class="pagination">
					<li><a href="#"><<</a></li>
					<li><a href="#"><</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">></a></li>
					<li><a href="#">>></a></li>
				</ul>
				
			</div>
		</div>
	</div>
</div>

<div class="panel container">
	<div class="panel-heading-custom" role="tab" id="headCrudBookState">
		<div class="panel-title overflow">
			<h4 class="alignleft">Estado de libros</h4>
			<a data-toggle="collapse" href="#crudBookState" aria-expanded="true"
				class="alignright"> <span class="glyphicon glyphicon-resize-full"
				aria-hidden="true"></span>
			</a>
		</div>
	</div>
	<div id="crudBookState" class="panel-collapse collapse" role="tabpanel"
		aria-labelledby="headCrudBookState" aria-expanded="true">
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Acciones</th>
						<th>Nombre</th>
						<th>Dato 1</th>
						<th>Dato 2</th>
						<th>Dato 3</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="checkbox">
							<button class="btn btn-xs btn-danger">
								<i class="glyphicon glyphicon-trash"></i> Borrar
							</button></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por nombre" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
					</tr>
					<tr>
						<td><input type="checkbox">
							<button class="btn btn-default btn-xs">
								Editar<i class="glyphicon glyphicon-pencil"></i>
							</button>

							<div class="btn-group">
								<button type="button"
									class="btn btn-default btn-xs dropdown-toggle"
									data-toggle="dropdown" aria-expanded="false">
									Más <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Ver <i class="glyphicon glyphicon-eye-open"></i></a></li>
									<li><a href="#">Borrar <i class="glyphicon glyphicon-trash"></i></a></li>
								</ul>
							</div></td>
						<td>Perico</td>
						<td>Dato 1 de Perico</td>
						<td>Dato 2 de Perico</td>
						<td>Dato 3 de Perico</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="panel-footer">
			<div class="alignleft">
				Mostrar <select class="form-control">
					<option>10</option>
					<option>25</option>
					<option>50</option>
					<option>100</option>
				</select>entradas por página
			</div>
			<div class="alignright">
				<ul class="pagination">
					<li><a href="#"><<</a></li>
					<li><a href="#"><</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">></a></li>
					<li><a href="#">>></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>



<div class="panel container">
	<div class="panel-heading-custom" role="tab" id="headCrudAuthor">
		<div class="panel-title overflow">
			<h4 class="alignleft">Autores</h4>
			<a data-toggle="collapse" href="#crudAuthor" aria-expanded="true"
				class="alignright"> <span class="glyphicon glyphicon-resize-full"
				aria-hidden="true"></span>
			</a>
		</div>
	</div>
	<div id="crudAuthor" class="panel-collapse collapse" role="tabpanel"
		aria-labelledby="headCrudAuthor" aria-expanded="true">
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Acciones</th>
						<th>Nombre</th>
						<th>Dato 1</th>
						<th>Dato 2</th>
						<th>Dato 3</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="checkbox">
							<button class="btn btn-xs btn-danger">
								<i class="glyphicon glyphicon-trash"></i> Borrar
							</button></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por nombre" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
					</tr>
					<tr>
						<td><input type="checkbox">
							<button class="btn btn-default btn-xs">
								Editar<i class="glyphicon glyphicon-pencil"></i>
							</button>

							<div class="btn-group">
								<button type="button"
									class="btn btn-default btn-xs dropdown-toggle"
									data-toggle="dropdown" aria-expanded="false">
									Más <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Ver <i class="glyphicon glyphicon-eye-open"></i></a></li>
									<li><a href="#">Borrar <i class="glyphicon glyphicon-trash"></i></a></li>
								</ul>
							</div></td>
						<td>Perico</td>
						<td>Dato 1 de Perico</td>
						<td>Dato 2 de Perico</td>
						<td>Dato 3 de Perico</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="panel-footer">
			<div class="alignleft">
				Mostrar <select class="form-control">
					<option>10</option>
					<option>25</option>
					<option>50</option>
					<option>100</option>
				</select>entradas por página
			</div>
			<div class="alignright">
				<ul class="pagination">
					<li><a href="#"><<</a></li>
					<li><a href="#"><</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">></a></li>
					<li><a href="#">>></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="panel container">
	<div class="panel-heading-custom" role="tab" id="headCrudAuthorState">
		<div class="panel-title overflow">
			<h4 class="alignleft">Estado de autores</h4>
			<a data-toggle="collapse" href="#crudAuthorState"
				aria-expanded="true" class="alignright"> <span
				class="glyphicon glyphicon-resize-full" aria-hidden="true"></span>
			</a>
		</div>
	</div>
	<div id="crudAuthorState" class="panel-collapse collapse"
		role="tabpanel" aria-labelledby="headCrudAuthorState"
		aria-expanded="true">
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Acciones</th>
						<th>Nombre</th>
						<th>Dato 1</th>
						<th>Dato 2</th>
						<th>Dato 3</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="checkbox">
							<button class="btn btn-xs btn-danger">
								<i class="glyphicon glyphicon-trash"></i> Borrar
							</button></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por nombre" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
					</tr>
					<tr>
						<td><input type="checkbox">
							<button class="btn btn-default btn-xs">
								Editar<i class="glyphicon glyphicon-pencil"></i>
							</button>

							<div class="btn-group">
								<button type="button"
									class="btn btn-default btn-xs dropdown-toggle"
									data-toggle="dropdown" aria-expanded="false">
									Más <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Ver <i class="glyphicon glyphicon-eye-open"></i></a></li>
									<li><a href="#">Borrar <i class="glyphicon glyphicon-trash"></i></a></li>
								</ul>
							</div></td>
						<td>Perico</td>
						<td>Dato 1 de Perico</td>
						<td>Dato 2 de Perico</td>
						<td>Dato 3 de Perico</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="panel-footer">
			<div class="alignleft">
				Mostrar <select class="form-control">
					<option>10</option>
					<option>25</option>
					<option>50</option>
					<option>100</option>
				</select>entradas por página
			</div>
			<div class="alignright">
				<ul class="pagination">
					<li><a href="#"><<</a></li>
					<li><a href="#"><</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">></a></li>
					<li><a href="#">>></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="panel container">
	<div class="panel-heading-custom" role="tab" id="headGenre">
		<div class="panel-title overflow">
			<h4 class="alignleft">Géneros</h4>
			<a data-toggle="collapse" href="#crudGenre" aria-expanded="true"
				class="alignright"> <span class="glyphicon glyphicon-resize-full"
				aria-hidden="true"></span>
			</a>
		</div>
	</div>
	<div id="crudGenre" class="panel-collapse collapse" role="tabpanel"
		aria-labelledby="headGenre" aria-expanded="true">
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Acciones</th>
						<th>Nombre</th>
						<th>Dato 1</th>
						<th>Dato 2</th>
						<th>Dato 3</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="checkbox">
							<button class="btn btn-xs btn-danger">
								<i class="glyphicon glyphicon-trash"></i> Borrar
							</button></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por nombre" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
					</tr>
					<tr>
						<td><input type="checkbox">
							<button class="btn btn-default btn-xs">
								Editar<i class="glyphicon glyphicon-pencil"></i>
							</button>

							<div class="btn-group">
								<button type="button"
									class="btn btn-default btn-xs dropdown-toggle"
									data-toggle="dropdown" aria-expanded="false">
									Más <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Ver <i class="glyphicon glyphicon-eye-open"></i></a></li>
									<li><a href="#">Borrar <i class="glyphicon glyphicon-trash"></i></a></li>
								</ul>
							</div></td>
						<td>Perico</td>
						<td>Dato 1 de Perico</td>
						<td>Dato 2 de Perico</td>
						<td>Dato 3 de Perico</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="panel-footer">
			<div class="alignleft">
				Mostrar <select class="form-control">
					<option>10</option>
					<option>25</option>
					<option>50</option>
					<option>100</option>
				</select>entradas por página
			</div>
			<div class="alignright">
				<ul class="pagination">
					<li><a href="#"><<</a></li>
					<li><a href="#"><</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">></a></li>
					<li><a href="#">>></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>


<div class="panel container">
	<div class="panel-heading-custom" role="tab" id="headUser">
		<div class="panel-title overflow">
			<h4 class="alignleft">Usuarios</h4>
			<a data-toggle="collapse" href="#crudUser" aria-expanded="true"
				class="alignright"> <span class="glyphicon glyphicon-resize-full"
				aria-hidden="true"></span>
			</a>
		</div>
	</div>
	<div id="crudUser" class="panel-collapse collapse" role="tabpanel"
		aria-labelledby="headUser" aria-expanded="true">
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Acciones</th>
						<th>Nombre</th>
						<th>Dato 1</th>
						<th>Dato 2</th>
						<th>Dato 3</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="checkbox">
							<button class="btn btn-xs btn-danger">
								<i class="glyphicon glyphicon-trash"></i> Borrar
							</button></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por nombre" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
					</tr>
					<tr>
						<td><input type="checkbox">
							<button class="btn btn-default btn-xs">
								Editar<i class="glyphicon glyphicon-pencil"></i>
							</button>

							<div class="btn-group">
								<button type="button"
									class="btn btn-default btn-xs dropdown-toggle"
									data-toggle="dropdown" aria-expanded="false">
									Más <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Ver <i class="glyphicon glyphicon-eye-open"></i></a></li>
									<li><a href="#">Borrar <i class="glyphicon glyphicon-trash"></i></a></li>
								</ul>
							</div></td>
						<td>Perico</td>
						<td>Dato 1 de Perico</td>
						<td>Dato 2 de Perico</td>
						<td>Dato 3 de Perico</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="panel-footer">
			<div class="alignleft">
				Mostrar <select class="form-control">
					<option>10</option>
					<option>25</option>
					<option>50</option>
					<option>100</option>
				</select>entradas por página
			</div>
			<div class="alignright">
				<ul class="pagination">
					<li><a href="#"><<</a></li>
					<li><a href="#"><</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">></a></li>
					<li><a href="#">>></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>


<div class="panel container">
	<div class="panel-heading-custom" role="tab" id="headUserRole">
		<div class="panel-title overflow">
			<h4 class="alignleft">Roles de usuario</h4>
			<a data-toggle="collapse" href="#crudUserRole" aria-expanded="true"
				class="alignright"> <span class="glyphicon glyphicon-resize-full"
				aria-hidden="true"></span>
			</a>
		</div>
	</div>
	<div id="crudUserRole" class="panel-collapse collapse" role="tabpanel"
		aria-labelledby="headUserRole" aria-expanded="true">
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Acciones</th>
						<th>Nombre</th>
						<th>Dato 1</th>
						<th>Dato 2</th>
						<th>Dato 3</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="checkbox">
							<button class="btn btn-xs btn-danger">
								<i class="glyphicon glyphicon-trash"></i> Borrar
							</button></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por nombre" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
					</tr>
					<tr>
						<td><input type="checkbox">
							<button class="btn btn-default btn-xs">
								Editar<i class="glyphicon glyphicon-pencil"></i>
							</button>

							<div class="btn-group">
								<button type="button"
									class="btn btn-default btn-xs dropdown-toggle"
									data-toggle="dropdown" aria-expanded="false">
									Más <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Ver <i class="glyphicon glyphicon-eye-open"></i></a></li>
									<li><a href="#">Borrar <i class="glyphicon glyphicon-trash"></i></a></li>
								</ul>
							</div></td>
						<td>Perico</td>
						<td>Dato 1 de Perico</td>
						<td>Dato 2 de Perico</td>
						<td>Dato 3 de Perico</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="panel-footer">
			<div class="alignleft">
				Mostrar <select class="form-control">
					<option>10</option>
					<option>25</option>
					<option>50</option>
					<option>100</option>
				</select>entradas por página
			</div>
			<div class="alignright">
				<ul class="pagination">
					<li><a href="#"><<</a></li>
					<li><a href="#"><</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">></a></li>
					<li><a href="#">>></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>


<div class="panel container">
	<div class="panel-heading-custom" role="tab" id="headUserStatus">
		<div class="panel-title overflow">
			<h4 class="alignleft">Estado de usuario</h4>
			<a data-toggle="collapse" href="#crudUserStatus" aria-expanded="true"
				class="alignright"> <span class="glyphicon glyphicon-resize-full"
				aria-hidden="true"></span>
			</a>
		</div>
	</div>
	<div id="crudUserStatus" class="panel-collapse collapse"
		role="tabpanel" aria-labelledby="headUserStatus" aria-expanded="true">
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Acciones</th>
						<th>Nombre</th>
						<th>Dato 1</th>
						<th>Dato 2</th>
						<th>Dato 3</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="checkbox">
							<button class="btn btn-xs btn-danger">
								<i class="glyphicon glyphicon-trash"></i> Borrar
							</button></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por nombre" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
					</tr>
					<tr>
						<td><input type="checkbox">
							<button class="btn btn-default btn-xs">
								Editar<i class="glyphicon glyphicon-pencil"></i>
							</button>

							<div class="btn-group">
								<button type="button"
									class="btn btn-default btn-xs dropdown-toggle"
									data-toggle="dropdown" aria-expanded="false">
									Más <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Ver <i class="glyphicon glyphicon-eye-open"></i></a></li>
									<li><a href="#">Borrar <i class="glyphicon glyphicon-trash"></i></a></li>
								</ul>
							</div></td>
						<td>Perico</td>
						<td>Dato 1 de Perico</td>
						<td>Dato 2 de Perico</td>
						<td>Dato 3 de Perico</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="panel-footer">
			<div class="alignleft">
				Mostrar <select class="form-control">
					<option>10</option>
					<option>25</option>
					<option>50</option>
					<option>100</option>
				</select>entradas por página
			</div>
			<div class="alignright">
				<ul class="pagination">
					<li><a href="#"><<</a></li>
					<li><a href="#"><</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">></a></li>
					<li><a href="#">>></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>


<div class="panel container">
	<div class="panel-heading-custom" role="tab" id="headValuation">
		<div class="panel-title overflow">
			<h4 class="alignleft">Puntuaciones</h4>
			<a data-toggle="collapse" href="#crudValuation" aria-expanded="true"
				class="alignright"> <span class="glyphicon glyphicon-resize-full"
				aria-hidden="true"></span>
			</a>
		</div>
	</div>
	<div id="crudValuation" class="panel-collapse collapse" role="tabpanel"
		aria-labelledby="headValuation" aria-expanded="true">
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Acciones</th>
						<th>Nombre</th>
						<th>Dato 1</th>
						<th>Dato 2</th>
						<th>Dato 3</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="checkbox">
							<button class="btn btn-xs btn-danger">
								<i class="glyphicon glyphicon-trash"></i> Borrar
							</button></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por nombre" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
						<td><input type="text" class="form-control"
							placeholder="Buscar por x" /></td>
					</tr>
					<tr>
						<td><input type="checkbox">
							<button class="btn btn-default btn-xs">
								Editar<i class="glyphicon glyphicon-pencil"></i>
							</button>

							<div class="btn-group">
								<button type="button"
									class="btn btn-default btn-xs dropdown-toggle"
									data-toggle="dropdown" aria-expanded="false">
									Más <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Ver <i class="glyphicon glyphicon-eye-open"></i></a></li>
									<li><a href="#">Borrar <i class="glyphicon glyphicon-trash"></i></a></li>
								</ul>
							</div></td>
						<td>Perico</td>
						<td>Dato 1 de Perico</td>
						<td>Dato 2 de Perico</td>
						<td>Dato 3 de Perico</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="panel-footer">
			<div class="alignleft">
				Mostrar <select class="form-control">
					<option>10</option>
					<option>25</option>
					<option>50</option>
					<option>100</option>
				</select>entradas por página
			</div>
			<div class="alignright">
				<ul class="pagination">
					<li><a href="#"><<</a></li>
					<li><a href="#"><</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">></a></li>
					<li><a href="#">>></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
