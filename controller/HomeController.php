<?php
require_once(CONTROLLER.'Controller.php');
/**
 * 
 */
class HomeController extends Controller
{
	
	function __construct()
	{
		# code...
	}
	public function Index(){
		
		$this->render('HomeView');
	}
	public function Test(){
		echo "Hello Test";
	}
	public function unu(){
		$this->retriveData();
	}
}

?>