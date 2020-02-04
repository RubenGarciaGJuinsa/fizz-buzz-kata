<?php


namespace Kata;


class FizzBuzz
{
    public function print($number)
    {
        if ( ! is_int($number)) {
            throw new \Exception('$number is not an integer');
        }

        return $number;
    }
}