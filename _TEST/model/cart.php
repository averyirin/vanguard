<?php
//start the cart
//start the cart
session_start();

function start_cart_session(){
    $_SESSION['cart'] = array();
    echo "CART STARTED!";

}
//end the cart
function end_cart_session(){
    if (isset($_SESSION['cart'])) {
        unset($_SESSION['cart']);
    }
}
//clear the cart
function clear_cart(){
    if (isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
}
//add product to the cart
function add_product_to_cart($product_id, $quantity){
    if (isset($_SESSION['cart'])) {
        $_SESSION['cart'][$product_id] = $quantity;
    }
}
function remove_product($product_id){
    if (isset($_SESSION['cart'])) {
        unset($_SESSION['cart'][$product_id]);
    }
}
function update_product_cart($product_id, $quantity){
    if (isset($_SESSION['cart'])) {
        $_SESSION['cart'][$product_id] = $quantity;
    }
}
function get_cart(){
    if (isset($_SESSION['cart'])) {
       return $_SESSION['cart'];
    }
    else return false;
}
function get_num_items(){

    if (isset($_SESSION['cart'])) {
        return count($_SESSION['cart']);
    }
    else return 0;
}
//view cart
function view_cart(){
    $subTotal = 0;
    if (isset($_SESSION['cart'])) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Product Name</th>";
        echo "<th>Quantity</th>";
        echo "<th>Total</th>";
        echo "<th>Remove</th>";
        echo "</tr>";

        foreach ($_SESSION['cart'] as $product_id => $quantity) {
            $product = get_product($product_id);
            $total=round($product['price']*$quantity,2);
            $subTotal += $total;
            echo "<tr>";
            echo "<td>".$product['name']."</td>";

            echo "<td>";
            echo "<form action='cart_controller.php' method='post'>";
            echo "<input type='hidden' name='product_id' value='".$product['id']."'>";
            echo "<input type='number' name='quantity' value='".$quantity."'>";
            echo "<input type='hidden' name='action' value='update_quantity'>";
            echo "<input type='submit' value='Update'>";
            echo "</form>";
            echo "</td>";

            echo "<td>".number_format($total,2)."</td>";

            echo "<td>";
            echo "<form action='cart_controller.php' method='post'>";
            echo "<input type='hidden' name='product_id' value='".$product['id']."'>";
            echo "<input type='hidden' name='action' value='remove_product'>";
            echo "<input type='submit' value='Remove'>";
            echo "</form>";
            echo "</td>";


            echo "</tr>";
        }
        echo "</table>";
    }
    $tax = $subTotal * 0.13;
    echo "<table>";
    echo "<tr>";
    echo "<td><strong>Subtotal</strong></td>";
    echo "<td align='right'>".number_format($subTotal,2)."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><strong>Tax</strong></td>";
    echo "<td align='right'>".number_format($tax,2)."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><strong>Grand Total</strong></td>";
    echo "<td align='right'>".number_format($subTotal+$tax,2)."</td>";
    echo "</tr>";
    echo "</table>";

}

?>