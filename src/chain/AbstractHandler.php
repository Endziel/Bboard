<?php
require_once 'Handler.php';


abstract class AbstractHandler implements Handler
{
    protected $nextHandler;

    public function setNext(Handler $handler): Handler
    {
        $this->nextHandler = $handler;

        return $handler;
    }
    protected abstract function filter(array $request): array;

    public function handle(array $request): array
    {
        $arrayToReturn = array();

        $arrayToReturn =  $this->filter($request);
//        print_r($arrayToReturn);
        if ($this->nextHandler) {
            return $this->nextHandler->handle($arrayToReturn);
        }

        return $arrayToReturn;
    }


}