<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/SpeedChecker.php';

class SpeedCheckerTest extends TestCase
{
    public function testVerySlow()
    {
        $checker = new SpeedChecker(19);
        $this->assertEquals("Very slow", $checker->getLevel());
    }

    public function testAdequateSpeed()
    {
        $checker = new SpeedChecker(45);
        $this->assertEquals("Adequate speed", $checker->getLevel());
    }

    public function testSlightE()
    {
        $checker = new SpeedChecker(70);
        $this->assertEquals("Slight excess", $checker->getLevel());
    }

    public function testModerateE()
    {
        $checker = new SpeedChecker(86);
        $this->assertEquals("Moderate excess", $checker->getLevel());
    }

    public function testSevereE()
    {
        $checker = new SpeedChecker(170);
        $this->assertEquals("Severe excess", $checker->getLevel());
    }
}

//run php vendor\bin\phpunit tests