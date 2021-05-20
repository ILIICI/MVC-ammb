<?php

function loader($controller){
	
	$controller_path = CONTROLLER.$controller."Controller.php";
	
	try{
	if(file_exists($controller_path)){
		require_once ($controller_path);
	}else{
		throw new Exception("Couldn't load " . $controller);
		
	}
	}catch(Exception $e){
	echo 'Message: ' .$e->getMessage();
	}
}

spl_autoload_register('loader');
?>