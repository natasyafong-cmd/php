<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "1234") {
    header("Location: A1133335_馮宥芯_作業1.php");
    exit(); 
} else {
    header("Location: login.php?error=1"); 
    exit();
}
?>