<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('index' , 'DefaultController');
Routing::get('home' , 'DefaultController');

Routing::get('myGames' , 'GameController');
Routing::get('search' , 'DefaultController');
Routing::get('whereToBuyGames' , 'DefaultController');

//Routing::get('getGame' , 'GameController');



Routing::post('login' , 'SecurityController');
Routing::post('logout' , 'SecurityController');



Routing::run($path);