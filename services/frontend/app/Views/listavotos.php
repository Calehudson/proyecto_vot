<?php echo $this->extend('layouts/default') ?>
        
<?php echo $this->section('content') ?>

<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
	<div class="container-fluid">
		<div class="row">	
			<div class="col-xl-12">
				<div class="card students-list"><br>
					<div class="card-body py-0">
						<div class="table-responsive">
							<table id="tablavotaciones" class="table display mb-4 dataTablesCard order-table card-table text-black application" id="application-tbl1">
								<thead>
									<tr>
										<th>Código</th>
										<th>Participante</th>
										<th>Número de IP</th>
										<th>Fecha</th>
										<th>Borrar</th>
									</tr>
								</thead>
								<tbody>
									
								</tbody>
							</table>
							<br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
<!--**********************************
    Content body end
***********************************-->
<?php echo $this->endSection() ?>