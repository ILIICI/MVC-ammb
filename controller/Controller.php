<?php
require_once (VIEW.'View.php');

class Controller{


	function __construct(){
		
		
	}
	public function render($fileName){

		$view = new View($fileName);
		return $view;
		
	}

}
?>