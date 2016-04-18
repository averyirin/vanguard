<?php
ob_start();
require '../model/database.php';
require '../model/customer_db.php';
include "../util/routing_path.php";
include  "../model/cart.php";
$id = filter_input(INPUT_POST, 'custID');
$firstName = filter_input(INPUT_POST, 'fName');
$lastName = filter_input(INPUT_POST, 'lName');
$street = filter_input(INPUT_POST, 'street');
$postalCode = filter_input(INPUT_POST, 'postalCode');
$province = filter_input(INPUT_POST, 'province');
$phone = filter_input(INPUT_POST, 'phone');
$email_account = filter_input(INPUT_POST, 'email_account');
$password = filter_input(INPUT_POST, 'password');

$confirm_password = filter_input(INPUT_POST, 'confirm_password');
$action = filter_input(INPUT_POST, 'action');
$remember = filter_input(INPUT_POST, 'remember');

//create customer
if ($action == "register") {
    if (is_valid_password($password, $confirm_password)) {
        create_customer($firstName, $lastName, $street, $postalCode, $province, $phone, $email_account, $password);
        echo "thank you for registering";
    }else{
        echo "Please make sure your password is the same";
    }
}
//customer login
else if ($action == "login") {

    if (is_valid_customer_login($email_account, $password)) {
        echo "Logged in<br/>";
        echo $remember."<br/>";
        if($remember){
            echo "Email remembered!<br/>";
            setcookie("email",$email_account,0,"/");
        }
        start_cart_session();
        header("location:".$home_path."catalog/products.php");

    } else {
        echo "Not valid email or password";
    }
}
//update customer information
else if ($action == "edit_info") {
    update_customer_info($id, $firstName, $lastName, $street, $postalCode, $province, $phone, $email_account);
    echo "Updated your information";
}
//update password information
else if ($action == "edit_pw") {
    update_customer_password($id, $password);
    echo "Updated your password";
}
//view customer information
else if ($action =="view_account"){
    echo "Include edit_cust with queries done";
}
//log out of website
else if ($action == "log_out"){
    end_cart_session();
    echo "You have logged out";
    header("location:".$home_path."index.php");
}
ob_end_flush();
?>

