<?php

require_once '../libs/database.php';

class Khoa
{
	private $base_id;
	function __construct($baseid)
	{
		$this->base_id = $baseid;
	}

	function getListKhoa()
	{
		$sql = "SELECT MAKH, TENKH FROM Khoa";
		
	}
}

?>