<?php

class View
{
	var $headerParameters;
	var $bodyParameters;
	var $footerParameters;
	function __construct($fileNameView,$bodyParameters=[]){

		$this->render($fileNameView,$bodyParameters);
	}

	public function render ($fileNameView,$bodyParameters=[]){
		$this->header();
		$this->body($fileNameView,$bodyParameters);
		$this->footer();
	}
	private function header(){
		if (file_exists(VIEW.'layout'.DIRECTORY_SEPARATOR.'Header.php')) {
			require_once (VIEW.'layout'.DIRECTORY_SEPARATOR.'Header.php');
			//return $this->headerParameters;
		}else{
			echo "View  Header doesn't exists";
		}
	}
	private function body($fileName,$bodyParameters = []){
		if (file_exists(VIEW.$fileName.'.php')) {
			require_once (VIEW.$fileName.'.php');
			return $this->bodyParameters;
		}else{
			echo "View  render() doesn't exists";
		}
		
	}
	private function footer(){
		if (file_exists(VIEW.'layout'.DIRECTORY_SEPARATOR.'Footer.php')) {
			require_once (VIEW.'layout'.DIRECTORY_SEPARATOR.'Footer.php');
			//return $this->footerParameters;
		}else{
			echo "View  Footer doesn't exists";
		}
	}

}
?>