<nav>
	<div class="nav-wrapper">
		<a href="#!" class="brand-logo"><?=APPNAME?></a>
		<a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		<ul class="right">
			<li><a href="#"><i class="material-icons right">more_vert</i></a></li>
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

<header>
		
</header>
<div class="container">

<div class="card horizontal">
	<div class="card-stacked">
		<div class="card-content">
				<span class="card-title" >Pedidos</span>
			<div class="d-flex">
				<p style="padding-right:8px;">Administrar los pedido realizados.</p><img src="<?=$this->asset('img/icon_96x96.png');?>" class="img-card-logo" width="96px" height="96px">
			</div>
	</div>
	<div class="card-action">
		<a href="<?=$this->createUrl('pedidos/create');?>">Ir a pedidos</a>
	</div>
	</div>
</div>


</div>

