<?php
namespace Repartee\Example;

use Repartee\Repartee;

# Autoloader for class resolution
require("../autoload.php");

# Get the message
$recipients = $_POST['to'];
$message = $_POST['message'];

# Repartee -- Constructor Example
$response = Repartee::newMessage ([
    'Recipients' => [$recipients],
    'Message' => $message
])->Send();

# Var Dump Response
var_dump($response);
