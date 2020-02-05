<?php


namespace Kata;


class FizzBuzz
{
    const BUZZ_NUMBER = 5;
    const FIZZ_NUMBER = 3;
    protected DatabaseInterface $database;

    public function __construct($database)
    {
        $this->database = $database;

    }

    public function print($number)
    {
        $result = '';
        $this->checkIfNumberIsAnInteger($number);

        if ($this->isDivisibleByFizzNumber($number)) {
            $this->database->initConnection();
            $result .= $this->database->getStringWhenThreeNumber();
        }

        if ($this->isDivisibleByBuzzNumber($number)) {
            $this->database->initConnection();
            $result .= $this->database->getStringWhenFiveNumber();
        }

        if (empty($result)) {
            $result = $number;
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

    /**
     * @param $number
     * @return bool
     */
    protected function isDivisibleByFizzNumber($number): bool
    {
        return $number % self::FIZZ_NUMBER == 0;
    }

    /**
     * @param $number
     * @return bool
     */
    protected function isDivisibleByBuzzNumber($number): bool
    {
        return $number % self::BUZZ_NUMBER == 0;
    }
}