<?php
require_once (VIEW.'View.php');
//require_once (MODEL.'Model.php');
class Controller{


	//var $modelName;

	function __construct(){
		
	}

	public function render($ViewFileName,$headerParameters=null,$bodyParameters=null,$footerParameters=null){
		//$this->modelName =  $ModelFileName; 
		$view = new View($ViewFileName,$headerParameters,$bodyParameters,$footerParameters);
	}

	public function sqlQuery($model,$function){

		//$model = $this->modelName;
		$objModel = new $model;
		return $objModel->$function();
	}



}
?>