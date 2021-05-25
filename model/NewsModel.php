<?php
require_once(MODEL.'Model.php');
/**
 * 
 */
class NewsModel extends Model
{
	
	public function getData(){
		$query = "SELECT * FROM news"  ; 
		$stmt = $this->connect()->query($query);
		while ($row = $stmt->fetch( PDO::FETCH_ASSOC )) {
			return $row;
		}
	}

		public function getText($param=''){
		$query = "SELECT * FROM news WHERE id=$param"  ; 
		$stmt = $this->connect()->query($query);
		while ($row = $stmt->fetchALL()) {
			return $row;
		}
	}
}

?>