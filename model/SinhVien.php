<?php

require_once 'Database.php';

class SinhVien extends Database
{
	function __construct($macs)
	{
		parent::__construct($macs);
	}

	function insertSinhVien($arr_info)
	{
		$sql = "INSERT INTO SinhVien(HO, TEN, NGAYSINH, DIACHI, MALOP) 
		VALUES (N'$arr_info['lastname']', N'$arr_info['firstname']', '$arr_info['dob']', N'$arr_info['address']', '$arr_info['malop']')";
		$stmt = sqlsrv_query($this->db, $sql);
		if ($stmt == false) {
			die( print_r( sqlsrv_errors(), true) );
		}
		return $stmt;
	}

	function getSV_ID($ho, $ten)
	{
		$sql = "SELECT MASV
				FROM SinhVien
				WHERE HO = '$ho' AND TEN = '$ten'";
		$stmt = sqlsrv_query($this->db, $sql);
		if ($stmt == false) {
			die( print_r( sqlsrv_errors(), true) );
		}
		return $stmt;
	}
}

?>