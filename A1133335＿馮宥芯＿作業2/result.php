<?php
$name = $_POST['name'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$birthday = $_POST['birthday'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$email = $_POST['email'];
$suggestion = $_POST['suggestion'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
</head>
<body>

<h2>Application Result</h2>

<p><b>Name:</b> <?php echo $name; ?></p>

<p><b>Gender:</b> 
<?php 
if ($gender == "male") {
    echo "男 (Male)";
} else {
    echo "女 (Female)";
}
?>
</p>

<p><b>City:</b> <?php echo $city; ?></p>

<p><b>Date of Birth:</b> <?php echo $birthday; ?></p>

<p><b>Phone Number:</b> <?php echo $phone; ?></p>

<p><b>Age:</b> <?php echo $age; ?></p>

<p><b>Email:</b> <?php echo $email; ?></p>

<p><b>Suggestions:</b><br>
<?php echo nl2br($suggestion); ?>
</p>

</body>
</html>