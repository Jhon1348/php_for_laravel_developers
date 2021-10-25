<?php



function greet(){
    $name = htmlspecialchars($_GET['name']);
    $surname= $_GET['surname'];
//punt per concatenar
    return "Hola $name $surname!";
}

function dd($xivato){
    var_dump($xivato);
    die();
}

//API




