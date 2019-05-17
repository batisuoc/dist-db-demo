<?php

require_once 'Database.php';

class Lop extends Database
{
	function __construct($macs)
	{
		parent::__construct($macs);
	}

	function getListLop()
	{
		$sql = "SELECT MALOP, TENLOP FROM Lop";
		$stmt = sqlsrv_query($this->db, $sql);
		if ($stmt == false) {
			die( print_r( sqlsrv_errors(), true) );
		}
		return $stmt;
	}
}

?>