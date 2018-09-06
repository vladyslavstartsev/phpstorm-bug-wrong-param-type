<?php

namespace SomeRandomNameSpace;

class Bar
{
    protected function someRandomMethod()
    {
        (new Baz())
            ->addFooValue(
                (new ChildFoo())
                    ->addDefault('123')
                    ->addDefault('123')
                    ->addDefault('123')
                    ->addDefault('123')
                    ->addDefault('123')
                    ->addDefault('123')
                    ->addDefault('123')
                    ->addDefault('123')
            );
    }
}