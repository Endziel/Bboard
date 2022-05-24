<?php
require_once 'AbstractHandler.php';


class MinimumAgeHandler extends AbstractHandler
{

    private int $minimumAge;


    public function __construct(int $minimumAge)
    {
        $this->minimumAge = $minimumAge;
    }


    protected function filter(array $request): array
    {

        $arrayToReturn = array();
        foreach ($request as $oneRequest) {
            if ($oneRequest->getMinimumAge() <= $this->minimumAge) {
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