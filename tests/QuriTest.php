<?php

namespace Tests\QuriPhp;

use TheHarvester\QuriPhp\Quri;

class QuriTest extends TestCase
{
    public function test_the_test_is_running()
    {
        $this->assertEquals('test me', Quri::testMe());
    }
}