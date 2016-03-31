<?php

session_start();

require_once ("../model/database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart Test</title>
</head>
<body>
<h1>Cart Test</h1>

<form action="cart_controller.php" method="post">
    <input type="hidden" name="action" value="start_cart">
    <input type="submit" value="Start Cart Session">
</form>

<form action="cart_controller.php" method="post">
    <input type="hidden" name="action" value="end_cart">
    <input type="submit" value="End Cart Session">
</form>

<form action="cart_controller.php" method="post">
    <input type="hidden" name="action" value="add">
    <input type="submit" value="Increment">
</form>

<?php
if (isset($_SESSION['cart'])) {
    echo "<h3>".$_SESSION['cart']."</h3>";
}else{
    echo "<h3>Cart session is FALSE!</h3>";
}
?>

</body>
</html>