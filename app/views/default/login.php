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

<script>

	if(comprobarCookie('userName') && comprobarCookie('token')){
		redirectToHome();
	}

	const login_form = document.querySelector('form');
	login_form.addEventListener('submit',(e)=>{
		e.preventDefault();
		let data = new FormData(login_form), xhttp = new XMLHttpRequest();

		data.append('btn_login',true)
		data.append('ajax',true)

		xhttp.onreadystatechange = function(){

			// if(this.readyState == 4 && this.status == 0){
			// 	alert("No se puede realizar la solicitud al servidor porque no hay internet")
			// }

			if(this.readyState == 4 && this.status == 200){
				let data = JSON.parse(this.response)
				if(data.correctLogin == true){
					redirectToHome()
				}else{
					 M.toast({html: data.msn})
				}

			}
		};

		xhttp.open('post','./?url=default/logincheck',true)
		xhttp.send(data)
	});

	function redirectToHome(){
		location.href = './?url=default/index'
		// console.log('redireccionar al index')

	}

	function obtenerCookie(clave) {
		var name = clave + "=";
		var ca = document.cookie.split(';');
		for(var i=0; i<ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1);
			if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
		}
		return "";
	}

	function comprobarCookie(clave) {
		var clave = obtenerCookie(clave);
		if (clave!="") {
			return true
		}else{
			return false
		}
	}

</script>

