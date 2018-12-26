<div class="row justify-content-center mt-5">
	<div class="col-md-4">
		<div class="card">
			<div class="card-header">
				<h3>Iniciar sesión</h3>
			</div>
			<form method="post" action="<?=$this->createUrl('default/login');?>" class="card-body">
				<div class="form-group">
					<input type="text" name="username" placeholder="Nombre de usuario" class="form-control" >
				</div>
				<div class="form-group">
					<input type="password" name="password" placeholder="Contraseña" class="form-control">
				</div>
				<div class="form-group">
					<button class="btn btn-success btn-block" name="btn_login">Iniciar</button>
				</div>
				<div class="form-group">
					<a href="<?=$this->createUrl('default/register');?>" class="btn btn-primary btn-block">Registrarse</a>
				</div>
			</form>
		</div>
	</div>
</div>
