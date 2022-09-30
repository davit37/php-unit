<?php

namespace Davit37\PhpUnit;

use PHPUnit\Framework\TestCase;
use Davit37\PhpUnit\Person;

class PersonTest extends TestCase
{
    private Person $person;

    protected function setUp():void 
    {
        $this->person = new Person("Davit");
    }
    public function testSuccess()
    {

        self::assertEquals("Hello Budi, my name is Davit", $this->person->sayHello("Budi"));
    }

    public function testException()
    {
        
        $this->expectException(\Exception::class);
        $this->person->sayHello(null);
       
    }

    public function testOutput()
    {
        $this->expectOutputString("Good Bye Budi".PHP_EOL);
        $this->person->sayGoodBy("Budi");
    }
}