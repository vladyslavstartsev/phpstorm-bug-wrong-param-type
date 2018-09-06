<?php

namespace SomeRandomNameSpace;


class Baz
{
    /** @var ChildFoo[] */
    protected $childFoos = [];

    /**
     * @param ChildFoo $childFoo
     * @return $this
     */
    public function addFooValue($childFoo)
    {
        $this->childFoos[] = $childFoo;
        return $this;
    }
}