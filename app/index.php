<?php

use Framework\App;
use Framework\Database\Database;


//require 'app/Models/Task.php';
//require 'framework/Database/Database.php';
//require 'framework/Database/Connection.php';

$tasks= App::get('database')->selectAll('tasks');

//WISHFUL PROGRAMMING

//$database = new Database(App::get('config')['database']); // ->Laravel no utilitzem gairebé mai new -> DI i COntainer


//$tasks = Database :: selectAll('tasks'); // "::" Crida estatica -> sense new
//$tasks = Task :: selectAll('tasks'); -> Laravel Eloquent

$greeting = greet();
