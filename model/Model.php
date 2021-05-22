<?php
require_once (CORE.'db.php');

abstract class Model extends Db
{
	
	function __construct(){
		
	}


	//public function getData($columnName,$tableName){
	//	$query = "SELECT * FROM $tableName"  ; 
	//	$stmt = $this->connect()->query($query);
	//	while ($row = $stmt->fetchALL()) {
	//		return $row;
	//	}
	//}
	public function insertData(){

	}
	public function editData(){

	}
	public function deleteData(){

	}
}
?>