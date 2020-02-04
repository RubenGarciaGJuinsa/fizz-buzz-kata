<?php


namespace Kata;


class FizzBuzz
{
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