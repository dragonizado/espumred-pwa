<?php 
/**
 * Dragonizado
 */
class Controller 
{
	
	function __construct()
	{
		# code...
	}

	public function view($viewname,$parameters=null,$template='default'){
		
		if(!is_null($parameters) && is_array($parameters)){
			foreach ($parameters as $key => $parameter) {
				${$key} = $parameter; 
			}
		}

		include APP.'views/templates/'.$template.'/header.php';	
		include APP.'views/'.$viewname.'.php';	
		include APP.'views/templates/'.$template.'/footer.php';
	}

	public function asset($path){
		return URL.ASSETS_FOLDER.$path;
	}

	public function createUrl($path){
		return URL.'?url='.$path;
	}

	public function redirect($path,$parameters = null){
		$pr = null;
		if(!is_null($parameters)&& is_array($parameters)){
			$pr='/';
			foreach ($parameters as $parameter) {
				$pr .= $parameter.'/';
			}

		}
		header('location:'.$this->createUrl($path.$pr));
	}

	public function hasSession(){
		session_start();
		if(isset($_SESSION['userName'])){
			return true;
		}else{
			return false;
		}
	}

	public function isLogged($path=null){
		if($this->hasSession()){
			if(is_null($path)){
				return true;
			}else{
				$this->redirect($path);
			}
		}else{
			if(is_null($path)){
				session_destroy();
				unset($_SESSION);
				$this->redirect('default/login');
			}else{
				return false;
			}
		}
	}

	
}

 ?>