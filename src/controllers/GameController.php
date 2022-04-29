<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Game.php';

class GameController extends AppController
{


    public function games()
    {
        $games = $this->projectRepository->getProjects();
        $this->render('projects', ['projects' => $projects]);
    }
    public function getProject()
    {




    }

}