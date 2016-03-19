<?php
require'../model/database.php';
require'../model/customer_db.php';

$custID = filter_input(INPUT_GET, 'custID');
$firstName = filter_input(INPUT_GET, 'fName');
$lastName = filter_input(INPUT_GET, 'lName');
$street = filter_input(INPUT_GET, 'street');
$postalCode = filter_input(INPUT_GET, 'postalCode');
$province = filter_input(INPUT_GET, 'province');
$phone = filter_input(INPUT_GET, 'phone');
$email_account = filter_input(INPUT_GET, 'email_account');
$action = filter_input(INPUT_GET, 'action');


echo $firstName.$lastName.$street;

if($action == "edit_info"){

}else if($action == "edit_pw"){

}else if($action == "register"){
    create_customer($firstName, $lastName, $street, $postalCode, $province, $phone, $email_account);
    echo "thank you for registering";
}
?>

