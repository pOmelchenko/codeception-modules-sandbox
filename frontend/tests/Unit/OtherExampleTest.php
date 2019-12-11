<?php namespace FrontendTests;

use Codeception\Test\Unit;

class OtherExampleTest extends Unit
{
    /**
     * @var UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature(): void
    {
        $this->tester->wantTo('test assert false');
        $this->assertFalse(false);
    }
}