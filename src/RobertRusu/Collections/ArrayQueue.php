<?php

namespace RobertRusu\Collections;

class ArrayQueue implements Queue
{
    private $elements;

    public function __construct(array $elements = array())
    {
        $this->elements = $elements;
    }

    /**
     * @return integer
     */
    public function size()
    {
        return count($this->elements);
    }

    /**
     * @return boolean
     */
    public function isEmpty()
    {
        return $this->size() === 0;
    }

    public function enqueue($element)
    {
        $this->elements[] = $element;
    }

    public function dequeue()
    {
        return array_shift($this->elements);
    }
}