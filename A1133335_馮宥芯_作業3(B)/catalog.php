<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Catalog</title>
</head>
<body>

<h2>商品目錄 (Catalog)</h2>

<form action="savecart.php" method="post">
    <label>請選擇商品：</label>

    <select name="product">
        <option value="S001|10吋平板電腦|12000">10吋平板電腦 - $12000</option>
        <option value="S002|15.6吋筆記型電腦|27000">15.6吋筆記型電腦 - $27000</option>
        <option value="S003|iPhone智慧型手機|21000">iPhone智慧型手機 - $21000</option>
    </select>

    <label>數量：</label>
    <input type="number" name="qty" value="1" min="1">

    <input type="submit" value="訂購">
</form>

<br>
<a href="shoppingcart.php">檢視購物車</a>

</body>
</html>
