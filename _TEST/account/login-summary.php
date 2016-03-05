<?php
$email = filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');


?>