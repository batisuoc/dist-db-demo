<?php

require_once 'controller/RegisterController.php';

$regisCtrl = new RegisterController('TCCN');

if (isset($_POST['regisStudent'])) {
	$student_info = array('firstname' => $_POST['firstname'], 
						  'lastname' => $_POST['lastname'],
						  'pass' => $_POST['psw'],
						  'dob' => $_POST['dob'],
						  'address' => $_POST['address'],
						  'malop' => $_POST['lop']);
	$regisCtrl->regisStudentAcc($student_info);
}

?>