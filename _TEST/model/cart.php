<?php
//start the cart
function start_cart_session(){

}
//clear the cart
function clear_cart(){

}
//end the cart
function end_cart_session(){

}

//create order
function create_order($name, $email, $password) {
    try{
        global $db;
        // $password = sha1($email . $password);
        $query = '
        INSERT INTO vanguard_order (name, email)
        VALUES (firstName = :firstName,
            email = :email)';

        $statement = $db->prepare($query);
        $statement->bindValue(':firstName', $name,PDO::PARAM_STR);
        $statement->bindValue(':email', $email,PDO::PARAM_STR);
        $statement->execute();
        $statement->closeCursor();
        return true;

    }catch(Exception $error){
        return false;

    }
}

//list order
function list_orders($name, $email, $password) {
    try{
        global $db;
        // $password = sha1($email . $password);
        $query = '
        INSERT INTO vanguard_customers (name, email)
        VALUES (firstName = :firstName,
            email = :email)';

        $statement = $db->prepare($query);
        $statement->bindValue(':firstName', $name,PDO::PARAM_STR);
        $statement->bindValue(':email', $email,PDO::PARAM_STR);
        $statement->execute();
        $statement->closeCursor();
        return true;

    }catch(Exception $error){
        return false;

    }
}

//update order
function update_order($name, $email, $password) {
    try{
        global $db;
        // $password = sha1($email . $password);
        $query = '
        INSERT INTO vanguard_customers (name, email)
        VALUES (firstName = :firstName,
            email = :email)';

        $statement = $db->prepare($query);
        $statement->bindValue(':firstName', $name,PDO::PARAM_STR);
        $statement->bindValue(':email', $email,PDO::PARAM_STR);
        $statement->execute();
        $statement->closeCursor();
        return true;

    }catch(Exception $error){
        return false;

    }
}

//delete order
function delete_order($name, $email, $password) {
    try{
        global $db;
        // $password = sha1($email . $password);
        $query = '
        INSERT INTO vanguard_customers (name, email)
        VALUES (firstName = :firstName,
            email = :email)';

        $statement = $db->prepare($query);
        $statement->bindValue(':firstName', $name,PDO::PARAM_STR);
        $statement->bindValue(':email', $email,PDO::PARAM_STR);
        $statement->execute();
        $statement->closeCursor();
        return true;

    }catch(Exception $error){
        return false;

    }
}

?>