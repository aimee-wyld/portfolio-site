<?php

/** connects to the chosen database and returns the connection to be used in queries
 * @param $database_name STRING name of the database to which you want to connect
 * @return $con OBJECT represents the connection to the MySQL server
 */
function database_connect($database_name) {
$con = mysqli_connect("192.168.20.56","root","","$database_name");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
return $con;
}

$database = 'my_blog';
$con = database_connect($database);
?>
