<?php
require_once ("../model/database.php");
require_once ("../model/cart.php");
require_once ("../model/product_db.php");

$sensor1 =  get_product(1);
$sensor2 =  get_product(2);
session_start();


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

<h3>Products</h3>
<?php echo "<p>".$sensor1['name']."<p>";?>
<form action="cart_controller.php" method="post">
    <label for="quantity">Quantity</label>
    <input type="number" name="quantity" value="1">
    <input type="hidden" name="product_id" value="<?php echo $sensor1['id']; ?>">
    <input type="hidden" name="action" value="add_product">
    <input type="submit" value="Add Product">
</form>

<?php echo "<p>".$sensor2['name']."<p>";?>
<form action="cart_controller.php" method="post">
    <label for="quantity">Quantity</label>
    <input type="number" name="quantity" value="1">
    <input type="hidden" name="product_id" value="<?php echo $sensor2['id']; ?>">
    <input type="hidden" name="action" value="add_product">
    <input type="submit" value="Add Product">
</form>


<h3>Cart Contents</h3>
<?php
if (isset($_SESSION['cart'])) {
    if(!empty($_SESSION['cart'])){
        echo "<h3>".view_cart()."</h3>";
        ?>
        <form action="cart_controller.php" method="post">
            <input type="hidden" name="action" value="empty_cart">
            <input type="submit" value="Empty Cart">
        </form>

<?php
    }else{
        echo "No products in cart";
    }
}else{
    echo "<h3>Cart session is FALSE!</h3>";
}
?>


</body>
</html>