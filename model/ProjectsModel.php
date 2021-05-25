<?php
require_once(MODEL.'Model.php');
/**
 * 
 */
class ProjectsModel extends Model
{
	
	public function getData(){
		$query = "SELECT * FROM projects"  ; 
		$stmt = $this->connect()->query($query);
		while ($row = $stmt->fetch()) {
			return $row;
		}
	}
}

?>