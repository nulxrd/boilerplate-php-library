<?php

namespace Vendor\Tests\Unit;

use PHPUnit\Framework\Attributes\CoversNothing;
use Vendor\Project\Foo;
use Vendor\Tests\TestCase;

#[CoversNothing]
class FooTest extends TestCase
{
    public function testMethod(): void
    {
        $foo = new Foo();

        self::assertTrue($foo->foo());
    }
}
