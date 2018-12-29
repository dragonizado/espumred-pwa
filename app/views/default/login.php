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

	if(typeof(Storage) !== "undefined"){
		if('token' in localStorage && localStorage.getItem('token') != 'undefined'){
			let token = localStorage.getItem('token'),
			username = localStorage.getItem('userName');
var x = document.cookie
			console.log(x)
			// redirectToHome()
			// loginToken(username,token)	
			
		}
	}else{
		console.log("the browser does not support local storage.")
	}


	const login_form = document.querySelector('form');
	login_form.addEventListener('submit',(e)=>{
		e.preventDefault();
		let data = new FormData(login_form), xhttp = new XMLHttpRequest();

		data.append('btn_login',true)
		data.append('ajax',true)

		xhttp.onreadystatechange = function(){

			if(this.readyState == 4 && this.status == 0){
				alert("No se puede realizar la solicitud al servidor porque no hay internet")
			}

			if(this.readyState == 4 && this.status == 200){
				let data = JSON.parse(this.response)
				localStorage.setItem('token',data.token)
				localStorage.setItem('userName',data.user)
				redirectToHome()
			}
		};

		xhttp.open('post','./?url=default/login',true)
		xhttp.send(data)
	});

	function redirectToHome(){
		location.href = './?url=default/index'
		// console.log('redireccionar al index')

	}

	// function loginToken(user,token){
	// 	let xhttp = new XMLHttpRequest()
	// 	let data = new FormData()
	// 	data.append('ajax',true)
	// 	data.append('token',token)
	// 	data.append('username',user)

	// 	xhttp.open('post','./?url=default/loginToken',true);
	// 	xhttp.onreadystatechange = function(){
	// 		if(this.readyState == 4 && this.status == 0){
	// 			redirectToHome()
	// 		}
	// 		if(this.readyState == 4 && this.status == 200){
	// 			let data = JSON.parse(this.response)
	// 			if(data.islogin == true){
	// 				// redirectToHome()
	// 			} 
	// 		}
	// 	}
	// 	xhttp.send(data)
	// }
</script>

