<?php
require_once('../db.php');
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
<form method="post" action="back.php">
    <div id="inputs">
        <h2>
            UPI Trangaction ID
        </h2>
        <input type="text" id="userDeposit" name="code" required>
        <!-- <button id="btnDeposit" ><a href="deposit/" style="color: white;">Deposit</a></button> -->

        <h2>
            Ammount
        </h2>
        <input type="text" id="userWithdraw" name="money" required>
        <!-- <button id="btnWithdraw"><a href="withdraw/" style="color: white;">Withdraw</button> -->
        <h2>
            Payer Name
        </h2>
        <input type="text" id="userWithdraw" name="naam" required>
        <!-- <button id="btnWithdraw"><a href="withdraw/" style="color: white;">Withdraw</button> -->
        <h2>
            Date
        </h2>
        <input type="Date" id="userWithdraw" name="date1" required>
        <!-- <button id="btnWithdraw"><a href="withdraw/" style="color: white;">Withdraw</button> -->
        <h2>
            Time
        </h2>
        <input type="Time" id="userWithdraw" name="time1" required><br><center>
        <!-- <button id="btnWithdraw"><a href="withdraw/" style="color: white;">Withdraw</button> -->
<h2>    <input type="submit" id="btWithdraw"></h2>
    </div>
</form>
  </div>
  </div>

</body>

</html>