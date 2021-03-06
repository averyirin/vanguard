<?php

//create order items
function create_order_item($name, $email, $password) {
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
function list_order_items($name, $email, $password) {
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
function update_order_item($name, $email, $password) {
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
function delete_order_item($name, $email, $password) {
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