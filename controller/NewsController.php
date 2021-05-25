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

			public function vit($param=null){
			
			if($param = null){
			$this->render(
			'NewsPostView',
			$this->sqlQuery('NewsModel','getText')
		);
			}else{
			$this->render(
			'NewsPostView',
			$this->sqlQuery('NewsModel','getText'.$param[0])
		);
			}

	}

}

?> 