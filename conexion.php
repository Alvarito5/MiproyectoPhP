<?php

$db_host = 'localhost' ;
$db_user = 'root';
$db_password = '';
$db_db = 'practicahtml' ;


$mysqli = @new mysqli(
$db_host ,
$db_user ,
$db_password ,
$db_db
);

if ($mysqli->connect_error ) {
    echo 'la conexion de base de datos no es correcta';
echo 'Errno: ' .$mysqli->connect_errno ;
echo '<br>';
echo 'Error: ' .$mysqli->connect_error ;
exit();
}

echo 'la conexion de base de datos fue EXITOSA';
echo $db_db;

echo 'Success: A proper connection to MySQL was made.' ;
echo '<br>';
echo 'Host information: ' .$mysqli->host_info ;
echo '<br>';
echo 'Protocol version: ' .$mysqli->protocol_version ;
$mysqli->close();

?>