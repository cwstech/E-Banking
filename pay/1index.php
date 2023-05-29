
<html lang="en" dir="ltr">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- <script src="js.js"></script> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logox">Logo</label>
      <ul>
          <li><a href="#">Home</a></li>
        <li><a class="activex" href="#">Fund</a></li>
      </ul>
    </nav>
	  <?php
	  if(isset($_POST['id'])){
		include 'server.php';
$a = $_POST['id'];
		  // echo $a;
		  $obj = new ConnectDB();
		  $dis = $obj -> display($a);
$con = 0;
?>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php
	while ($ok = mysqli_fetch_row($dis)) {		
	$con = $con + 1;
								if ($con > 0) {
									?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2 class="raju">Invoice</h2><h3 class="pull-right">UPI ID# <?php echo $a; ?></h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Billed To:</strong><br>
    					UG12<br>
    					Ofira Buisess Hub<br>
    					Opp, Bhagwan Mahavir College,<br>
    					VIP Road, Surat 39017.
    				</address>
    			</div>
    			<!-- <div class="col-xs-6 text-right">
    				<address>
        			<strong>Shipped To:</strong><br>
    					Jane Smith<br>
    					1234 Main<br>
    					Apt. 4B<br>
    					Springfield, ST 54321
    				</address>
    			</div> -->
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Payment Method:</strong><br>
    					UPI<br>
    					jsmith@email.com
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Order Date:</strong><br>
    					March 7, 2014<br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Item</strong></td>
        							<td class="text-center"><strong>Price</strong></td>
        							<!-- <td class="text-center"><strong>Quantity</strong></td> -->
        							<td class="text-right"><strong>Totals</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    			<!-- ----------------------------------- -->
				

					<tr>
						<td>Fund</td>
						<td class="text-center">₹<?php echo $ok[2]; ?></td>
						<!-- <td class="text-center">1</td> -->
						<td class="text-right">₹<?php echo $ok[2] ?></td>
					</tr>
					
					
                                <!-- <tr>
									<td>BS-400</td>
    								<td class="text-center">₹20.00</td>
    								<!-- <td class="text-center">3</td>
    								<td class="text-right">₹60.00</td>
    							</tr>
                                <tr>
									<td>BS-1000</td>
    								<td class="text-center">₹600.00</td>
    								<!-- <td class="text-center">1</td> 
    								<td class="text-right">₹600.00</td>
    							</tr> -->
								
    							<tr>
    								<td class="thick-line"></td>
    								<!-- <td class="thick-line"></td> -->
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right">₹670.99</td>
    							</tr>
    							<tr>
									<td class="no-line"></td>
    								<!-- <td class="no-line"></td> -->
    								<td class="no-line text-center"><strong>Total</strong></td>
    								<td class="no-line text-right">₹685.99</td>
    							</tr>
								<?php	
			
			}else{
				echo "No Data!";
			} 
				echo $con;	
				
							}
							if ($con == 0) {
								echo "No DAta!";
							} 
							?>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>



<?php
	  }else{

		  ?>
    <form method="post">
<!--       <div class="container h-100"> -->
        <br><br>
		<center>
        <div class="searchbar">
          <input class="search_input" type="text" name="id" placeholder="Enter UPI Trangcation ID">
          <button class="search_icon  fa-search" type="submit"></button>
		</center>
          <!-- <a class="search_icon"><i type="submit" class="fas fa-search"></i></a> -->
        </div>
<!--       </div> -->
    </form>
			<?php
	  }
?>
	  
  </body>
</html>