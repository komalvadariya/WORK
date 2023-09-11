<?php
require_once("model/model.php");
class Controller extends model{
    public $base_url = "http://localhost/PHP/Work/PHP_MVC/Photography/public/";

    public function __construct() {

        parent::__construct();  
       
        // $ReqURI = explode("/",$_SERVER['REQUEST_URI']);
       
        // $this->base_url = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME']."/".$ReqURI[1]."/".$ReqURI[2]."/".$ReqURI[3]."/".$ReqURI[4]."/public/";
       
        if(isset($_SERVER['PATH_INFO'])){
        switch ($_SERVER['PATH_INFO']) {
            case '/home':
                include_once("views/header.php");
                include_once("views/main.php");
               include_once("Views/footer.php");
                break;
            case '/about':
                include_once("views/header.php");
               include_once("views/about.php");
                include_once("views/footer.php");
                
                break;
            case '/project':
                include_once("views/header.php");
                echo "Contact us page data will be here";
                include_once("views/footer.php");
                break;
            case '/pages':
                include_once("views/header.php");
                echo "Login";
                include_once("views/footer.php");
                break;

            case '/login':
                    include_once("views/header.php");
                    include_once("views/login.php");
                    include_once("views/footer.php");
                    break;

            case '/register':
                        include_once("views/header.php");
                        include_once("views/register.php");
                       
                        include_once("Views/footer.php");
                        if (isset( $_REQUEST['btn-regist'])) {
                            
                            array_pop($_REQUEST);
                            $data=$_REQUEST;
                            echo "<pre>";
    
                            print_r($data);
                            echo "</pre>";
                           
                            $insertres=$this->insert("users",$data);
                            echo "<pre>";
                            print_r($insertres);
                            echo "</pre>";
                        }
            
                    default:
                # code...
                break;
        }
    }

    }
}


$Controller = new Controller;



?>