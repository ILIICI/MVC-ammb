<?php
require_once (VIEW.'View.php');

class Controller{

	public function render($ViewFileName,$bodyParameters=null){
		$view = new View($ViewFileName,$bodyParameters);
	}

	public function sqlQuery($model,$function){
		$objModel = new $model;
		return $objModel->$function();
	}

}
?>