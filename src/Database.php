<?php


namespace Kata;


class Database implements DatabaseInterface
{
    public function getStringWhenThreeNumber()
    {
        throw new \PDOException();
    }
}