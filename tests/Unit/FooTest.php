<?php

namespace Vendor\Tests\Unit;

use Vendor\Project\Foo;

class FooTest extends TestCase
{
    public function testMethod(): void
    {
        $foo = new Foo();

        self::assertTrue($foo->foo());
    }
}
