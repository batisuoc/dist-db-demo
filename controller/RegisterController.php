<?php

require_once 'model/Account.php';
require_once 'model/GiaoVien.php';
require_once 'model/SinhVien.php';
require_once 'model/Lop.php';
require_once 'model/Khoa.php';

class RegisterController
{
	private $account;
	private $student;
	private $teacher;
	private $class;
	private $khoa;

	function __construct($macs)
	{
		$this->account = new Account($macs);
		$this->student = new SinhVien($macs);
		$this->teacher = new GiaoVien($macs);
		$this->class = new Lop($macs);
		$this->khoa = new Khoa($macs);
	}

	function getListofLop()
	{
		return $this->class->getListLop();
	}

	function getListofKhoa()
	{
		return $this->khoa->getListKhoa();
	}

	function regisStudentAcc($arr_info)
	{
		$studentInfos = array('firstname' => $arr_info['firstname'], 
							  'lastname' => $arr_info['lastname'],
							  'dob' => $arr_info['dob'],
							  'address' => $arr_info['address'],
							  'malop' => $arr_info['malop']);
		$this->student->insertSinhVien($studentInfos);
		$studentID = $this->student->getSV_ID($arr_info['lastname'], $arr_info['lastname']);
		$this->account->insertAccount($studentID, $arr_info['pass']);
	}

	function regisTeacherAcc($arr_info)
	{
		# code...
	}
}

?>