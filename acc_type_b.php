<?php

use FTP\Connection;

include('server.php');
$name = $_POST['name'];

$obj = new ConnectDB();
$result = $obj->insert_acc_type($name);

if ($result) {
    echo "Data Inserted";
} else {
    echo "Data Not Inserted";
}
