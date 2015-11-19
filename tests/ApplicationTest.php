<?php

use App\Application;

class ApplicationTest extends PHPUnit_Framework_TestCase
{
    public function testOutput()
    {
        $this->expectOutputString('Hello World');
        (new Application())->run();
    }
}
