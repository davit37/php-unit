<?php

namespace Davit37\PhpUnit;

use PHPUnit\Framework\TestCase;

class CounterStaticTest extends TestCase
{
    public static Counter $counter;

    public static function setUpBeforeClass(): void 
    {
        self::$counter = new Counter();

    }

    public function testFirst()
    {
        self::$counter->increment();
        $this->assertEquals(1, self::$counter->getCounter());
    }

    public function testSecond()
    {
        self::$counter->increment();
        self::assertEquals(2, self::$counter->getCounter());
    }

    public static function tearDownAfterClass(): void 
    {
        echo PHP_EOL."Unit Test Selesai".PHP_EOL;
    }
}