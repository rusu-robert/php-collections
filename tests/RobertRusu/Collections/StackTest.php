<?php

namespace RobertRusu\Collections;

class StackTest extends \PHPUnit_Framework_TestCase
{
    /** @var Stack */
    private $stack;

    public function setUp()
    {
        $this->stack = new Stack();
    }

    public function testSize()
    {
        $this->assertSame(0, $this->stack->size());

        $this->stack->push(1);
        $this->assertSame(1, $this->stack->size());
    }

    public function testIsEmpty()
    {
        $this->assertTrue($this->stack->isEmpty());

        $this->stack->push(1);
        $this->assertFalse($this->stack->isEmpty());
    }

    public function testPushAndPop()
    {
        $addedFirst = 1;
        $this->stack->push($addedFirst);
        $addedSecond = 2;
        $this->stack->push($addedSecond);
        $addedThird = 3;
        $this->stack->push($addedThird);

        $this->assertSame($addedThird, $this->stack->pop());
        $this->assertSame($addedSecond, $this->stack->pop());
        $this->assertSame($addedFirst, $this->stack->pop());
        $this->assertNull($this->stack->pop());
    }
} 