	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="<?=$this->asset('js/scripts.js')?>"></script>
	<!-- Compiled and minified JavaScript -->
	<script>
		document.addEventListener('DOMContentLoaded', function() {

			M.AutoInit();
			// let elemsSidenav = document.querySelectorAll('.sidenav');
			// let instancesOfSidenav = M.Sidenav.init(elemsSidenav);
			
			// let elemsTabs = document.querySelectorAll('.tabs');
			// let instancesOfTabs = M.Tabs.init(elemsTabs);

			// let elemsDropdowns = document.querySelectorAll('.dropdown-trigger');
			// let instancesOfDropdowns = M.Dropdown.init(elemsDropdowns);
	});
	</script>
	<script>
		function logout(){
			let xhttp = new XMLHttpRequest();
			let data = new FormData();
			data.append('btn_logout',true)
			data.append('ajax',true)
			xhttp.open('post','./?url=default/logout',true)
			xhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					// dToken()
					redirectToHome()
				}
			}
			xhttp.send(data)
		}

		function redirectToHome(){
			location.href = './?url=default/login'
		}
</script>
</body>
</html>