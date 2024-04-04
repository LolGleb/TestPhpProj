<?php


class SomeClassTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Src\SomeClass;
        $result = $calculator->add(20,5);

        $this->assertEquals(25, $result);
    }

    public function testDiv()
    {
        $calculator = new Src\SomeClass;
        $result = $calculator->divide(20,5);

        $this->assertEquals(4, $result);
    }
}
