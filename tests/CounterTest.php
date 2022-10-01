<?php

namespace Davit37\PhpUnit;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

class CounterTest extends TestCase
{
    private Counter $counter;
    protected function setUp():void 
    {
        $this->counter = new Counter;
        echo "Membuat Counter".PHP_EOL;
    }

    public function testIncrement()
    {
        $this->assertEquals(0, $this->counter->getCounter());
        $this->markTestIncomplete("//TODO not complete");

        echo "Tidak Akan Di Eksekusi";
        //TODO not complete
    }

    public function test_counter()
    {

        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCounter());

        $this->counter->increment();
        $this->assertEquals(2, $this->counter->getCounter());

        $this->counter->increment();
        self::assertEquals(3, $this->counter->getCounter());

    }

    /**
     * @test
     */
    public function increment()
    {
        $this->markTestSkipped("Test Di Skip");
        echo "Tidak Akan Di Eksekusi";
        $this->counter->increment();
        self::assertEquals(1, $this->counter->getCounter());

    }

    public function testFirst(): Counter 
    {
        $this->counter->increment();
        $this->assertEquals(1, $this->counter->getCounter());

        return $this->counter;
    }

    /**
     * @depends testFirst
     */
    public function testSecond(Counter $counter): void
    {
        $this->counter->increment();
        $this->assertEquals(1, $this->counter->getCounter());
    }

    protected function tearDown():void 
    {
        echo "Tear Down".PHP_EOL;
    }

    /** 
     * @after
     */
    protected function after():void 
    {
        echo "After".PHP_EOL;
    }

    /** 
     * @requires OSFAMILY windows
     */
    public function testOnlyWindows()
    {
        $this->assertTrue(true, "Only In Windows");
    }

    /** 
     * @requires PHP >= 8
     * @requires OSFAMILY Darwin
     */
    public function testOnlyForMacAndPHP8() 
    {
        $this->assertTrue(true, "Only In Mac And PHP 8");
    }
}