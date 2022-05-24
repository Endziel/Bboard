<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Game.php';
require_once __DIR__.'/../repository/GameRepository.php';
require_once __DIR__.'/../chain/MinimumTimeHandler.php';
require_once __DIR__.'/../chain/MaximumTimeHandler.php';
require_once __DIR__.'/../chain/NumberOfPlayersHandler.php';
require_once __DIR__.'/../chain/DifficultyHandler.php';
require_once __DIR__.'/../chain/MinimumAgeHandler.php';





class GameController extends AppController
{



//    public function showGames()
//    {
//        $games = $this->projectRepository->getProjects();
//        $this->render('projects', ['projects' => $projects]);
//    }
    public function myGames()
    {
        if (session_status() != PHP_SESSION_ACTIVE){
            session_start();
        }
//session_start();
        if(!isset($_SESSION['email'])) {
            header("location:logout");
        }
        $gameRepository = new GameRepository();
        $games = $gameRepository->getGames($_SESSION['email']);
//        die($gameRepository);
        $this->render('myGames',['games' => $games]);




    }

    public function searchForGames(){

        if($this->isPost() !== true){
            return $this->render('login');
        }

        if (session_status() != PHP_SESSION_ACTIVE){
            session_start();
        }
//session_start();
        if(!isset($_SESSION['email'])) {
            header("location:logout");
        }

//        print_r($_POST);

        $lowSlider = $_POST["low-slider"];
        $highSlider = $_POST["high-slider"];
        $players = $_POST["players"];
        $age = $_POST["age"];
        $difficulty = $_POST["difficulty"];

//        print_r($difficulty);



        $gameRepository = new GameRepository();
        $allMyGames = $gameRepository->getGames($_SESSION['email']);

        $MinTH = new MinimumTimeHandler($lowSlider);
        $MaxTH = new MaximumTimeHandler($highSlider);
        $PlayerH = new NumberOfPlayersHandler($players);
        $MinAgeH = new MinimumAgeHandler($age);
        $DiffH = new DifficultyHandler($difficulty);
//        $NumPl = new NumberOfPlayersHandler();
        $MinTH->setNext($MaxTH);
        $MaxTH->setNext($PlayerH);
        $PlayerH->setNext($MinAgeH);
        $MinAgeH->setNext($DiffH);



        $gamesToShow = $MinTH->handle($allMyGames);

        if($gamesToShow){
            $this->render('myGames',['games' => $gamesToShow]);
        }else{
            $this->render('myGames',['games' => $gamesToShow, 'messages' => ['Brak gier o podanych parametrach']]);
        }


//        print_r( $MinTH->handle($allMyGames) );







//        die();
//        $this->render('home');


    }

}