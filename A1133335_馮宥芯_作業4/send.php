<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

include 'config.php';

$mail = new PHPMailer(true);

$mail->isSMTP();

$mail->Host = 'smtp.gmail.com';

$mail->SMTPAuth = true;

$mail->Username = 'a1133335@mail.nuk.edu.tw';

$mail->Password = 'ghcb jjph yyxz yrng';

$mail->SMTPSecure = 'ssl';

$mail->Port = 465;

$subject = $_POST['subject'];

$message = $_POST['message'];

$delay = $_POST['delay'];

if(isset($_POST['all'])){

    $result = mysqli_query(
        $conn,
        "SELECT * FROM emails"
    );

}
else{

    $count = $_POST['random_count'];

    $result = mysqli_query(
        $conn,
        "SELECT * FROM emails
        ORDER BY RAND()
        LIMIT $count"
    );
}

$total = mysqli_num_rows($result);

$current = 0;

while($row = mysqli_fetch_assoc($result)){

    try{

        $mail->clearAddresses();

        $mail->setFrom('a1133335@mail.nuk.edu.tw');

        $mail->addAddress($row['email']);

        $mail->Subject = $subject;

        $mail->Body = $message;

        $mail->send();

        $current++;

        $progress =
        ($current / $total) * 100;

        echo "
        <b>Sending to:</b> ".$row['email']."<br>
        <b>Completed:</b> ".$current." / ".$total." emails<br>
        <b>Progress:</b> ".round($progress)."%<br>
        <hr>
        ";

        sleep($delay);

    }
    catch(Exception $e){

        echo "Failed:
        ".$row['email']."<br>";

    }

}

echo "All emails sent successfully!";

?>