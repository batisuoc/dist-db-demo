<?php

require_once 'config.php';

class Database
{
	protected $db;
	function __construct($macs)
	{
		$serverName = '';
		switch ($macs) {
			case 'CS1':
				$serverName = DB_HOST_01;
				break;
			case 'CS2':
				$serverName = DB_HOST_02;
				break;
			case 'TCCN':
				$serverName = DB_HOST;
				break;
			default:
				$serverName = DB_HOST;
				break;
		}
		// echo $serverName;
		$connectionInfo = array( "Database" => DB_NAME, "UID" => DB_USER, "PWD" => DB_PASS, "CharacterSet" => "UTF-8");
		$this->db = sqlsrv_connect($serverName, $connectionInfo);
		if( $this->db ) {
			// echo "Connection established.<br />";
		}else{
			echo "Connection could not be established.<br />";
			die( print_r( sqlsrv_errors(), true));
		}
	}
}

?>
