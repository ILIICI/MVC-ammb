<?php

function loader($controller){
	
	$controller_path = CONTROLLER.$controller."Controller.php";
	$model_path = MODEL.$controller."Model.php";
	
	try{
	if(file_exists($controller_path)){
		require_once ($controller_path);
		require_once ($model_path);
		
	}else{
		throw new Exception("Couldn't load " . $controller);
		
	}
	}catch(Exception $e){
	echo 'Message: ' .$e->getMessage();
	}
}

spl_autoload_register('loader');
?>