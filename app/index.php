<?php

require 'config.php';
require 'app/helpers.php';
require 'app/Task.php';

$dbh = connectDB($config);
    
$statement = $dbh->prepare('SELECT * FROM tasks;');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS,'Task');



//QUERY STRING
//var_dump per vore els arrys
    //var_dump($_GET['name']);
    //$name ='Sergi';
//cometas dobles quan el text no es lliteral
//simples quan es lliteral

// API

$greeting = greet();

//$greeting = 'Hola ' . $_GET['name'] . ''. $_GET['name'] . '!';