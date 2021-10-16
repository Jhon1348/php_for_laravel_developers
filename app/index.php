<?php

require 'app/helpers.php';
require 'app/Task.php';

//nova tasca
//$task = new Task(1,'comprar pa','a la panaderia',0);
//var_dump($task);

$user = 'debian-sys-maint';
$pass = '0FoECsMAe1KzaXIU';

try{
    $dbh =new PDO('mysql:host=localhost;dbname=phplaraveldevs',$user,$pass);

}catch (\Exception $e){
    echo 'Error de connexió a la base de dades';
}

$statement = $dbh->prepare('SELECT * FROM tasks;');

$statement->execute();

$tasks = $statement->fetch(PDO::FETCH_CLASS,'Task');


var_dump();

//QUERY STRING
//var_dump per vore els arrys
    //var_dump($_GET['name']);
    //$name ='Sergi';
//cometas dobles quan el text no es lliteral
//simples quan es lliteral

// API

$greeting = greet();

//$greeting = 'Hola ' . $_GET['name'] . ''. $_GET['name'] . '!';