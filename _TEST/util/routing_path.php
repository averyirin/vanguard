<?php

// Get the document root
$doc_root = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT', FILTER_SANITIZE_STRING);
$uri = filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_STRING);
$dirs = explode('/', $uri);
$home_path = '/' . $dirs[1] . '/';

// Set the include path
set_include_path($doc_root . $home_path);

session_start();

?>