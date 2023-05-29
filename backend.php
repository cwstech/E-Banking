<?php
session_start();
include('server.php');

$email = $_POST['email'];
$pass = $_POST['pass'];

$obj = new ConnectDB();
$c = $obj->display_acc_type();

if (empty($email) || empty($pass)) {
    echo "Please filled all filed";
} else {
    if (!preg_match('/^[a-z0-9@]*$/', $email) && !preg_match('/^[a-zA-Z0-9]*$/', $pass)) {
        echo "Please Enter Vaild Data";
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['pass'] = $pass;

        header("Location: welcome.php");
    }
}
