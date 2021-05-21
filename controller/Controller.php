<?php
require_once (VIEW.'View.php');
require_once (MODEL.'Model.php');
class Controller{


	function __construct(){
		
		
	}
	public function render($fileName){

		$view = new View($fileName);
		return $view;
		
	}
	public function retriveData(){
		$model = new Model();
		return $model->getData("name","learn","1");
		
	}

}
?>