<?php
require_once (CORE.'db.php');

class Model extends Db
{
	
	function __construct(){
		
	}


	public function getData($columnName,$tableName){
		$query = "SELECT * FROM $tableName"  ; 
		$stmt = $this->connect()->query($query);
		//$row = $stmt->fetchAll();
		//foreach ($row as $key => $value) {
		//	print_r($value);
		//echo $value[$columnName];
		
		while ($row = $stmt->fetchALL()) {
			return $row;
		}
	}
	public function insertData(){

	}
	public function editData(){

	}
	public function deleteData(){

	}
}
?>