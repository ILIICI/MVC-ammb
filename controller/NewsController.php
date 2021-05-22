<?php
require_once(CONTROLLER.'Controller.php');

class NewsController extends Controller
{
	public function Index(){
		
		$this->render(
			'NewsView',
			$this->sqlQuery('NewsModel','getData')
		);
	}

		public function Test(){
		
		$this->render(
			'NewsPostView',
			$this->sqlQuery('NewsModel','getText')
		);
	}

}

?>