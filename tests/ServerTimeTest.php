<?php

use PHPUnit\Framework\TestCase;
use Mkhvsl\MvServerTime\ServerTime;

class ServerTimeTest extends TestCase
{
    public function testNowReturnsDateTime()
    {
        $time = new ServerTime();
        $now = $time->now();
        $this->assertInstanceOf(\DateTimeInterface::class, $now);
    }

    public function testNowWithCustomIP()
    {
        $time = new ServerTime('8.8.8.8');
        $now = $time->now();
        $this->assertInstanceOf(DateTimeInterface::class, $now);
    }

    public function testInvalidIPThrowsException()
    {
        $this->expectException(RuntimeException::class);
        $time = new ServerTime('invalid');
        $time->now();
    }
}
