<?php
class ConnectDB
{
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "pay";
    public $c;

    public function __construct()
    {
        $this->c = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        // if ($this->c) {
        //     echo "Connection Done";
        // } else {
        //     echo "Connection Failed";
        // }
    }

    // Display data
    public function display($id)
    {
        $select = "SELECT * FROM resive145 WHERE id = '$id'";
        $result = mysqli_query($this->c, $select);
        return $result;
    }
    // Inserted data
    public function insert_acc_type($name)
    {
        $insert = "insert into acc_type values('', '$name')";
        $result = mysqli_query($this->c, $insert);
        return $result;
    }


    // Update Data
    public function update_acc_type($name, $aid)
    {
        $update = "update acc_type set typeName = '$name' where typeId = '$aid'";
        $result = mysqli_query($this->c, $update);
        return $result;
    }

    // Delete data
    public function delete_acc_type($aid)
    {
        $delete = "delete from acc_type where typeId = '$aid'";
        $result = mysqli_query($this->c, $delete);
        return $result;
    }

    // Img process
    public function img_insert($path)
    {
        $insert = "insert into img values('','$path')";
        $result = mysqli_query($this->c, $insert);
        return $result;
    }
    public function img_fetch()
    {
        $disply = "select * from img";
        $result = mysqli_query($this->c, $disply);
        return $result;
    }
}
$obj = new ConnectDB();
