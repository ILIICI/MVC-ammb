<?php
define('DS',dirname(__DIR__).DIRECTORY_SEPARATOR);
define('CORE',DS.'core'.DIRECTORY_SEPARATOR);
define('CONTROLLER',DS.'controller'.DIRECTORY_SEPARATOR);
define('MODEL',DS.'model'.DIRECTORY_SEPARATOR);
define('VIEW',DS.'view'.DIRECTORY_SEPARATOR);
define('PUBLIC',DS.'public'.DIRECTORY_SEPARATOR);


require_once(CORE.'application.php');


new Application;

?>