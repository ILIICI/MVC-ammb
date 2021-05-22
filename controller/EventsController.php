<?php
require_once(CONTROLLER.'Controller.php');

class EventsController extends Controller
{
	public function Index(){
		
		$this->render(
			'EventsView',
			$this->sqlQuery('EventsModel','getData')
		);

	}

}

?>