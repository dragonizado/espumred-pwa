<nav class="nav-extended">
	<div class="nav-wrapper">
		<a href="#!" class="brand-logo"><?=APPNAME?></a>
		<a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		<ul class="right">
			<li><a href="#"><i class="material-icons right">more_vert</i></a></li>
		</ul>
	</div>
	<div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a class="active" href="#test1">Crear - enviar</a></li>
        <li class="tab"><a href="#test2">Aceptados</a></li>
        <li class="tab"><a href="#test3">Rechazados</a></li>
      </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-menu">
	<li><a href="<?=$this->createUrl('/');?>">Inicio</a></li>
	<li><a href="<?=$this->createUrl('pedidos/create');?>">Pedido</a></li>
	<form method="post" action="<?=$this->createUrl('default/logout');?>" class="">
			<input type="submit" class="btn btn-danger btn-block" name="btn_logout" value="Cerrar sesión">
	</form>
</ul>


<div id="test1" class="col s12" >Formulario para crear pedidos</div>
<div id="test2" class="col s12" style="display: none;">Mostrar los pedidos aceptados</div>
<div id="test3" class="col s12" style="display: none;">Mostrar los pedidos rechazados</div>

<!-- <div class="row mt-5">
	<div class=" col-md-12 mt-5">
		<div class="card">
			<div class="card-header">
				<h3>Crear pedido</h3>
			</div>
			<form class="card-body" action="">
				<div class="form-group">
					<label for="">Producto:</label>
					<select name="" id="" class="form-control">
						<option value="" disabled selected>Seleccione una opcion</option>
						<option value="">Emperador plus</option>
						<option value="">Lamina extra</option>
						<option value="">Modulo D20</option>
						<option value="">Colchoneta america 100x190</option>
					</select> -->
					<!-- <input type="text" class="form-control" required> -->
				<!-- </div>
				<div class="form-group">
					<label for="">Cantidad:</label>
					<input type="number" class="form-control" required>
				</div>
				<div class="form-row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="button" value="Cotizar o Previsualizar" class="btn btn-info btn-block">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Enviar</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div> -->