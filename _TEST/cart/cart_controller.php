<?php
$action = filter_input(INPUT_POST, 'action');

//start cart session
if ($action == "start_cart") {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
}

//end cart session
else if($action == "end_cart"){
    if (isset($_SESSION['cart'])) {
        unset($_SESSION['cart']);
    }
}
//view cart
else if($action == "view_cart") {
    echo "Include shop_cart.php with queries done";
}

//add product to cart
else if($action == "add_product") {
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
?>