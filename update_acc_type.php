<?php
include('server.php');
$id = $_GET['aid'];
$obj = new ConnectDB();
$res = $obj->display_acc_type($id);
$result = mysqli_fetch_array($res);

?>

<!DOCTYPE html>
<html lang="en">

<body>
    <form action="" method="post">
        <input type="text" name="type" value="<?php echo $result[1] ?>">
        <input type="submit" name="submit" value="submit" />
    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['type'];
    $update = $obj->update_acc_type($name, $id);

    if ($update) {
        header("Location: display.php");
    } else {
        echo "raju go to gare";
    }
}

?>