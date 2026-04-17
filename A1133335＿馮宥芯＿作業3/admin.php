<?php
session_start();

if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
</head>
<body>
    <h2>Welcome Admin</h2>

    <p>Username: <?php echo $_SESSION['username']; ?></p>
    <p>Role: <?php echo $_SESSION['role']; ?></p>

    <?php
    if(isset($_COOKIE['user_id'])){
        echo "<p>Cookie User ID: " . $_COOKIE['user_id'] . "</p>";
    } else {
        echo "<p>Cookie tidak ada</p>";
    }
    ?>

    <a href="delete_cookie.php">Delete Cookie</a>
    <br><br>
    <a href="logout.php">Logout</a>
</body>
</html>