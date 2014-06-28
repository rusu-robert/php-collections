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
} 