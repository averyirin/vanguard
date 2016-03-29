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
?>