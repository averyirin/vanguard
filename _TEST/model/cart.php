<?php
//start the cart
session_start();
function start_cart_session(){
    $_SESSION['cart'] = array();

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
//view cart
function view_cart(){
    $grandTotal = 0;
    if (isset($_SESSION['cart'])) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Product Name</th>";
        echo "<th>Quantity</th>";
        echo "<th>Total</th>";
        echo "</tr>";

        foreach ($_SESSION['cart'] as $product_id => $quantity) {
            $product = get_product($product_id);
            $total=round($product['price']*$quantity,2);
            $grandTotal += $total;
            echo "<tr>";
            echo "<td>".$product['name']."</td>";
            echo "<td>".$quantity." </td>";
            echo "<td>".number_format($total,2)."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    echo "<h3>Grand Total: ".number_format($grandTotal,2)."</h3>";
}

?>