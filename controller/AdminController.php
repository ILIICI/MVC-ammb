<?php
require_once(CONTROLLER.'Controller.php');

class AdminController extends Controller
{
	public function Index($var){
		
		$this->render(
			'AdminView',
			$this->sqlQuery('AdminModel','getData')
		);

	}
	public function auth($var){
		$var = $_POST;
		
		$validator = $this->sqlQuery('AdminModel','getAuth',array($var['login'],$var['password']));
		if($validator == true){
			session_start();
			$_SESSION[$var['login']];
			header('Location: http://www.google.com/');
		}else{
			echo "wrong password or login";
		}
		//reminder dont forget to decrypt/encrypt password 
	}
	public function test1($params){

		$validator = $this->sqlQuery('AdminModel','getAuth',array('aa','123'));
		

		if($validator == true ){
			echo "logged in";
		}
		//var_dump($this->sqlQuery('AdminModel','getAuth',array('aa','123')));

	}
}

?>