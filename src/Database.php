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
}