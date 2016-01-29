<?php

namespace MadPiper;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-29 at 15:30:45.
 */
class CommandTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Command
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Command;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * Tests the example from the manual
     * 
     * @covers MadPiper\Command::__call
     * @covers MadPiper\Command::__toString
     */
    public function testExample() {
        $this->assertEquals('ps u|grep COMMAND', (string)$this->object->ps('u')->grep('COMMAND'));
    }

}
