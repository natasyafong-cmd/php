<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if($username == 'student1' && $password == '1234'){
    $_SESSION['username'] = $username;
    $_SESSION['role'] = 'student';

    setcookie('user_id', $username, time() + 3600);

    header('Location: student.php');
    exit();
}
elseif($username == 'teacher1' && $password == '1234'){
    $_SESSION['username'] = $username;
    $_SESSION['role'] = 'teacher';

    setcookie('user_id', $username, time() + 3600);

    header('Location: teacher.php');
    exit();
}
elseif($username == 'admin1' && $password == '1234'){
    $_SESSION['username'] = $username;
    $_SESSION['role'] = 'admin';

    setcookie('user_id', $username, time() + 3600);

    header('Location: admin.php');
    exit();
}
else{
    header('Location: login.php?error=1');
    exit();
}
?>