<?php

require_once '../libs/database.php';

class Lop
{
	private $base_id;
	function __construct($baseid)
	{
		$this->base_id = $baseid;
	}

	function getListLop()
	{
		$sql = "SELECT MALOP, TENLOP FROM Lop";
		
	}
}

?>