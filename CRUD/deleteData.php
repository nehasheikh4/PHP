<?php

include 'config.php';

$id = $_GET['userId'];

$query = "DELETE from tb_please WHERE id =" . $id;
$result = mysqli_query($conn, $query);

if ($result) {
    echo '<script>alert("User deleted sucessfully")</script>';
    echo '<script>window.location = "http://localhost/learn_php/crud/index.php";</script>';

} else {
    echo '<script>alert("Error")</script>';
}