<?php

class conectadb {
  public static function dbmysql() {
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
return $mysqli;
}
}
