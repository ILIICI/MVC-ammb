<?php
require_once(MODEL.'Model.php');
/**
 * 
 */
class HomeModel extends Model
{
	
	public function getData(){
		$query = "SELECT * FROM learn"  ; 
		$stmt = $this->connect()->query($query);
		while ($row = $stmt->fetchALL()) {
			return $row;
		}
	}
}

?>