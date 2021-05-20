<?php

class View
{
	
	function __construct($fileNameView,$headerParameters=[],$bodyParameters=[],$footerParameters=[]){
		$this->render($fileNameView,$headerParameters,$bodyParameters,$footerParameters);
	}

	public function render ($fileNameView,$headerParameters=[],$bodyParameters=[],$footerParameters=[]){
		$this->header($headerParameters);
		$this->body($fileNameView,$bodyParameters);
		$this->footer($footerParameters);
	}
	private function header($headerParameters =[]){
		if (file_exists(VIEW.'layout'.DIRECTORY_SEPARATOR.'Header.php')) {
			require_once (VIEW.'layout'.DIRECTORY_SEPARATOR.'Header.php');
			return $headerParameters;
		}else{
			echo "View  Header doesn't exists";
		}
	}
	private function body($fileName,$bodyParameters = []){
		if (file_exists(VIEW.$fileName.'.php')) {
			require_once (VIEW.$fileName.'.php');
			return $bodyParameters;
		}else{
			echo "View  render() doesn't exists";
		}
		
	}
	private function footer($footerParameters =[]){
		if (file_exists(VIEW.'layout'.DIRECTORY_SEPARATOR.'Footer.php')) {
			require_once (VIEW.'layout'.DIRECTORY_SEPARATOR.'Footer.php');
			return $footerParameters;
		}else{
			echo "View  Footer doesn't exists";
		}
	}

}
?>