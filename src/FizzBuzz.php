<?php


namespace Kata;


class FizzBuzz
{
    protected DatabaseInterface $database;

    public function __construct($database)
    {
        $this->database = $database;

    }

    public function print($number)
    {
        $result = $number;
        $this->checkIfNumberIsAnInteger($number);

        if ($number % 3 == 0) {
            $result = $this->database->getStringWhenThreeNumber();
        }

        return $result;
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