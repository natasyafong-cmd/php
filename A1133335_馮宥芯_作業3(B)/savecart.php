<?php
session_start();

if (isset($_POST["product"]) && isset($_POST["qty"])) {

    $product = $_POST["product"];
    $qty = $_POST["qty"];

    list($code, $name, $price) = explode("|", $product);

    $_SESSION["code"] = $code;
    $_SESSION["name"] = $name;
    $_SESSION["price"] = $price;
    $_SESSION["qty"] = $qty;

    $cartData = $code . "|" . $name . "|" . $price . "|" . $qty;

    setcookie("cart[$code]", $cartData, time() + 3600);

    header("Location: shoppingcart.php");
    exit();
}
?>