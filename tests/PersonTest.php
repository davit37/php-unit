<?php

namespace Davit37\PhpUnit;

use PHPUnit\Framework\TestCase;
use Davit37\PhpUnit\Person;

class PersonTest extends TestCase
{
    public function testSuccess()
    {
        $person = new Person("Davit");
        self::assertEquals("Hello Budi, my name is Davit", $person->sayHello("Budi"));
    }

    public function testException()
    {
        $person = new Person("Davit");
        $this->expectException(\Exception::class);
        $person->sayHello(null);
       
    }

    public function testOutput()
    {
        $person = new Person("Davit");
        $this->expectOutputString("Good Bye Budi".PHP_EOL);
        $person->sayGoodBy("Budi");
    }
}