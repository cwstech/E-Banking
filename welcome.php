<?php
session_start();
include('server.php');
$obj = new ConnectDB;
$display = $obj->img_fetch();

while ($result = mysqli_fetch_array($display)) {
    $data = $result[1];
}

if (empty($_SESSION['email']) && empty($_SESSION['pass'])) {
    echo "Please login first";
    header("Location: login.php");
} else {
    if (isset($_SESSION['email']) || isset($_SESSION['pass'])) {
        $e = $_SESSION['email'];
        $p = $_SESSION['pass'];

        echo "Welcome $e <br />";
        echo "<a href='logout.php'>Logout</a><br />";
        echo "<a href='Account_types.php'>Acc type</a><br />";
        echo "<a href='Account_userdetails.php'>Acc user</a><br />";
        echo "<a href='Account_transactions.php'>Acc trans</a><br />";
        echo "<a href='profile.php'>Profile</a><br />";
        echo "<a href='display.php'>Diplay</a><br />";
        echo "<img src='$data'/>";
    }
}
