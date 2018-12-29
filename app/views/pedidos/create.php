<nav class="nav-extended">
	<div class="nav-wrapper">
		<a href="#!" class="brand-logo"><?=APPNAME?></a>
		<a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		<ul class="right">
			<li><a href="#" class="dropdown-trigger" data-target="menu-dropdown"><i class="material-icons right">more_vert</i></a></li>
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
<ul id="menu-dropdown" class="dropdown-content">
	<li><a href="#" onclick="logout();">Salir</a></li>
</ul>
<ul class="sidenav" id="mobile-menu">
	<li><a href="<?=$this->createUrl('/');?>">Inicio</a></li>
	<li class="active"><a href="<?=$this->createUrl('pedidos/create');?>">Pedido</a></li>
	<li><a href="#" onclick="logout();">Salir</a></li>
</ul>

<div class="container">
	<div id="test1" class="col s12" >
		<span class="container-title" >Pedidos</span>
		<form action="">
				<div class="form-group">
					<div class="input-field col s12">
						<select name="" id="" class="form-control">
							<option value="" disabled selected>Seleccione una opcion</option>
							<option value="">Emperador plus</option>
							<option value="">Lamina extra</option>
							<option value="">Modulo D20</option>
							<option value="">Colchoneta america 100x190</option>
						</select> 
					</div>
				</div>
				<div class="form-group">
					<label for="">Cantidad:</label>
					<input type="number" class="form-control" required>
				</div>
				<div class="form-row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="button" value="Cotizar o Previsualizar" class="btn light-blue darken-1 btn-block">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<button type="submit" class="btn orange darken-3 btn-block">Enviar</button>
						</div>
					</div>
				</div>
			</form>
	</div>
</div>
<!-- aceptados -->
<div id="test2" class="col s12" style="display: none;">
	<ul class="collection">
    <li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">Pedido:</span>
      <p>#P80002445 <br>
         $ 1,200,000.00
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
	</li>
	
    <li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">Pedido:</span>
      <p>#P80002444 <br>
         $ 5,300,000.00 
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
	</li>
	
    <li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">Pedido:</span>
      <p>#P80002443 <br>
         $ 3,700,000.00
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
	</li>
	
    <li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">Pedido:</span>
      <p>#P80002441 <br>
         $ 7,000,000.00
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
  </ul>
</div>

<!-- Rechazados -->
<div id="test3" class="col s12" style="display: none;">
	<ul class="collection">
    <li class="collection-item avatar">
      <i class="material-icons circle red">insert_chart</i>
      <span class="title">Pedido:</span>
      <p>#P80002440 <br>
         $ 1,200,000.00
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">autorenew</i></a>
	</li>
	
    <li class="collection-item avatar">
      <i class="material-icons circle red">insert_chart</i>
      <span class="title">Pedido:</span>
      <p>#P80002439 <br>
         $ 5,300,000.00 
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">autorenew</i></a>
	</li>
  </ul>
</div>