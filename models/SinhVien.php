<?php

require_once '../libs/database.php';

class SinhVien
{
	private $base_id;

	function __construct($baseid)
	{
		$this->base_id = $baseid;
	}

	function insertSinhVien($arr_info)
	{
		$sql = "INSERT INTO SinhVien(HO, TEN, NGAYSINH, DIACHI, MALOP) 
		VALUES (N'$arr_info['lastname']', N'$arr_info['firstname']', '$arr_info['dob']', N'$arr_info['address']', '$arr_info['malop']')";
		
	}

	function getSV_ID($ho, $ten)
	{
		$sql = "SELECT MASV
				FROM SinhVien
				WHERE HO = '$ho' AND TEN = '$ten'";
		
	}
}

?>