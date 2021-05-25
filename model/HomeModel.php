<?php
require_once(MODEL.'Model.php');
/**
 * 
 */
class HomeModel extends Model
{
	
	public function getData(){
		$query = "SELECT * FROM home"  ; 
		$stmt = $this->connect()->query($query);
		while ($row = $stmt->fetch()) {
			return $row;
		}
	}
}

?>