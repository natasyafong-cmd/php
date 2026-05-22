<?php

include 'config.php';

$email = $_POST['email'];

$sql = "INSERT INTO emails(email)
VALUES('$email')";

mysqli_query($conn, $sql);

echo "Email Saved";

?>