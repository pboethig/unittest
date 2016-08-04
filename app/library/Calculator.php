<?php

namespace App\Library;
use Doctrine\Instantiator\Exception\InvalidArgumentException;

/**
 * Created by PhpStorm.
 * User: root
 * Date: 04.08.16
 * Time: 08:31
 */
class Calculator
{

    public function add($summant1, $summant2)
    {
        if (!is_numeric($summant1) || !is_numeric($summant2))
        {
            throw new \InvalidArgumentException('no valid parameters set');
        }

        return $summant1 + $summant2;
    }

}