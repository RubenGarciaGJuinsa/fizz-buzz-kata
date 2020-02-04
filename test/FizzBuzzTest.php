<?php
namespace Test;

use Kata\Database;
use Kata\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public $fizzBuzz;

    public function setUp(): void
    {
        $dbStub = $this->createStub(Database::class);
        $dbStub->method('getStringWhenThreeNumber')
            ->willReturn('Fizz');
        $this->fizzBuzz = new FizzBuzz($dbStub);
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


    /** @test */
    public function
    give_three_return_fizz()
    {
        $this->assertEquals('Fizz', $this->fizzBuzz->print(3));
    }
}