<?php

namespace Src;

class SomeClass
{
    public array $prop;

    public function __construct()
    {
        $this->prop = array();
    }

    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    public function sub(int $a, int $b): int
    {
        return $a - $b;
    }

    public function multiply(int $a, int $b): int
    {
        return $a * $b;
    }

    public function divide(int $a, int $b): int
    {
        return $a / $b;
    }

    public function reset()
    {

    }
}