<?php
// Set up the database connection
$dsn = 'mysql:host=sql.computerstudi.es;dbname=gc200260949';
$username = 'gc200260949';
$password = 'Zrt3htd?';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    //include('errors/db_error_connect.php');
    exit();
}
?>