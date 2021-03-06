<?php

require "index.php";

class CollatzConjecture extends PHPUnit_Framework_TestCase
{

    public function testZeroStepsForOne()
    {
        $this->assertEquals(0, steps(1));
    }

    public function testDivideIfEven()
    {
        $this->assertEquals(4, steps(16));
    }

    public function testEvenAndOddSteps()
    {
        $this->assertEquals(9, steps(12));
    }

    public function testLargeNumberOfEvenAndOddSteps()
    {
      
        $this->assertEquals(152, steps(1000000));
    }

    public function testZeroIsAnError()
    {
        $this->setExpectedException('InvalidArgumentException', 'Only positive numbers are allowed');
        steps(0);
    }

    public function testNegativeValueIsAnError()
    {
        $this->setExpectedException('InvalidArgumentException', 'Only positive numbers are allowed');
        steps(-1);
    }
}