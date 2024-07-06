<?php

namespace MyNamespace;

class MyUnrelatedClass
{

    use MyTrait;

    #[\Override]
    /**
     * This method also thinks it overrides MyClass and incorrectly allows #[Override], but is completely unrelated to
     * that class.
     */
    public function foo(): void
    {

    }

}