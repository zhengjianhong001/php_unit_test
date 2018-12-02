<?php
    namespace App\Tests;

    use App\Calculator;
    use PHPUnit\Framework\TestCase;
    
    /**
     * CalculatorTest
     * @group calculator
     */
    class CalculatorTest extends TestCase
    {
        /** @test */
        public function test_add()
        {
            // arrange
            // $target = new Calculator();
            $expected = 2;
            // act
            $actual = 1+1;
            // assert
            $this->assertEquals($expected, $actual);
        }

        public function add($x, $y)
        {
            return $x = $y;
        }
    
    }
    