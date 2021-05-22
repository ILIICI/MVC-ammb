<?php


class Dispatcher{
	
	private $url;
	function __construct(){

	}

	public function requestURL(){
		$url = explode('/', ltrim($_SERVER['REQUEST_URI'],'/vito'));
		return $this->url = $url;
	}

	public function getControler(){
		$array = $this->requestURL();
		if(!empty($array[0]) && file_exists(CONTROLLER.$array[0].'Controller.php')){
			return ucfirst($array[0]);	
		}else{
			return 'Home';
		}
		
	}

	public function getAction(){
		$array = $this->requestURL();
		if(!empty($array[1])){
			return ucfirst($array[1]);	
		}else{
			return 'Index';
		}
		
	}

	public function getParameters(){
		$array = $this->requestURL();
		if(!empty(array_splice($array, 0,2))){
			return $array;	
		}else{
			return NULL;
		}
		
	}
}

?>