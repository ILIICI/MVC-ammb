<?php
require_once(CONTROLLER.'Controller.php');

class HomeController extends Controller
{
	public function Index(){
		
		$this->render(
			'HomeView',
			$this->sqlQuery('HomeModel','getData')
		);

	}
	public function Test(){
		echo "Hello Test";
		print_r($this->modelName);
	}
	public function unu(){
		
	}
}

?>