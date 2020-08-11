<?php
// Definir datos de conexion con la dbs
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','toor');
define('DB_NAME','smoothiefile');

// Conexion con la dbs
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($link === false){
	die("Error: no se pudo establecer conexion con la base de datos\n". mysqli_connect_error());
}
?>