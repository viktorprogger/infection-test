<?php

declare(strict_types=1);

namespace tests;

use App\FooClass;
use PHPUnit\Framework\TestCase;

final class FooTest extends TestCase
{
    public function testBar(): void
    {
        self::assertEquals(1, 1);
    }
}
