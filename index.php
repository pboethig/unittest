<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 04.08.16
 * Time: 09:55
 */

require "vendor/autoload.php";

$calculator = new Calculator();

echo PHP_EOL.$calculator->add(2,2).PHP_EOL;