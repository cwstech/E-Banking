<?php
include('server.php');
$id = $_GET['aid'];
$obj = new ConnectDB();
$delete = $obj->delete_acc_type($id);

if ($delete) {
    header("Location: display.php");
} else {
    echo "raju go to gare";
}
