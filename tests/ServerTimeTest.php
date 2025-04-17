<?php

use PHPUnit\Framework\TestCase;
use Mkhvsl\MvServerTime\ServerTime;

class ServerTimeTest extends TestCase
{
    public function testReturnsDateTime()
    {
        $time = new ServerTime();
        $now = $time->now();
        $this->assertInstanceOf(\DateTimeInterface::class, $now);
    }
}
