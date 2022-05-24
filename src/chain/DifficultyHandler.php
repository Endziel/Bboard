<?php
require_once 'AbstractHandler.php';


class DifficultyHandler extends AbstractHandler
{

    private string $difficultyLevel;


    public function __construct(string $difficulty)
    {
        $this->difficultyLevel = $difficulty;
    }


    protected function filter(array $request): array
    {

        $arrayToReturn = array();
        foreach ($request as $oneRequest) {
            if ($oneRequest->getDifficultyLevel() == $this->difficultyLevel) {
//                print_r("testPush");

                array_push($arrayToReturn, $oneRequest);
            }


//            print_r($oneRequest->getTitle());
//            print_r($arrayToReturn);
        }
//                    print_r($arrayToReturn);

        return $arrayToReturn;


    }




}