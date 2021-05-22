<?php
require_once (CORE.'db.php');

abstract class Model extends Db
{

	abstract function getData();
}
?>