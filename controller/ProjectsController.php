<?php
require_once(CONTROLLER.'Controller.php');

class ProjectsController extends Controller
{
	public function Index(){
		
		$this->render(
			'ProjectsView',
			$this->sqlQuery('ProjectsModel','getData')
		);

	}

}

?>