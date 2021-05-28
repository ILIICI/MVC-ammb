<?php
require_once(MODEL.'Model.php');
/**
 * 
 */
class AdminModel extends Model
{
	public function getData(){
		return null;
	}	
	public function getAuth($var){
		$query = "SELECT * FROM auth WHERE login='$var[0]' and password='$var[1]'";
		$stmt = $this->connect()->query($query);
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		if(!empty($row)){
			return true;
		}else {
			return false;
		}
	}
}

?>