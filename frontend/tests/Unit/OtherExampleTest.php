<?php namespace Frontend\Tests\Unit;

use Codeception\Test\Unit;
use Frontend\Tests\UnitTester;

class OtherExampleTest extends Unit
{
    protected UnitTester $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    public function testSomeFeature(): void
    {
        $this->tester->wantTo('test assert false');
        self::assertFalse(false);
    }
}