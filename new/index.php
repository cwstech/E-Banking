<?php
require_once('db.php');
$obj = new DB();
$res = $obj -> bal();
$dis = mysqli_fetch_row($res);

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>

<body>
 
  <div class="flex">
  <div class="element-center">
    
    <div id="acctBalance">
        
            <span class="wrap"></span>
        </a>
        <h1>
            Total Balance
        </h1>
        <label id="acctBalanceLbl"><?php echo $dis[1]; ?></label>
    </div>

    <div id="inputs">
        <h2>
            Deposit
        </h2>
        <!-- <input type="text" id="userDeposit" required> -->
        <button id="btnDeposit" ><a href="deposit/" style="color: white;">Deposit</a></button>

        <h2>
            Withdraw
        </h2>
        <!-- <input type="text" id="userWithdraw" required> -->
        <button id="btnWithdraw"><a href="withdraw/" style="color: white;">Withdraw</button>
    </div>
  </div>
  </div>

</body>

</html>