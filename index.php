<?php

use MyNamespace\MyClass;
use MyNamespace\MyUnrelatedClass;

require 'vendor/autoload.php';

// This does not work even though the project has no errors.
// If you remove #[Override] in MyClass, this class runs.
// If you delete MyChildClass *or* if you remove use MyTrait from it, the error is identified correctly by PHPStorm.
(new MyClass())->foo();

// This class has nothing to do with MyClass, but also allows the override tag because PHPStorm thinks it overrides
// MyClass.
(new MyUnrelatedClass())->foo();