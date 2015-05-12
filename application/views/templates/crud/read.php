<div class="container gc-container">
	<div class="success-message hidden"></div>

	<div class="row">
		<div class="col-md-12 table-section">
			<div class="table-label">
				<div class="floatL l5">Libros</div>
				<div class="floatR r5 minimize-maximize-container minimize-maximize">
					<i class="fa fa-caret-up"></i>
				</div>
				<div class="floatR r5 gc-full-width">
					<i class="fa fa-expand"></i>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table-container">
				<form action="/demo/bootstrap_theme" method="post"
					autocomplete="off" id="gcrud-search-form" accept-charset="utf-8">
					<div class="header-tools">
						<div class="floatL t5">
							<a class="btn btn-default" href="/demo/bootstrap_theme/add"><i
								class="fa fa-plus"></i> &nbsp; Añadir libro</a>
						</div>
						<div class="floatR">
							<a class="btn btn-default t5 gc-export"
								data-url="/demo/bootstrap_theme/export"> <i
								class="fa fa-cloud-download floatL t3"></i> <span
								class="hidden-xs floatL l5"> Export </span>
								<div class="clear"></div>
							</a> <a class="btn btn-default t5 gc-print"
								data-url="/demo/bootstrap_theme/print"> <i
								class="fa fa-print floatL t3"></i> <span
								class="hidden-xs floatL l5"> Print </span>
								<div class="clear"></div>
							</a> <a class="btn btn-primary search-button t5"> <i
								class="fa fa-search"></i> <input type="text" name="search"
								class="search-input">
							</a>
						</div>
						<div class="clear"></div>
					</div>
					<!-- Aquí la tabla para rellenar -->
					<table class="table table-bordered grocery-crud-table table-hover">
						<thead>
							
						</thead>
						<tbody>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="9">
									<!-- Muestra 10, 25, 50 o 100 entradas-->
									<div class="floatL t20 l5">
										<div class="floatL t10">Show</div>
										<div class="floatL r5 l5 t3">
											<select name="per_page" class="per_page form-control">
												<option value="10" selected="selected">10&nbsp;&nbsp;</option>
												<option value="25">25&nbsp;&nbsp;</option>
												<option value="50">50&nbsp;&nbsp;</option>
												<option value="100">100&nbsp;&nbsp;</option>
											</select>
										</div>
										<div class="floatL t10">entries</div>
										<div class="clear"></div>
									</div>
									
									<!-- Botones de siguiente, anterior... -->
									<div class="floatR r5">

										<ul class="pagination">
											<li class="disabled paging-first"><a href="#"><i
													class="fa fa-step-backward"></i></a></li>
											<li class="prev disabled paging-previous"><a href="#"><i
													class="fa fa-chevron-left"></i></a></li>
											<li><span class="page-number-input-container"> <input
													type="number" value="1"
													class="form-control page-number-input">
											</span></li>
											<li class="next paging-next"><a href="#"><i
													class="fa fa-chevron-right"></i></a></li>
											<li class="paging-last"><a href="#"><i
													class="fa fa-step-forward"></i></a></li>
										</ul>

										<input type="hidden" name="page_number"
											class="page-number-hidden" value="1">

									</div>

									<!-- Mostrando del 1 al 10 de 100 resultados (Por ejemplo) -->
									<div class="floatR r10 t30">
										Displaying <span class="paging-starts">1</span> to <span
											class="paging-ends">10</span> of <span
											class="current-total-results">122</span> items <span
											class="full-total-container hidden"> (filtered from <span
											class="full-total">122</span> total entries)
										</span>
									</div>

									<div class="clear"></div>
								</td>
							</tr>
						</tfoot>
					</table>
				</form>
			</div>
		</div>

		<!-- Delete confirmation dialog -->
		<div class="delete-confirmation modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"
							aria-hidden="true">×</button>
						<h4 class="modal-title">Delete</h4>
					</div>
					<div class="modal-body">
						<p>Are you sure that you want to delete this record?</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<button type="button"
							class="btn btn-danger delete-confirmation-button">Delete</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End of Delete confirmation dialog -->

		<!-- Delete Multiple confirmation dialog -->
		<div class="delete-multiple-confirmation modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"
							aria-hidden="true">×</button>
						<h4 class="modal-title">Delete</h4>
					</div>
					<div class="modal-body">
						<p>Are you sure that you want to delete this record?</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Cancel</button>
						<button type="button"
							class="btn btn-danger delete-multiple-confirmation-button"
							data-target="/demo/bootstrap_theme/delete_multiple">Delete</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>