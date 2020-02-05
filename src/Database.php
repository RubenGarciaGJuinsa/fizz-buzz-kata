<?php


namespace Kata;


class Database implements DatabaseInterface
{
    public function initConnection()
    {

    }

    public function getStringWhenThreeNumber()
    {
        throw new \PDOException();
    }

    public function getStringWhenFiveNumber()
    {
        throw new \PDOException();
    }
}