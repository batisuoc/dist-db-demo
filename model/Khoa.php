<?php

require_once 'Database.php';

class Khoa extends Database
{
	function __construct($macs)
	{
		parent::__construct($macs);
	}

	function getListKhoa()
	{
		$sql = "SELECT MAKH, TENKH FROM Khoa";
		$stmt = sqlsrv_query($this->db, $sql);
		if ($stmt == false) {
			die( print_r( sqlsrv_errors(), true) );
		}
		return $stmt;
	}
}

?>