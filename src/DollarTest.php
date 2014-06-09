<?php
include 'Dollar.php';

class DollarTest extends \PHPUnit_Framework_TestCase {

    /** @test */
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $five->times(2);
        $this->assertSame(10, $five->amount);
    }
}
 