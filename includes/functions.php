<?php

/** connects to the chosen database and returns the connection to be used in queries
 * @param $database_name STRING name of the database to which you want to connect
 * @return MYSQLI represents the connection to the MySQL server
 */
function database_connect($database_name) {
$con = mysqli_connect("192.168.20.56","root","","$database_name");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
return $con;
}

$database = 'my_blog';

/** queries the database, returns the data in an associative array and severs connection
 * @param $connection OBJECT represents the connection to the MySQL server (returned from database_connect function)
 * @param $query STRING should be formatted as a SELECT query with required parameters and the table name
 * @return ARRAY returns an associative array containing associative arrays for each row that is returned from the chosen query parameters
 */
function query_into_array($connection, $query) {
    $result = mysqli_query($connection, $query);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($connection);
    return $data;
}
?>

