<?php
//start the cart
session_start();
function start_cart_session(){
    $_SESSION['cart'] = 123;

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
//add
function add(){
    if (isset($_SESSION['cart'])) {
        $_SESSION['cart']+=1;
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
    if (isset($_SESSION['cart'])) {
        //foreach ($_SESSION['cart'] as $product_id => $quantity) {
         //   echo "Key: $product_id; Value: $quantity<br />\n";
        //}
    }
}

?>