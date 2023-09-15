<?php
// echo  "called controller";

session_start();
require_once("Model/model.php");

class controller extends model
{
    public $baseURL = "http://localhost/php/Sir/Travelling/public/";


    public function __construct()
    {
        ob_start();
        parent::__construct();
        // echo "<pre>";
        // print_r($_SERVER);
        // echo "</pre>";


        // $this->baseURL="http://localhost/php/Work/PHP_MVC/Travelling/Public/";
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once("Views/header.php");
                    include_once("Views/home.php");
                    include_once("Views/footer.php");
                    break;
                case '/about':
                    include_once("Views/header.php");
                    include_once("Views/about.php");
                    include_once("Views/footer.php");
                    break;
                case '/service':
                    include_once("Views/header.php");
                    include_once("Views/services.php");
                    include_once("Views/footer.php");
                    break;
                case '/package':
                    include_once("Views/header.php");
                    include_once("Views/pacakges.php");
                    include_once("Views/footer.php");
                    break;

                case '/booking':
                    include_once("Views/header.php");
                    include_once("Views/booking.php");
                    include_once("Views/footer.php");
                    break;
                case '/destination':
                    include_once("Views/header.php");
                    include_once("Views/destination.php");
                    include_once("Views/footer.php");
                    break;
                case '/team':
                    include_once("Views/header.php");
                    include_once("Views/travelguide.php");
                    include_once("Views/footer.php");
                    break;
                case '/testimonial':
                    include_once("Views/header.php");
                    include_once("Views/testimonial.php");
                    include_once("Views/footer.php");
                    break;
                case '/404':
                    include_once("Views/header.php");
                    include_once("Views/error.php");
                    include_once("Views/footer.php");
                    break;
                case '/contact':
                    include_once("Views/header.php");
                    include_once("Views/contact.php");
                    include_once("Views/footer.php");
                    break;
                case '/login':
                    include_once("Views/header.php");
                    include_once("Views/login.php");
                    include_once("Views/footer.php");

                    if (isset($_REQUEST['btn-login'])) {
                        // print_r($_REQUEST);
                        $loginres = $this->login($_REQUEST['username'], $_REQUEST['password']);

                        // echo "<pre>";
                        // print_r($loginres);
                        // exit;

                        if ($loginres['Code'] == 1) {
                            // echo "inside if true auth";
                            $_SESSION['userdata'] = $loginres['Data'];

                            // echo "<pre>";
                            // print_r($_SESSION['userdata']);
                            // print_r($loginres['Data']->roll_id);
                            // exit;
                            if ($loginres['Data']->roll_id == 1) {
                                header("location:admindashboard");
                            } else {
                                header("location:/");
                                # code...
                            }
                        } else {
                            // echo "inside else inavalid user";
                        }
                    }
                    break;

                case '/register':
                    include_once("Views/header.php");
                    include_once("Views/register.php");
                    include_once("Views/footer.php");
                    if (isset($_REQUEST['register'])) {
                        array_pop($_POST);
                        $hobbyData = implode(",", $_POST['chk']);
                        unset($_POST['chk']);
                        // echo $hobbyData;

                        $data = array_merge($_POST, array("	hobby" => $hobbyData));

                        // echo "<pre>";
                        // print_r($data);
                        // echo "</pre>";
                        $inserdata = $this->insert("users", $data);
                        // echo "<pre>";
                        // print_r($inserdata);
                        // echo "</pre>";
                        if ($inserdata['Code'] == 1) {
                            header("location:login");
                            //     echo "  <script>
                            //   alert('register success')
                            //   window.location.href='login'
                            //   </script>";
                        }
                    }
                    break;
                case '/admindashboard':
                    include_once("Views/admin/adminheader.php");
                    include_once("Views/admin/admindashboard.php");
                    include_once("Views/admin/adminfooter.php");
                    break;

                case '/adminallusers':

                    // $allUsers = $this->select("users");
                    $allusers = $this->select("users", array("roll_id" => 2));
                    // echo "<pre>";
                    // print_r($allusers);
                    // echo "</pre>";
                    // exit;
                    include_once("Views/admin/adminheader.php");
                    include_once("Views/admin/adminallusers.php");
                    include_once("Views/admin/adminfooter.php");
                    break;


                case '/edit':
                    $EditRes = $this->select("users", array("id" => $_GET['userid']));

                    $CitiesData   = $this->select("cities_data");
                    // echo "<pre>";
                    // print_r($EditRes['Data']);
                    // echo "</pre>";
                    include_once("Views/admin/adminheader.php");
                    include_once("Views/admin/adminedituser.php");
                    include_once("Views/admin/adminfooter.php");


                    if (isset($_POST['update'])) {

                        // echo "<pre>";
                        // print_r($_FILES);
                        // echo "</pre>";
                        if ($_FILES['prof_pic']['error'] == 0) {
                            // echo "inside if";
                            $target_dir = "Upload/";
                            $target_file = $target_dir . basename($_FILES["prof_pic"]["name"]);
                            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                            $allowedTypes = ['jpg', 'png'];
                            // echo $imageFileType;
                            // exit;
                            if (!in_array($imageFileType, $allowedTypes)) {
                                $msg = "Type is not allowed";
                            } else {


                                $target_file = $target_dir . basename($_FILES["prof_pic"]["name"]);
                                move_uploaded_file($_FILES["prof_pic"]["tmp_name"], $target_file);

                                $profilepic = $_FILES["prof_pic"]["name"];
                                $msg = "success";
                            }
                        } else {
                            // echo "inside else";
                            $profilepic = $_REQUEST['old_profile_pic'];
                            // $msg = "no file";
                        }
                        // exit;

                        // echo $profilepic;

                        $hobbyData = implode(",", $_POST['hobby']);
                        array_pop($_POST);
                        unset($_POST['hobby']);
                        unset($_POST['old_profile_pic']);
                        // echo $hobbyData;
                        $data = array_merge($_POST, array("hobby" => $hobbyData, "prof_pic" => $profilepic));
                        // echo "<pre>";
                        // print_r($data);
                        // echo "</pre>";


                        // exit;

                        $UpdateRes = $this->update("users", $data, array("id" => $_GET['userid']));

                        echo "<pre>";
                        print_r($UpdateRes);
                        echo "</pre>";


                        if ($UpdateRes['Code'] == 1) {
                            header("location:adminallusers");
                        }
                    }
                    break;

                case '/delete':
                    // echo "called";
                    // exit;
                    $usersdeleteresponse = $this->delete("users", array("id" => $_GET['userid']));

                    $DeleteRes = $this->delete("users", array("id" => $_GET['userid']));
                    if ($DeleteRes['Code'] == 1) {
                        header("location:adminallusers");
                    }

                    break;

                case '/logout':
                    session_destroy();
                    header("location:login");
                    break;
            }
        } else {
            header("location:home");
        }

        ob_flush();
    }
}


$controller = new controller;

// echo "<pre>";
// print_r ($_SERVER);
// echo "</pre>";
