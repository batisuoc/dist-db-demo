<?php

// Biến lưu trữ kết nối
$conn = null;

// Hàm kết nối
function db_connect($coso){
	$serverName = '';
	switch ($coso) {
		case 'CS1':
		$serverName = DB_HOST_01;
		break;
		case 'CS2':
		$serverName = DB_HOST_02;
		break;
		default:
		$serverName = DB_HOST;
		break;
	}
	$connectionInfo = array( "Database" => DB_NAME, "UID" => DB_USER, "PWD" => DB_PASS, "CharacterSet" => "UTF-8");
	global $conn;
	if (!$conn){
		$conn = sqlsrv_connect($serverName, $connectionInfo) or die( print_r( sqlsrv_errors(), true));
	}
}

// Hàm ngắt kết nối
function db_close(){
	global $conn;
	if ($conn){
		sqlsrv_close($conn);
	}
}

// Hàm lấy danh sách, kết quả trả về danh sách các record trong một mảng
function db_get_list($sql){
	db_connect();
	global $conn;
	$data  = array();
	$result = sqlsrv_query( $conn, $sql );
	while ($row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_NUMERIC)){
		$data[] = $row;
	}
	return $data;
}

// Hàm lấy chi tiết, dùng select theo ID vì nó trả về 1 record
function db_get_row($sql){
	db_connect();
	global $conn;
	$result = sqlsrv_query( $conn, $sql );
	$row = array();
	if (mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_assoc($result);
	}    
	return $row;
}

// Hàm thực thi câu truy  vấn insert, update, delete
function db_execute($sql){
	db_connect();
	global $conn;
	return sqlsrv_query( $conn, $sql );
}

?>