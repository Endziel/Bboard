<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('index' , 'DefaultController');
Routing::get('home' , 'DefaultController');

Routing::get('myGames' , 'DefaultController');
Routing::get('search' , 'DefaultController');
Routing::get('whereToBuyGames' , 'DefaultController');




Routing::post('login' , 'SecurityController');
Routing::post('logout' , 'SecurityController');



Routing::run($path);