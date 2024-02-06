<?php
// echo "called";
require_once("Model/model.php");

class controller extends model
{
    public $base_URL = "";

    function __construct()
    {
        ob_start();
        parent::__construct();
        $this->base_URL = "http://localhost/php/Project_MVC/Assets/";

        if (isset($_SERVER['PATH_INFO'])) {

            switch ($_SERVER['PATH_INFO']) {
                case '/':
                case '/home':
                    include_once("Views/header.php");
                    include_once("Views/home.php");
                    include_once("Views/footer.php");

                    break;

                case '/shop':
                    include_once("Views/header.php");
                    include_once("Views/shop.php");
                    include_once("Views/footer.php");
                    break;

                case '/registration':
                    include_once("Views/register.php");
                    if (isset($_REQUEST['register'])) {
                        echo "<pre>";
                        // print_r($_REQUEST);

                        $data = array(
                            "username" => $_REQUEST['username'],
                            "password" => $_REQUEST['password'],
                            "email" => $_REQUEST['email'],
                            "gender" => $_REQUEST['gender'],
                            "mobileno" => $_REQUEST['mobileno']
                        );
                        print_r($data);
                        $response = $this->insert("users", $data);
                        echo "<br>";
                        echo $response;
                    }
                    break;

                case '/alluser':
                    $res = $this->select("users");
                    include_once("Views/alluser.php");
                    // print_r($res);
                    break;

                case '/deleteuser':
                    print_r($_REQUEST);
                    $data = $this->delete("users", $_REQUEST['id']);
                    header("location:alluser");
                    break;
                case '/edituser':
                    // print_r($_REQUEST);
                    $res = $this->select("users", $_REQUEST['id']);
                    // echo "<pre>";
                    // print_r($res);
                    include_once("Views/edituser.php");
                    if (isset($_REQUEST['update'])) {
                        $data = array(
                            "username" => $_REQUEST['username'],
                            "password" => $_REQUEST['password'],
                            "email" => $_REQUEST['email'],
                            "gender" => $_REQUEST['gender'],
                            "mobileno" => $_REQUEST['mobileno']
                        );

                        $res = $this->update("users", $data, array("id" => $_REQUEST['id']));
                        // echo $res;
                        header("location:alluser");
                    }

                    break;

                case '/feature':
                    include_once("Views/header.php");
                    include_once("Views/feature.php");
                    include_once("Views/footer.php");
                    break;

                case '/blog':
                    include_once("Views/header.php");
                    include_once("Views/blog.php");
                    include_once("Views/footer.php");

                    break;


                case '/about':
                    include_once("Views/header.php");
                    include_once("Views/about.php");
                    include_once("Views/footer.php");

                    break;


                case '/contact':
                    include_once("Views/header.php");
                    include_once("Views/contact.php");
                    include_once("Views/footer.php");

                    break;

                default:
                    # code...
                    break;
            }
        } else {
            header("location:home");
        }
        ob_flush();
    }
}

$controller = new controller;
