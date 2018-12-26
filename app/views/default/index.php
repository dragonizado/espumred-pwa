<div class="row mt-5">
	<div class="col-md-4">
		<div class="card">
			<div class="card-body">
			    <h5 class="card-title">Crear Pedido</h5>
			    <p class="card-text">Formulario para crear un pedido, este pedido es revisado por un asesor antes de ser enviado a produccion.</p>
			    <a href="<?=$this->createUrl('pedidos/create');?>" class="btn btn-primary">Crear pedido</a>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card">
			<div class="card-body">
			    <h5 class="card-title">Pedidos aceptados</h5>
			    <p class="card-text">Pagina para ver en que estado se encuentran los pedidos que han aceptado el asesor de ventas.</p>
			    <a href="<?=$this->createUrl('pedidos/granted');?>" class="btn btn-info">Ver pedidos</a>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card">
			<div class="card-body">
			    <h5 class="card-title">Pedido rechazados</h5>
			    <p class="card-text">Pagina para realizar seguimiento de los pedidos que fueron rechazados por el asesor o por un paso posterior.</p>
			    <a href="<?=$this->createUrl('pedidos/rejected');?>" class="btn btn-danger">Ver pedidos</a>
			</div>
		</div>
	</div>
</div>
