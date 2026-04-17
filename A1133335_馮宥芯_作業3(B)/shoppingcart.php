<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
</head>
<body>

<h2>購物車內容 (Shopping Cart)</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>功能</th>
        <th>編號</th>
        <th>名稱</th>
        <th>價格</th>
        <th>數量</th>
        <th>小計</th>
    </tr>

    <?php
    $total = 0;

    if (isset($_COOKIE["cart"])) {

        foreach ($_COOKIE["cart"] as $key => $value) {

            list($code, $name, $price, $qty) = explode("|", $value);

            $subtotal = $price * $qty;
            $total += $subtotal;

            echo "<tr>";
            echo "<td><a href='delete.php?code=$code'>刪除</a></td>";
            echo "<td>$code</td>";
            echo "<td>$name</td>";
            echo "<td>$price</td>";
            echo "<td>$qty</td>";
            echo "<td>$subtotal</td>";
            echo "</tr>";
        }

        echo "<tr>";
        echo "<td colspan='5' align='right'>總金額</td>";
        echo "<td>$total</td>";
        echo "</tr>";

    } else {
        echo "<tr><td colspan='6'>購物車目前沒有商品</td></tr>";
    }
    ?>
</table>

<br>
<a href="catalog.php">回商品目錄</a>

</body>
</html>