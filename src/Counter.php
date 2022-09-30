<?php
namespace Davit37\PhpUnit;

class Counter {
    private int $counter = 0;

    public function increment():void 
    {
        $this->counter++;
    }

    public function getCounter():int 
    {
        return $this->counter;
    }
}