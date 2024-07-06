<?php

namespace MyNamespace;

class MyChildClass extends MyClass
{

    // Removing this trait causes the errors in both classes to be identified by PHPStorm.
    use MyTrait;

    #[\Override]
    public function foo(): void
    {

    }

}