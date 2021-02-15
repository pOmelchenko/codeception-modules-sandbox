<?php

namespace Api\Tests\Unit;

use Codeception\Test\Unit;
use Api\Kernel;

class KernelTest extends Unit
{
    public function testCreate(): void
    {
        self::assertInstanceOf(Kernel::class, Kernel::create());
    }

    public function testGetVersion(): void
    {
        self::assertEquals('1.0.0', Kernel::create()->getVersion());
    }
}
