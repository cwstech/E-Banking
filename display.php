<?php
include('server.php');
$obj = new ConnectDB();
$r = $obj->display_acc_type();

while ($display = mysqli_fetch_array($r)) {
    echo $display[0] . "  " .  $display[1] . "<br/>";
    echo "<a href='update_acc_type.php?aid=$display[0]'>Update</a><br />";
    echo "<a href='delete_acc_type.php?aid=$display[0]'>Delete</a>";
}
