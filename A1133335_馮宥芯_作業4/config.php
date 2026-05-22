<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "spam_mail"
);

if(!$conn){
    die("Connection Failed");
}

?>