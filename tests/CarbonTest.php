<?php

use Carbon\Carbon;

class CarbonTest extends PHPUnit_Framework_TestCase
{
    public function testDate()
    {
        $now = date("Y-m-d H:i:s");
        $carbon = new Carbon();

        $this->assertEquals($now, (string) $carbon, sprintf("%s - %s : datas diferentes!", $now, (string) $carbon));
    }
}
