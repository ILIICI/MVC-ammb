<?php
require_once (VIEW.'View.php');
require_once (MODEL.'Model.php');
class Controller{


	function __construct(){
		
		
	}
	public function render($fileName,$headerParameters='',$bodyParameters=[],$footerParameters=[]){

		$view = new View($fileName,$headerParameters,$bodyParameters,$footerParameters);
		return $view;
		
	}
	public function sqlQuery(){
		$model = new Model();
		return $model->getData("name","learn");
		
	}

}
?>