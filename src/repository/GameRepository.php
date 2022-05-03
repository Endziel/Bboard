<?php
require_once "Repository.php";
require_once __DIR__.'/../models/Game.php';
class GameRepository extends Repository
{
    public function getGames(string $email): array
    {
        $stmt = $this->database->connect()->prepare(
            'SELECT title,minimum_time_minute,average_time_minute,minimum_age,minimum_players,maximum_players,image from games join users_games ON games.id = users_games.id_game join users on users_games.id_user = users.id where email = :email order by title'
        )   ;
        $stmt->bindParam(':email',$email,PDO::PARAM_STR);
        $stmt->execute();
        $arrayOfGames = array();


        do {
            $game = $stmt->fetch(PDO::FETCH_ASSOC);
//            print_r($game);
            if($game != false) {
                $arrayOfGames[] = new Game(
                    $game['title'],
                    $game['image'],
                    $game['minimum_time_minute'],
                    $game['average_time_minute'],
                    $game['minimum_age'],
                    $game['minimum_players'],
                    $game['maximum_players']
                );
            }
        }while($game != false);
//        while($stmt->fetch(PDO::FETCH_ASSOC) != false){}
//                   print_r($arrayOfGames);


//        if($game == false){
//            return null;
//            //TODO wywalic wyjatek exception lab9 28:50
//        }
//        die($game);

        return $arrayOfGames;
    }

}


