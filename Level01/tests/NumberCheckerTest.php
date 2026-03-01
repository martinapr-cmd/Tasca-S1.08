<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/NumberChecker.php';

class NumberCheckerTest extends TestCase
{
    public function testEven()
    {
        $checker = new NumberChecker(4);
        $this->assertTrue($checker->isEven());
    }

    public function testOdd()
    {
        $checker = new NumberChecker(5);
        $this->assertFalse($checker->isEven());
    }

    public function testPositive()
    {
        $checker = new NumberChecker(10);
        $this->assertTrue($checker->isPositive());
    }

    public function testNegative()
    {
        $checker = new NumberChecker(-3);
        $this->assertFalse($checker->isPositive());
    }
}
