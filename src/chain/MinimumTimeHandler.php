<?php
require_once 'AbstractHandler.php';

class MinimumTimeHandler extends AbstractHandler
{
    private int $minimumTime;


    public function __construct(int $time)
    {
        $this->minimumTime = $time;

    }

    protected function filter(array $request): array
    {
        $arrayToReturn = array();
        foreach ($request as $oneRequest){
            if($oneRequest->getMinimumTimeMinute() >= $this->minimumTime){
                array_push($arrayToReturn,$oneRequest);
            }


//            print_r($oneRequest->getTitle());
        }
//        print_r($arrayToReturn);
        return $arrayToReturn;
//        if ($this->nextHandler) {
////            print_r("test1\n");
////            print_r($arrayToReturn);
//
//            return $this->nextHandler->handle($arrayToReturn);
//        }
//        else{
////            print_r("test2");
//
//            return $arrayToReturn;
//        }

//        print_r($arrayToReturn);
//        echo "<br>";
//        return parent::handle($arrayToReturn);
//        return $arrayToReturn;


    }


}