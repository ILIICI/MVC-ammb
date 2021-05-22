<?php
require_once(MODEL.'Model.php');
/**
 * 
 */
class NewsModel extends Model
{
	
	public function getData(){
		$query = "SELECT * FROM navbar"  ; 
		$stmt = $this->connect()->query($query);
		while ($row = $stmt->fetchALL()) {
			return $row;
		}
	}

		public function getText(){
		$query = "SELECT * FROM learn"  ; 
		$stmt = $this->connect()->query($query);
		while ($row = $stmt->fetchALL()) {
			return $row;
		}
	}
}

?>