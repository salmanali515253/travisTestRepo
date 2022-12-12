<?php
use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    public function testTrueAssertsToFalse()
    {
        // $this->assertFalse(false);
        if(!$this->assertFalse(false))
        {
            print "Passed";
        }
        else{
            print "Failed";
        }
    }
    public function testTrueAssertsToTrue()
    {
        // $this->assertFalse(true);
        if($this->assertFalse(true))
        {
            print "Passed";
        }
        else{
            print "Failed";
        }
    }
}
?>