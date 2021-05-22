<?php
require_once(MODEL.'Model.php');
/**
 * 
 */
class ContactModel extends Model
{
	
	public function getData(){
		$query = "SELECT * FROM navbar"  ; 
		$stmt = $this->connect()->query($query);
		while ($row = $stmt->fetchALL()) {
			return $row;
		}
	}
}

?>