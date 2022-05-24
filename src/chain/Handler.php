<?php
//require_once 'Game.php';


interface Handler
{
    public function setNext(Handler $handler ): Handler;

    public function handle(array $request ): array;
//    public function do(array $request): array;
}