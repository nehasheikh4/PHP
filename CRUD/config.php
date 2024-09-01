<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_ple";

// $con = new mysqli($host, $username, $password, $database);
// $con = new mysqli('localhost', 'root', '', 'db_user');
$conn = new mysqli($host, $username, $password, $database);
// $con = new mysqli('localhost', 'root', '', 'db_user');


// if ($con) {
//     echo "Database connected";
// } else {
//     echo "Database not connected";
// }