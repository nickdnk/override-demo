<?php

namespace MyNamespace;

class MyChildClass extends MyClass
{

    // Removing this trait causes the error to be identified by PHPStorm.
    use MyTrait;

    #[\Override]
    public function foo(): void
    {

    }

}