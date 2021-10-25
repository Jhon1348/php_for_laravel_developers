<?php

use Framework\Database\Database;

require 'config.php';
require 'app/helpers.php';
//require 'app/Models/Task.php';
//require 'framework/Database/Database.php';
//require 'framework/Database/Connection.php';



//WISHFUL PROGRAMMING

$database = new Database($config); // ->Laravel no utilitzem gairebé mai new -> DI i COntainer
$tasks= $database -> selectAll('tasks');

//$tasks = Database :: selectAll('tasks'); // "::" Crida estatica -> sense new
//$tasks = Task :: selectAll('tasks'); -> Laravel Eloquent

$greeting = greet();
