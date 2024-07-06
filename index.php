<?php

use MyNamespace\MyClass;

require 'vendor/autoload.php';

// This does not work even though the project has no errors.
(new MyClass())->foo();

// If you remove #[Override] in MyClass, the code runs.

// If you delete MyChildClass *or* if you remove use MyTrait from it, the error is identified correctly by PHPStorm.