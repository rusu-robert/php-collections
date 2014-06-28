<?php

namespace RobertRusu\Collections;

interface Collection
{
    /**
     * @return integer
     */
    public function size();

    /**
     * @return boolean
     */
    public function isEmpty();

    /**
     * Removes all appearances of the given element
     * @param $element
     */
    public function remove($element);

    /**
     * Removes all elements
     */
    public function clear();

    /**
     * @param $element
     * @return boolean - true if collection has the given element
     *                   false otherwise
     */
    public function contains($element);
} 