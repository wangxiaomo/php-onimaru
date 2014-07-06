<?php

require 'vendor/autoload.php';

Raven_Autoloader::register();

$client = new Raven_Client('http://5089dbfc421d44c8a1d46cf88a45b6d4:9de1554082d64f1c936a1a8e1a6ff35f@127.0.0.1:9001/2', array(
    'trace' =>  true,
));
$error_handler = new Raven_ErrorHandler($client);
set_error_handler(array($error_handler, 'handleError'));
set_exception_handler(array($error_handler, 'handleException'));

$x = 3/0;
