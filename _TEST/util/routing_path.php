<?php

$uri = filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_STRING);
$dirs = explode('/', $uri);
$home_path = '/' . $dirs[1] . '/' . $dirs[2] . '/';

?>