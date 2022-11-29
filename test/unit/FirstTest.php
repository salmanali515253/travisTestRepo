<?php
use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    public function testTrueAssertsToFalse()
    {
        $this->assertFalse(false);
    }
    public function testTrueAssertsToTrue()
    {
        $this->assertFalse(true);
    }
}
?>