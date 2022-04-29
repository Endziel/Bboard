<?php
require_once "Repository.php";
require_once __DIR__.'/../models/Game.php';
class GameRepository extends Repository
{
    public function getGame(string $email): ?Game
    {
        $stmt = $this->database->connect()->prepare(
            'SELECT * FROM public.users WHERE email = :email'
        )   ;
        $stmt->bindParam(':email',$email,PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user == false){
            return null;
            //TODO wywalic wyjatek exception lab9 28:50
        }

        return new User(
            $user['email'],
            $user['password'],
            $user['name']
        );
    }

}