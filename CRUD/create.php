<?php
include 'config.php';
$username = $_POST['name'];
$useremail = $_POST['email'];
$query = ("INSERT INTO tb_please (`name`,`email`) values ('$username','$useremail')");
$result = mysqli_query($conn, $query);
if ($result) {
    echo '<script>alert("User created sucessfully")</script>';
    echo '<script>window.location = "http://localhost/learn_php/crud/index.php";</script>';

} else {
    echo '<script>alert("Error")</script>';
}

