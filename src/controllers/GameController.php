<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Game.php';
require_once __DIR__.'/../repository/GameRepository.php';


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

}