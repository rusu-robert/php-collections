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
        $this->stack->push(1);
        $this->stack->push(2);
        $this->stack->push(3);

        $this->assertSame(3, $this->stack->pop());
        $this->assertSame(2, $this->stack->pop());
        $this->assertSame(1, $this->stack->pop());
        $this->assertNull($this->stack->pop());
    }

    public function testRemove()
    {
        $this->stack->push(1);
        $this->stack->push(2);
        $this->stack->push(1);

        $this->stack->remove(1);
        $this->assertSame(1, $this->stack->size());
        $this->assertSame(2, $this->stack->pop());
    }

    public function testClear()
    {
        $this->stack->push(1);
        $this->stack->push(2);

        $this->stack->clear();
        $this->assertTrue($this->stack->isEmpty());
    }

    public function testContains()
    {
        $this->stack->push(1);
        $this->stack->push(2);

        $this->assertTrue($this->stack->contains(1));
        $this->assertTrue($this->stack->contains(2));
        $this->assertFalse($this->stack->contains('1'));
        $this->assertFalse($this->stack->contains(null));
    }

} 