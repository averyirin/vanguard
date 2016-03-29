<?php
require_once ("../model/cart.php");

require_once ("../model/database.php");
require_once ("../model/product_db.php");/*
 * foreach ($arr as $key => $value) {
    echo "Key: $key; Value: $value<br />\n";

 */
$action = filter_input(INPUT_POST, 'action');
$product_id = filter_input(INPUT_POST, 'product_id');
$quantity = filter_input(INPUT_POST, 'product_id');

//start cart session
if ($action == "start_cart") {
    start_cart_session();
}

//end cart session
else if($action == "end_cart"){
    end_cart_session();
}
//view cart
else if($action == "view_cart") {
    view_cart();
}

//add product to cart
else if($action == "add_product") {
    add_product_to_cart($product_id, $quantity);
    echo "Add product to cart";
}

//remove product to cart
else if($action == "remove_product") {
    echo "Remove product from cart";
}

//update product quantity in cart
else if($action == "update_quantity") {
    echo "Update product quantity in cart";
}

//clear the cart
else if($action == "empty_cart") {
    echo "Cart is now empty";
}
view_cart();
include ("cart_test.php");
?>