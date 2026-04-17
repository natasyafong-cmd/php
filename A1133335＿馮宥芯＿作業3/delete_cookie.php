<?php
setcookie('user_id', '', time() - 3600);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Cookie</title>
</head>
<body>
    <h2>Cookie berhasil dihapus</h2>

    <a href="login.php">Kembali ke Login</a>
</body>
</html>