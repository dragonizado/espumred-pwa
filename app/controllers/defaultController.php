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
		if(isset($_POST['btn_login'])){
			$user = strtolower($_POST['username']);
			$pass = $_POST['password'];
			if($user == 'admin' && $pass == 'admin'){
				$this->loginUser($user);
				$this->redirect('default/');
			}else{
				echo "Error en el login";
			}
		}
		$this->isLogged('default/index');
		$this->view('default/login',null,'login');	
	}

	private function loginUser($user){
		session_start();
		$_SESSION['userName'] = $user; 
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
			$this->redirect('default/login');
		}else{
			$this->redirect('default/');
		}
	}
}

 ?>