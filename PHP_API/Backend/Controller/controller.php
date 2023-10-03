<?php
require_once("Model/model.php");

class controller extends model
{
    function __construct()
    {
        parent::__construct();
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/data':
                    $alldata = $this->select("users");
                    echo json_encode($alldata);
                    break;

                default:
                    # code...
                    break;
            }
        }
    }
}
$controller = new controller;
