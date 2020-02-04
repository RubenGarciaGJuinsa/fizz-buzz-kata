<?php


namespace Test;


use Kata\DatabaseInterface;

class DatabaseFake implements DatabaseInterface
{
    public function initConnection()
    {

    }

    public function getStringWhenThreeNumber()
    {
        return 'Fizz';
    }
}