<?php

namespace SomeRandomNameSpace;

class Item
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }
}