<?php
require '../model/database.php';
require '../model/customer_db.php';

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

//create customer
if ($action == "register") {
    if (is_valid_password($password, $confirm_password)) {
        create_customer($firstName, $lastName, $street, $postalCode, $province, $phone, $email_account, $password);
        echo "thank you for registering";
    }
}
//customer login
else if ($action == "login") {
    if (is_valid_customer_login($email_account, $password)) {
        echo "Logged in";
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
    echo "You have logged out";
}
?>

