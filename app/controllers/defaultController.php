<?php 
/**
 * Dragonizado
 */
class defaultController extends Controller
{
	
	function __construct()
	{
		# code...
	}

	public function login(){

		// var_dump($_POST['ajax']);

		// exit();
		if(isset($_POST['btn_login'])){
			$user = strtolower($_POST['username']);
			$pass = $_POST['password'];
			if($user == 'admin' && $pass == 'admin'){
				$this->loginUser($user);

				if(!isset($_POST['ajax'])){
					$this->redirect('default/');
				}else{
					$this->json_send(["token"=>$_SESSION['token'],"user"=>$user]);
				}
			}else{
				echo "Error en el login";
			}
		}
		$this->isLogged('default/index');
		$this->view('default/login',null,'login');	
	}

	// public function loginToken(){
	// 	if(isset($_POST['ajax']) && isset($_POST['token'])){
	// 		if($this->hasSession()){
	// 			if($_POST['token'] === $_SESSION['token']){
	// 				$this->json_send(['islogin'=>true]);
	// 			}else{
	// 				$this->json_send(['islogin'=>false]);
	// 			}
	// 		}else{
	// 			//si no tiene una sesion en el servidor se verifica un token
	// 			// que este en la bd con el que tiene el usuario
	// 			$token = '25f9e794323b453885f5181f1b624d0b';
	// 			if($_POST['token'] === $token){
	// 				$this->loginUser($_POST['username']);
	// 				$this->json_send(['islogin'=>true]);
	// 			}else{
	// 				$this->json_send(['islogin'=>false]);
	// 			}
	// 		}
	// 	}
	// }

	private function loginUser($user){
		if(!isset($_SESSION)){
			session_start();
		}
		$_SESSION['userName'] = $user; 
		$_SESSION['token'] = '25f9e794323b453885f5181f1b624d0b';

		setcookie('userName', $_SESSION['userName'], time () + 604800);
		setcookie('token', $_SESSION['token'], time () + 604800);
	}

	public function index(){
		$this->isLogged();
		$this->view('default/index');
	}

	public function register(){
		$this->isLogged('default/index');
		$this->view('default/register',null,'login');
	}

	public function logout(){
		if(isset($_POST['btn_logout'])){
			session_start();
			session_destroy();
			unset($_SESSION);
			if(!isset($_POST['ajax'])){
				$this->redirect('default/login');
			}else{
				$this->json_send([true]);
			}
		}else{
			$this->redirect('default/');
		}
	}
}

 ?>