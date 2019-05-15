<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>QUIZ</title>
</head>
<body>
<?php

$serverName = "BATISUOC\\BATISUOCSERVER"; //serverName\instanceName
$connectionInfo = array( "Database" => "THI_TN", "UID" => "sa", "PWD" => "%!%03032", "CharacterSet" => "UTF-8");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
	echo "Connection established.<br />";
}else{
	echo "Connection could not be established.<br />";
	die( print_r( sqlsrv_errors(), true));
}

$sql = "SELECT * FROM Khoa";
$stmt = sqlsrv_query($conn, $sql);
if($stmt == false)
{
	echo "query failed.";
}
else
	{?>
		<table>
			<?php while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) { ?>
				<tr>
					<td><?= $row['MAKH'] ?></td>
					<td><?= $row['TENKH'] ?></td>
					<td><?= $row['MACS'] ?></td>
				</tr>
			<?php } ?>
		</table>	
	<?php } ?>
</body>
</html>
