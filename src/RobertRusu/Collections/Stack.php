<?php

namespace RobertRusu\Collections;

class Stack implements Collection
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

    /**
     * @param $element - Element added on top of the Stack
     */
    public function push($element)
    {
        $this->elements[] = $element;
    }

    /**
     * @return mixed - The element on top of the Stack or null if Stack is empty
     */
    public function pop()
    {
        return array_pop($this->elements);
    }
}