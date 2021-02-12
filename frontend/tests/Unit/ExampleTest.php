<?php

namespace Frontend\Tests\Unit;

use Codeception\Test\Unit;
use Frontend\Tests\UnitTester;

class ExampleTest extends Unit
{
    protected UnitTester $tester;

    protected function _before(): void
    {
    }

    protected function _after(): void
    {
    }

    public function testSomeFeature(): void
    {
        self::assertTrue(true);
    }
}