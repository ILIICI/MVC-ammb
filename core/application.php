<?php
require_once(CORE.'init.php');
require_once(CORE.'dispatcher.php');

class Application
{
	var $disp;
	var $cont;
	var $act;
	var $param =[];

	function __construct()
	{

		$this->disp = new Dispatcher;
		$this->cont = $this->disp->getControler();
		$this->act = $this->disp->getAction();
		$this->param = $this->disp->getParameters();

		loader($this->cont);

		$assingcont = $this->cont.'Controller';
		$this->cont = new $assingcont;
		if (method_exists($this->cont, $this->act)) {
			call_user_func_array(array($this->cont,$this->act), array($this->param));
		}else{
			call_user_func_array(array($this->cont,'Index'), array($this->param));
		}
		
	}
}


?>
