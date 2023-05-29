<?php

require_once('../db.php');
$obj = new Db();
$bal = $obj -> bal();

$code = $_POST['code'];
$amm = $_POST['money'];
$naam = $_POST['naam'];
$date1 = $_POST['date1'];
$time1 = $_POST['time1'];

$ok = mysqli_fetch_row($bal);
$calc = $ok[1] + $amm;
echo "<br><br>$calc<br><br>";

$che = $obj -> dep($code, $naam, $amm, $date1, $time1);
if ($che) {
    $update = $obj -> mainup($calc, $date1, $time1);
    if ($update) {
        $act = $naam."Deposite ".$amm." Date:- ".$date1." Time:- ".$time1;
        $lo = $obj->log($act, $date1, $time1);
        if ($lo) {
            echo "SucessFully All Proccess Complete!";
        }else {
            echo "Log Register Fail!";
        }
    }else {
        echo "Main Table Fail To update Ammount!";
    }
}else{
    echo "Deposit Log Error";
}


?>