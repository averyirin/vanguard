<?php

$action = filter_input(INPUT_POST, 'action');

//view product catalog
if($action == "view_products"){
    echo "Include products.php with queries done";
}
?>