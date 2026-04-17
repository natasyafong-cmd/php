<?php
if (isset($_GET["code"])) {

    $code = $_GET["code"];

    setcookie("cart[$code]", "", time() - 3600);
}

header("Location: shoppingcart.php");
exit();
?>