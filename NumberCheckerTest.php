<?php
require 'NumberChecker.php';
use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase
{
    public function testIsEven()
    {
        $numberChecker = new NumberChecker(400);
        $this->assertTrue($numberChecker->isEven());
    }

    public function testIsPositive()
    {
        $numberChecker = new NumberChecker(50);
        $this->assertTrue($numberChecker->isPositive());
    }

    public function testIsNegative()
    {
        $numberChecker = new NumberChecker(-170);
        $this->assertFalse($numberChecker->isPositive());

    }
    public function testIsZero()
    {
        $numberChecker = new NumberChecker(0);
        $this->assertFalse($numberChecker->isEven());
        $this->assertFalse($numberChecker->isPositive());
    }
}
