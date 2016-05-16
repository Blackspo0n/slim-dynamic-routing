<?php
/**
 * Controllers parent file,
 * implements SlimDR interface
 *
 * PHP version 5.6
 *
 *
 * @category   SlimDR
 * @package    Interface
 * @subpackage Interface
 * @author     Moises Barquin Salgado <moises.barquin@gmail.com>
 * @copyright  Moises Barquin Salgado 2016
 * @version    GIT: $Id$
 */
namespace mbarquin\SlimDR;

/**
 * Controllers parent,
 * implements SlimDR interface
 */
class ParentController implements ControllerInterface
{
    protected $dependencies;

    const POST   = 'post';
    const GET    = 'get';
    const DELETE = 'delete';
    const OPTION = 'option';
    const PUT    = 'put';

    public function getDependencies($method)
    {
        if (isset($this->dependencies[$method]) === true
                && is_array($this->dependencies[$method]) === true) {
            return $this->dependencies[$method];
        } else {
            return array();
        }
    }

}
