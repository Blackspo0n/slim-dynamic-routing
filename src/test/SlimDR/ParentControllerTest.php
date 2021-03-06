<?php

namespace mbarquin\SlimDR;

use mbarquin\SlimDR\Test\Controller\test;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-05-25 at 00:49:51.
 */
class ParentControllerTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var ParentController
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new test();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {

    }

    /**
     * @covers mbarquin\SlimDR\ParentController::getDependencies
     * @todo   Implement testGetDependencies().
     */
    public function testGetDependencies() {
        $deps = $this->object->getDependencies('get');
        
        $this->assertGreaterThan(0, count($deps));
    }

        /**
     * @covers mbarquin\SlimDR\ParentController::getDependencies
     * @todo   Implement testGetDependencies().
     */
    public function testGetNoDependencies() {
        $deps = $this->object->getDependencies('put');
        
        $this->assertEquals(0, count($deps));
    }
}
