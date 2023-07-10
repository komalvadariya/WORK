<?php
include("header.php");
if (isset($_POST['btn-login'])) {

    if ($_COOKIE['username'] == $_POST['username']) {
        $_SESSION['UserData'] = array("username" => $_COOKIE['username']);
        header("location:index.php");
        echo "Login Success";
    } else {
        echo "Invalid user";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-4 offset-lg-4">
                <div class="card border-primary mb-3">
                    <div class="card-header text-center">Login</div>
                    <div class="card-body">
                        <form method="post">
                            <div class="row">
                                <div class="col">
                                    <input type="text" placeholder="Enter User Name" class="form-control" name="username" id="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="password" placeholder="Enter Password" class="form-control" name="password" id="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col text-center">
                                    <input type="submit" class="btn btn-primary" name="btn-login" id="">
                                    <input type="reset" class="btn btn-danger" name="" id="" value="cancel">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col text-center">
                                    <a href="register.php">Click here for create new account</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>