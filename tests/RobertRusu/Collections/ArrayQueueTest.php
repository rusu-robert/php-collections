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
        $firstAdded = 1;
        $this->queue->enqueue($firstAdded);
        $secondAdded = 2;
        $this->queue->enqueue($secondAdded);
        $addedThird = 3;
        $this->queue->enqueue($addedThird);

        $this->assertSame($firstAdded, $this->queue->dequeue());
        $this->assertSame($secondAdded, $this->queue->dequeue());
        $this->assertSame($addedThird, $this->queue->dequeue());
        $this->assertNull($this->queue->dequeue());
    }
} 