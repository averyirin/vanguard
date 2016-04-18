<?php
ob_start();
require_once ("../model/cart.php");

require_once ("../model/database.php");
require_once ("../model/product_db.php");

$action = filter_input(INPUT_POST, 'action');
$product_id = filter_input(INPUT_POST, 'product_id');
$quantity = filter_input(INPUT_POST, 'quantity');

//start cart session
if ($action == "start_cart") {
    //start the cart
    start_cart_session();
    echo "cart started!";
}

//end cart session
else if($action == "end_cart"){
    end_cart_session();
    echo "cart ended!";
}
//view cart
else if($action == "view_cart") {
    view_cart();
}
//add product to cart
else if($action == "add_product") {
    add_product_to_cart($product_id, $quantity);
    echo "added product to cart!";
    header("location:./shop_cart.php");
}

//remove product to cart
else if($action == "remove_product") {
    remove_product($product_id);
    echo "Remove product from cart";
    header("location:./shop_cart.php");
}

//update product quantity in cart
else if($action == "update_quantity") {
    update_product_cart($product_id, $quantity);
    echo "Update product quantity in cart";
    header("location:./shop_cart.php");
}

//clear the cart
else if($action == "empty_cart") {
    clear_cart();
    echo "cart emptied!";
    header("location:./shop_cart.php");
}

ob_end_flush();
?>