<?php
require_once ("../model/database.php");
require_once ("../model/product_db.php");
//test with product 1
$product = get_product(1);

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

<?php
if (isset($_SESSION['cart'])) {
    echo "<h3>Cart session is TRUE!</h3>";
}else{
    echo "<h3>Cart session is FALSE!</h3>";
}
?>

<h3>Product Info</h3>
<p><?php echo $product['name'];?></p>
<p><?php echo $product['description'];?></p>


<form action="cart_controller.php" method="post">
    <input type="hidden" name="action" value="add_product">
    <input type="hidden" name="product_id" value="1">
    <input type="submit" value="Add Product to Cart">
</form>

<h3>Cart Current Inventory</h3>
<table>
    <tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Remove</th>
    </tr>
    <tr>
        <td>DB Sensor 1</td>
        <td><form><input type="text" value="1"></form></td>
        <td><form><input type="submit" value="Remove Item"></form></td>
    </tr>
</table>
<form>
    <input type="hidden" name="action" value="1">
    <input type="submit" value="Update Cart">
</form>
<form>
    <input type="hidden" name="action" value="clear">
    <input type="submit" value="Clear Cart">
</form>
</body>
</html>