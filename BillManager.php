<?php
/**
 * Created by PhpStorm.
 * User: aleksandrsalihov
 * Date: 01.07.15
 * Time: 14:15
 */



class BillManager {


    private $Manager = NULL;

    /*
     * If exists library files we include them
     * if not we include mocking object
     * */
    function __construct($login,$password)
    {
        if(file_exists("../main.class.php"))
        {
            require_once('../soap.class.php');
            require_once('../main.class.php');
        }
        else
            require_once("MockForApi.php");

        $_POST["login"] = $login;
        $_POST["password"] = $password;

        $this->Manager = new LANBilling();
    }

    public function isManagerCreated()
    {
        return ($this->Manager->Error == 0);
    }
} 