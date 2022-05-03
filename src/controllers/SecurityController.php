<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class SecurityController extends AppController
{
    public function login()
    {
        $userRepository = new UserRepository();

        if($this->isPost() !== true){
            return $this->render('login');
        }


        $email = $_POST["email"];
        $password = $_POST["password"];

        $user = $userRepository->getUser($email);

        if(!$user){
            return $this->render('login',['messages' => ['Nie ma takiego użytkownika']]);
        }


        if ($user->getEmail() !== $email){
            return $this->render('login',['messages' => ['Nie ma użytkownika powiązanego z tym adresem email']]);
        }
        if ($user->getPassword() !== $password){
            return $this->render('login',['messages' => ['Złe hasło']]);
        }

        $cookie_name = $user->getName();

        session_start();

        $_SESSION['email'] = $email;
        setcookie("user",$cookie_name,time() + (86400 * 30));

        return $this->render('home');


    }

    public function logout(){
        session_start();

        setcookie("user","",time() -10    );
//        unset($_SESSION);

        session_destroy();
        return $this->render('login');


    }

}