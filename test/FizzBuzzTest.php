<?php
namespace Test;

use Kata\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /** @test */
    public function
    give_one_return_one()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals('1', $fizzBuzz->print(1));
    }
}