<?php
require_once 'AbstractHandler.php';

class MaximumTimeHandler extends AbstractHandler
{
    private int $averageTime;


    public function __construct(int $time)
    {
        $this->averageTime = $time;

    }



    protected function filter(array $request): array
    {
//        print_r("test3");



        $arrayToReturn = array();
        foreach ($request as $oneRequest){
//            print_r($oneRequest);
            if($oneRequest->getAverageTimeMinute() <= $this->averageTime){
//                print_r("testPush");

                array_push($arrayToReturn,$oneRequest);
            }


//            print_r($oneRequest->getTitle());
//            print_r($arrayToReturn);
        }
//                    print_r($arrayToReturn);

        return $arrayToReturn;


//        if ($this->nextHandler) {
////            print_r("test4");
//
//            return $this->nextHandler->handle($arrayToReturn);
//        }
//        else{
////            print_r("test5");
////            print_r($arrayToReturn);
//
//            return $arrayToReturn;
//        }

//        print_r($arrayToReturn);
//        echo "<br>";
//        return parent::handle($arrayToReturn);


    }


}