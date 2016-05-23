<?php

namespace mbarquin\SlimDR;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-05-23 at 15:18:58.
 */
class FactoryTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Factory
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = Factory::slim();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * @covers mbarquin\SlimDR\Factory::slim
     * @todo   Implement testSlim().
     */
    public function testSlimReturnFactory()
    {
        $this->assertInstanceOf('\\mbarquin\\SlimDR\\Factory', $this->object);
    }

    /**
     * @covers mbarquin\SlimDR\Factory::slim
     * @todo   Implement testSlim().
     */
    public function testSlimAcceptsSlim()
    {
        $slim = new \Slim\App();
        $slim->group('/users', function () {
            $this->get('/reset-password', function ($request, $response, $args) {
                // Code here.
                })->setName('user-password-reset');
        });

        $oFact = Factory::slim($slim);
        $this->assertAttributeInstanceOf('\\Slim\\App', 'slimApp', $oFact);
    }

    /**
     * @covers mbarquin\SlimDR\Factory::slim
     * @todo   Implement testSlim().
     */
    public function testSlimAcceptsSlimAlreadySetted()
    {
        $slim = new \Slim\App();
        $slim->group('/users', function () {
            $this->get('/reset-password', function ($request, $response, $args) {
                // Code here.
                })->setName('user-password-reset');
        });

        $oFact = Factory::slim($slim);

        $slimProcessed = $oFact->withGroup('admin')->getApp();

        $container = $slimProcessed->getContainer();

        $routes = $container->get('router')->getRoutes();
        $rout = array_values($routes);
        $group = $rout[0]->getGroups();
        $group2 = $rout[1]->getGroups();
        $this->assertAttributeContains('/users', 'pattern', $group[0]);
        $this->assertAttributeContains('/admin', 'pattern', $group2[0]);
    }

    /**
     * @covers mbarquin\SlimDR\Factory::withGroup
     * @todo   Implement testWithGroup().
     */
    public function testWithGroup()
    {
        // Remove the following lines when you implement this test.
        $slimProcessed = $this->object->withGroup('testgroup')->getApp();

        $container = $slimProcessed->getContainer();

        $routes = $container->get('router')->getRoutes();
        $rout = array_values($routes);
        $group = $rout[0]->getGroups();
        $this->assertAttributeContains('/testgroup', 'pattern', $group[0]);
    }

    /**
     * @covers mbarquin\SlimDR\Factory::withVersionGroup
     * @todo   Implement testWithVersionGroup().
     */
    public function testWithVersionGroupOnly()
    {
        // Remove the following lines when you implement this test.
        $slimProcessed = $this->object->withVersionGroup('testsubgroup')->getApp();

        $container = $slimProcessed->getContainer();

        $routes = $container->get('router')->getRoutes();
        $rout = array_values($routes);
        $group = $rout[0]->getGroups();
        $this->assertAttributeContains('/testsubgroup', 'pattern', $group[0]);
    }

    /**
     * @covers mbarquin\SlimDR\Factory::withContainer
     * @todo   Implement testWithContainer().
     */
    public function testWithContainer()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers mbarquin\SlimDR\Factory::withNamespace
     * @todo   Implement testWithNamespace().
     */
    public function testWithNamespace()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers mbarquin\SlimDR\Factory::getApp
     * @todo   Implement testGetApp().
     */
    public function testGetApp()
    {
        $confSlim = $this->object
                ->withGroup('api')
                ->withVersionGroup('v1')
                ->withNamespace('\\mbarquin\\Controllers')
                ->getApp();

        $this->assertInstanceOf('\\Slim\\App', $confSlim);
    }

    /**
     * @covers mbarquin\SlimDR\Factory::setMap
     * @todo   Implement testSetMap().
     */
    public function testSetMap()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers mbarquin\SlimDR\Factory::getArgs
     * @todo   Implement testGetArgs().
     */
    public function testGetArgs()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

}