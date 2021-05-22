<?php
require_once (VIEW.'View.php');

class Controller{

	public function render($ViewFileName,$headerParameters=null,$bodyParameters=null,$footerParameters=null){
		$view = new View($ViewFileName,$headerParameters,$bodyParameters,$footerParameters);
	}

	public function sqlQuery($model,$function){
		$objModel = new $model;
		return $objModel->$function();
	}

}
?>