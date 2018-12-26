<?php 
/**
 * Dragonizado 2018
 */
class pedidosController extends Controller
{
	
	function __construct()
	{
		$this->isLogged();
	}

	public function create(){
		$this->view('pedidos/create');
	}

	public function granted(){
		echo "function to show granted";
	}

	public function rejected(){
		echo "function to reject the order";
	}
}

 ?>