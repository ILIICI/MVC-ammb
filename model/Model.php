<?php
require_once (CORE.'db.php');

class Model extends Db
{
	
	function __construct(){
		
	}


	public function getData($columnName,$tableName,$id){
		$query = "SELECT $columnName FROM $tableName WHERE id=$id"  ; 
		$stmt = $this->connect()->query($query);
		$row = $stmt->fetchAll();
		foreach ($row as $value) {
		echo $value[$columnName];
		}
		//while ($row = $stmt->fetch()){
		//	if($row != "NULL"){
		//		echo $row[$columnName] . "<br>";
		//	}
		//	
		//}
		//while () {
		//echo $row[$columnName];
		//}
	}
	public function insertData(){

	}
	public function editData(){

	}
	public function deleteData(){

	}
}
?>