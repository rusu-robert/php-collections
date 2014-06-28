<?php

namespace RobertRusu\Collections;

interface Queue extends Collection
{
    public function enqueue($element);

    public function dequeue();

} 