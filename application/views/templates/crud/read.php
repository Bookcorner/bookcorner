
<div class="container panel" id="accordion">
	<div class="panel-header">
		<h3>Libros</h3>
	</div>
	
	<div class="col-xs-12">
		<div class="col-xs-2">
			<button class="btn btn-default">
				<i class="glyphicon glyphicon-plus"></i> Añadir libro
			</button>
		</div>
		<div class="col-xs-3 col-xs-offset-7">
			<button class="floatR btn btn-default">
				<i class="glyphicon glyphicon-export"></i> Exportar
			</button>
			<button class="floatR btn btn-default">
				<i class="glyphicon glyphicon-print"></i> Imprimir
			</button>
			<button class="floatR btn btn-primary">
				<i class="glyphicon glyphicon-search"></i>
			</button>
		</div>
	</div>
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
						<button class="btn btn-danger">
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
				<!-- El resto ya carga recorriendo lo que tenga que recorrer -->
			</tbody>
			<tfoot>
				<tr>
					<td>
					   <div>
							Mostrar <select class="form-control">
								<option>10</option>
								<option>25</option>
								<option>50</option>
								<option>100</option>
							</select>entradas por página
						</div>
				    </td>
				    <td></td>
				    <td></td>
				    <td>Mostrando x de n resultados</td>
				    <td></td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>

<div class="container panel">
	<div class="panel-header">
		<h3>Autores</h3>
		<hr />
	</div>
	<div class="col-xs-12">
		<div class="col-xs-2">
			<button class="btn btn-default">
				<i class="glyphicon glyphicon-plus"></i> Añadir autor
			</button>
		</div>
		<div class="col-xs-3 col-xs-offset-7">
			<button class="floatR btn btn-default">
				<i class="glyphicon glyphicon-export"></i> Exportar
			</button>
			<button class="floatR btn btn-default">
				<i class="glyphicon glyphicon-print"></i> Imprimir
			</button>
			<button class="floatR btn btn-primary">
				<i class="glyphicon glyphicon-search"></i>
			</button>
		</div>
	</div>
	<hr />
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
						<button class="btn btn-danger">
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
				<!-- El resto ya carga recorriendo lo que tenga que recorrer -->
			</tbody>
		</table>
	</div>
</div>