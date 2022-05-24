<?php
require_once 'AbstractHandler.php';

class NumberOfPlayersHandler extends AbstractHandler
{

    private int $players;


    public function __construct(int $players)
    {
        $this->players = $players;

    }


    protected function filter(array $request): array
    {
        $arrayToReturn = array();
        foreach ($request as $oneRequest){
            if($oneRequest->getMinimumPlayers() <= $this->players & $oneRequest->getMaximumPlayers() >= $this->players){
                array_push($arrayToReturn,$oneRequest);
            }


//            print_r($oneRequest->getTitle());
        }
        return $arrayToReturn;


    }


}