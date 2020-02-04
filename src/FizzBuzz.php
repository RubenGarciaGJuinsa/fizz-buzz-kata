<?php


namespace Kata;


class FizzBuzz
{
    protected $database;

    public function __construct($database)
    {
        $this->database = $database;

    }

    public function print($number)
    {
        $this->checkIfNumberIsAnInteger($number);

        return $number;
    }

    /**
     * @param $number
     * @throws \Exception
     */
    protected function checkIfNumberIsAnInteger($number): void
    {
        if ( ! is_int($number)) {
            throw new \Exception('$number is not an integer');
        }
    }
}