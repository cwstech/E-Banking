<?php
include('server.php');


if ($_FILES["file"]["error"] > 0) {
    echo "Reurn code: " . $_FILES["file"]["error"];
} else {
    if (file_exists($_FILES["file"]["name"])) {
        echo $_FILES["file"]["name"] . "Exits";
    } else {
        if (!$_FILES["file"]["type"] == "jpg" || !$_FILES["file"]["type"] == "png" && !$_FILES["file"]["size"] > 1 && !$_FILES["file"]["size"] < 1100000000000) {
            echo $_FILES["file"]["type"] . " Not Correct";
            echo $_FILES["file"]["size"] . " is to big";
        } else {
            move_uploaded_file($_FILES["file"]["tmp_name"], $data = "Image/" . $_FILES["file"]["name"]);
            echo "image Stored" . "Image/" . $_FILES["file"]["name"];
            echo "<a href='welcome.php'>Go to gare</a>";
        }
    }
}
$obj = new ConnectDB();
$obj->img_insert($data);
