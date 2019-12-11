<?php namespace FrameworkTests;

class SomeTest extends \Codeception\Test\Unit
{
    /**
     * @var \FrameworkTests\UnitTester
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
        $this->markTestIncomplete('because');
    }
}