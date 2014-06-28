<?php

namespace RobertRusu\Collections;

class ArrayQueueTest extends \PHPUnit_Framework_TestCase
{
    /** @var Queue */
    private $queue;

    public function setUp()
    {
        $this->queue = new ArrayQueue();
    }

    public function testSize()
    {
        $this->assertSame(0, $this->queue->size());

        $this->queue->enqueue(1);
        $this->assertSame(1, $this->queue->size());
    }

    public function testIsEmpty()
    {
        $this->assertTrue($this->queue->isEmpty());

        $this->queue->enqueue(1);
        $this->assertFalse($this->queue->isEmpty());
    }

    public function testEnqueueAndDequeue()
    {
        $this->queue->enqueue(1);
        $this->queue->enqueue(2);
        $this->queue->enqueue(3);

        $this->assertSame(1, $this->queue->dequeue());
        $this->assertSame(2, $this->queue->dequeue());
        $this->assertSame(3, $this->queue->dequeue());
        $this->assertNull($this->queue->dequeue());
    }

    public function testRemove()
    {
        $this->queue->enqueue(1);
        $this->queue->enqueue(2);
        $this->queue->enqueue(1);
        $this->queue->enqueue(3);

        $this->queue->remove(1);

        $this->assertEquals(2, $this->queue->size());
        $this->assertSame(2, $this->queue->dequeue());
        $this->assertSame(3, $this->queue->dequeue());
    }

    public function testClear()
    {
        $this->queue->enqueue(1);
        $this->queue->enqueue(2);
        $this->queue->clear();

        $this->assertTrue($this->queue->isEmpty());
    }

    public function testContains()
    {
        $this->queue->enqueue(1);
        $this->queue->enqueue(2);

        $this->assertTrue($this->queue->contains(2));
        $this->assertTrue($this->queue->contains(1));
        $this->assertFalse($this->queue->contains('1'));
        $this->assertFalse($this->queue->contains(3));
    }
} 