<div class="row center-align login-img">
	<img class="responsive-img" src="<?=$this->asset('img/icon_144x144.png');?>">
</div>

<div class="row">
	<form method="post" action="<?=$this->createUrl('default/login');?>" >
		<div class="form-group login-form input-field">
			<i class="material-icons prefix">account_circle</i>
			<input id="username" name="username" type="text" class="validate">
			<label for="username">Nombre de usuario</label>
		</div>

		<div class="form-group login-form input-field">
			<i class="material-icons prefix">lock</i>
			<input type="password" id="password" name="password"  class="validate">
			<label for="password">Contraseña</label>
		</div>

		<div class="form-group">
			<button class="btn btn-secondary btn-block" name="btn_login">Iniciar</button>
		</div>
	</form>
</div>

