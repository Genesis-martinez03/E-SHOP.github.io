<?php
$serverName = "GENESIS-PC\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array( "Database"=>"tienda", "UID"=>"sa", "PWD"=>"08132");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>