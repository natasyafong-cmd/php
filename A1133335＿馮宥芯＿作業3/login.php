<?php
session_start();

if(isset($_SESSION['role'])){
    if($_SESSION['role'] == 'student'){
        header('Location: student.php');
    } elseif($_SESSION['role'] == 'teacher'){
        header('Location: teacher.php');
    } elseif($_SESSION['role'] == 'admin'){
        header('Location: admin.php');
    }
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>

    <?php
    if(isset($_GET['error'])){
        echo "<p style='color:red;'>Username atau password salah!</p>";
    }
    ?>

    <form action="login_check.php" method="post">
        <label>Username:</label>
        <input type="text" name="username" required>
        <br><br>

        <label>Password:</label>
        <input type="password" name="password" required>
        <br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
