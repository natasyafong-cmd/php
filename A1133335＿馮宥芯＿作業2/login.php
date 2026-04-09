<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login Page</h2>

    <form method="post" action="login_check.php">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>

    <?php
    if (isset($_GET['error'])) {
        echo "<p style='color:red;'>Login Error!</p>";
    }
    ?>
</body>
</html>
