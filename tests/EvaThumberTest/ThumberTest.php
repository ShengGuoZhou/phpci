<?php
/**
 * EvaThumber
 * URL based image transformation php library
 *
 * @link      https://github.com/AlloVince/EvaThumber
 * @copyright Copyright (c) 2012-2013 AlloVince (http://avnpc.com/)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @author    AlloVince
 */
namespace EvaThumberTest;

use EvaThumber\Thumber;

class ThumberTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }

    public function testName()
    {
        $str = 'zsg';
        $params = new Thumber();
        $params->setName($str);
        $this->assertEquals($str, $params->getName());
    }

}