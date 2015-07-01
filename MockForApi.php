<?php
/**
 * Created by PhpStorm.
 * User: aleksandrsalihov
 * Date: 01.07.15
 * Time: 14:46
 */

/*
 * if this class exists then we work in testing
 * bool class_exists ( string $class_name [, bool $autoload = true ] )
 * */
class MockForApi {

}

class LANBilling {

    public $Error;
    /*
     * We get login ans password and test it for
     * correct values
     * */

    public function __construct()
    {
        echo "YOU USE TESTING PLATFORM!!! \n THIS IS NOT FOR PRODUCTION \n ";
        echo "IF YOU READ THIS THEN LIBRARY FILES NOT FOUNDED!!!\n\n";

        $login = $_POST["login"];
        $password = $_POST["password"];

        if(($login!="admin")||($password!=""))
            $this->Error = 1;
        else
            $this->Error = 0;
    }
}