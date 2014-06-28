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
     * @return boolean
     */
    public function isEmpty()
    {
        return $this->size() === 0;
    }

    /**
     * @return integer
     */
    public function size()
    {
        return count($this->elements);
    }

    public function enqueue($element)
    {
        $this->elements[] = $element;
    }

    public function dequeue()
    {
        return array_shift($this->elements);
    }

    /**
     * Removes all appearances of the given element
     * @param $element
     */
    public function remove($element)
    {
        $temp = array();
        foreach ($this->elements as $existingElement) {
            if ($element !== $existingElement) {
                $temp[] = $existingElement;
            }
        }
        $this->elements = $temp;
    }

    /**
     * Removes all elements
     */
    public function clear()
    {
        $this->elements = array();
    }

    /**
     * @param $element
     * @return boolean - true if collection has the given element
     *                   false otherwise
     */
    public function contains($element)
    {
        return in_array($element, $this->elements, true);
    }
}