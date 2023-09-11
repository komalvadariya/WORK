<?php
session_start();
session_destroy();

setcookie("username", "", time() - 1 * 60 * 60);
setcookie("password", "", time() - 1 * 60 * 60);
setcookie("email", "", time() - 1 * 60 * 60);
header("location:login.php");
