<?php

class Db
{
	private $localhost = "localhost";
	private $dbname = "ammb";
	private $user = "root";
	private $pass = "";	

	protected function connect(){
		$dsn = 'mysql:host=' . $this->localhost . ';dbname=' . $this->dbname;
		$pdo = new PDO($dsn,$this->user,$this->pass);

		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
		
		return $pdo;
	}
}

