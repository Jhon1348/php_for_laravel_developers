<?php

use Framework\App;

require 'vendor/autoload.php';

require 'framework/bootstrap.php';


//URL
//ROUTER -> API redirect quina URL m'ha demanat l'usuari he d'obtenir el controlador que toca i executar-lo
// contact -> app/Http/Controllers/contact.php

//dd($_GET);

//$routes = new Route();
//$routes ->define($routes);
//$routes ->redirect($_SERVER['REQUEST_URI']);

//FACADES -> IOC CONTAINER -> App
//dd(App::get('router'));
App::get('router')-> redirect($_SERVER['REQUEST_URI']);

//require 'app/index.php';
//require 'resources/views/index.blade.php';
