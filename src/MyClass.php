<?php

namespace MyNamespace;

class MyClass
{

    use MyTrait;

    #[\Override]
    /**
     * Note that this says "Overrides method in class MyClass" (itself?) and allows the #[Override] tag, even
     * though it fails at runtime.
     */
    public function foo(): void
    {

    }
}