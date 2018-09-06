<?php

namespace SomeRandomNameSpace;

class ParentFoo
{
    protected $items = [];

    public function addDefault($value)
    {
        return $this->add(new Item(new Data($value)));
    }

    public function add(Item $item)
    {
        $this->items[] = $item;
        return $this;
    }
}