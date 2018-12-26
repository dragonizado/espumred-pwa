<?php 

/**
 * Dragonizado 2018
 */
class App
{
	private $folder_controllers = CONTROLLERS_FOLDER;
	private $default_c = CONTROLLER_DEFAULT;
	private $url_controller;
	private $url_method;
	private $url_parameters;

	function __construct()
	{

		$this->filter_url();

		if(!$this->url_controller){
			include APP.$this->folder_controllers.$this->default_c.'.php';
			$page = new $this->default_c();
			$page->index();
		}else{
			$this->url_controller = $this->url_controller.'Controller';
			if(file_exists(APP.$this->folder_controllers.$this->url_controller.'.php')){
				include APP.$this->folder_controllers.$this->url_controller.'.php';
				$this->url_controller = new $this->url_controller();
				if(method_exists($this->url_controller, $this->url_method)){
					if(!empty($this->url_parameters)){
						call_user_func_array(array($this->url_controller, $this->url_method), $this->url_parameters);
					}else{
						$this->url_controller->{$this->url_method}();
					}
				}else{
					if(strlen($this->url_method) == 0){
						$this->url_controller->index();
					}else{
						// echo "Se ha ingresado un controlador y un metodo pero el metodo no existe en ese controlador";
						header('location:'.URL.'public/?url=error');
					}
				}
			}else{
				// echo "se ha ingresado un metodo pero no existe ese archivo";
				header('location:'.URL.'public/?url=error');
			}
		}
	}
	
	private function filter_url(){
		if(isset($_GET['url'])){
			$url = $_GET['url'];
			$url = trim($url,'/');
			$url = filter_var($url,FILTER_SANITIZE_URL);
			$url = explode('/',$url);
			$temp_controller = explode('Controller',$url[0]);
			$this->url_controller = $temp_controller[0];
			$this->url_method = isset($url[1])?$url[1]:null;
			unset($url[0],$url[1]);
			$this->url_parameters = array_values($url);
		}

		if(DEBUG_MODE){
			echo 'Controller: '.$this->url_controller.'<br>';
			echo 'Method: '.$this->url_method.'<br>';
			echo 'Parametros: ';
			print_r($this->url_parameters);
			echo '<br>';

			exit("Aplicación terminado por modo de debug.");
		}
	}
}

 ?>