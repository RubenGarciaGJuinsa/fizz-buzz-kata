<?php
namespace Test;

use Kata\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public $fizzBuzz;

    public function setUp()
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    /** @test */
    public function
    give_one_return_one()
    {
        $this->assertEquals('1', $this->fizzBuzz->print(1));
    }

    /** @test */
    public function
    give_nan_throws_exception()
    {
        $this->expectExceptionMessage('$number is not an integer');
        $this->fizzBuzz->print('one');
        $this->fail('Not thrown exception');
    }
}