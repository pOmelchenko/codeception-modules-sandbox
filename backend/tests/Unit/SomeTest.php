<?php namespace BackendTests;

class SomeTest extends \Codeception\Test\Unit
{
    /**
     * @var \BackendTests\UnitTester
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
        $this->assertTrue(true);
    }
}