<?php

class DB{
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "banking";
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

    public function mainup($calc, $date1, $time1)
    {
        $sel="UPDATE `main751` SET `bal`='$calc',`l_date`='$date1',`l_time`='$time1' WHERE id='2536';";
        $rs = mysqli_query($this->c, $sel);
        return $rs;
    }
    public function log($act, $date1, $time1)
    {
        $sel="INSERT INTO `log1298`(`action`, `cdate`, `time`) VALUES ('$act','$date1','$time1');";
        $rs = mysqli_query($this->c, $sel); 
        return $rs;
    }
    public function bal()
    {
        $sel="select * from main751;";
        $rs = mysqli_query($this->c, $sel);
        return $rs;
    }
    public function dep($code, $naam, $amm, $date1, $time1)
    {
        $sel="INSERT INTO dep541(`id`, `name`, `amm`, `date`, `time`) VALUES ('$code','$naam', '$amm', '$date1', '$time1');";
        $rs = mysqli_query($this->c, $sel);
        return $rs;
    }
}


?>