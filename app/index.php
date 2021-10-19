<?php

require 'app/helpers.php';
require 'app/Task.php';

require 'config.php';

//$user = 'debian-sys-maint';
//$pass = '0FoECsMAe1KzaXIU';
//$dsn ='mysql:host=localhost;dbname=phplaraveldevs';


try{
    $dbh =new PDO(
        $config['database']['databasetype'] . ":host=" . $config['database']['host'] . ";dbname=" . $config['database']['name'],
        $config['database']['user'],
        $config['database']['password']);

}catch (\Exception $e){
    echo 'Error de connexió a la base de dades';
}

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