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
			default:
				$serverName = DB_HOST;
				break;
		}
		$connectionInfo = array( "Database" => DB_NAME, "UID" => DB_USER, "PWD" => DB_PASS, "CharacterSet" => "UTF-8");
		$this->db = sqlsrv_connect($serverName, $connectionInfo);
	}
}

?>
