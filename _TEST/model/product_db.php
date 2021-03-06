<?php

//create order
function create_product($name, $email, $password) {
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
    function get_product($id){
    try{
        global $db;
        // $password = sha1($email . $password);
        $query = '
        SELECT *
        FROM vanguard_products
        WHERE (id = :id)';

        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id,PDO::PARAM_STR);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;

    }catch(Exception $error){
        return false;

    }
}
//list order
function list_products() {
    try{
        global $db;
        $query = '
        SELECT *
        FROM vanguard_products';

        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;

    }catch(Exception $error){
        return false;

    }
}

//update order
function update_product($name, $email, $password) {
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
function delete_product($name, $email, $password) {
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