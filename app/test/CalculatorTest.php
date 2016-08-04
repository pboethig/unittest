<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 04.08.16
 * Time: 08:28
 */

use App\Library\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    protected function getFixure()
    {
        return  [[2,2,4], [2.5,2.5,5]];
    }

    public function testAddNumbers()
    {
        $calc = new Calculator();

        foreach ($this->getFixure() as $numbers)
        {
            $this->assertEquals($numbers[2],$calc->add($numbers[0], $numbers[1]));
        }
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testThrowExceptionIfNoNummericIsPassed()
    {
        $calc = new Calculator();

        $calc->add(array(),2);
    }
}