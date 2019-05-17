<?php

require_once 'Database.php';

class Account extends Database
{
	function __construct($macs)
	{
		parent::__construct($macs);
	}

	function insertAccount($username, $password)
	{
		$sql = "INSERT INTO SinhVien(HO, TEN, NGAYSINH, DIACHI, MALOP) VALUES ('Yolo', 'Yolo', '2015-05-05', N'12 Bà Chiểu', 'LOP00001')";
	}
}

?>