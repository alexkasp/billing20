<?php
/**
 * Created by PhpStorm.
 * User: aleksandrsalihov
 * Date: 01.07.15
 * Time: 14:27
 */

require_once '../BillManager.php';

class BillManagerTest extends PHPUnit_Framework_TestCase {

    public function testOKAuthorization()
    {
        $bill = new BillManager("admin","");
        $this->AssertEquals(true,$bill->isManagerCreated());
    }

    public function testWRONGAuthorization()
    {
        $bill = new BillManager("hacker","");
        $this->AssertEquals(false,$bill->isManagerCreated());
    }

}
 