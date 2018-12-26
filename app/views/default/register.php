<div class="row justify-content-center mt-5">
	<div class="col-md-4">
		<div class="card">
			<div class="card-header">
				<h3>Registrarse</h3>
			</div>
			<form method="post" action="<?=$this->createUrl('default/store');?>" class="card-body">
				<div class="form-group">
					<input type="text" name="username" placeholder="Nombre de usuario" class="form-control" >
				</div>
				<div class="form-group">
					<input type="email" name="email" placeholder="Correo electronico" class="form-control" >
				</div>
				<div class="form-group">
					<input type="password" name="password" placeholder="Contraseña" class="form-control">
				</div>
				
				<div class="form-group">
					<button class="btn btn-primary btn-block" name="btn_register">Registrar</button>
				</div>
				<div class="form-group">
					<a href="<?=$this->createUrl('default/login');?>" class="btn btn-success btn-block">Iniciar sesión</a>
				</div>
			</form>
		</div>
	</div>
</div>

