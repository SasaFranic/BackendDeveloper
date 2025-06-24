<?php

require __DIR__ . '/../Calculator.php';

class CalculatorTest extends PHPUnit\Framework\TestCase
{
    // test metoda mora poceti sa 'test'
    public function testAddTwoNumbers()
    {
        $calculator = new Calculator();
        $result = $calculator->add(3, 4);
        $this->assertEquals(7, $result);
    }
}