<?php
require_once(CONTROLLER.'Controller.php');

class ContactController extends Controller
{
	public function Index(){
		
		$this->render(
			'ContactView',
			$this->sqlQuery('ContactModel','getData')
		);

	}

}

?>