<?php
require_once(MODEL.'Model.php');
/**
 * 
 */
class EventsModel extends Model
{
	
	public function getData(){
		$query = "SELECT * FROM events"  ; 
		$stmt = $this->connect()->query($query);
		while ($row = $stmt->fetch()) {
			return $row;
		}
	}
}

?>