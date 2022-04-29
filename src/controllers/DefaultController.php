<?php

require_once 'AppController.php';

class DefaultController extends AppController{

    public function index(){
        //TODO display login.php
        $this->render('login');
    }
    
    public function home() {
        //TODO display home.php
        $this->render('home');

    }

    public function myGames() {
        //TODO display mygames.php
        $this->render('myGames');

    }
    public function search() {
        //TODO display mygames.php
        $this->render('search');

    }
    public function whereToBuyGames() {
    //TODO display mygames.php
    $this->render('whereToBuyGames');

}
    
}