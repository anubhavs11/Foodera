<?php
session_start();
require 'pdo.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="w3.css">
     <script src="bootstrap/jquery.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
   <style type="text/css">
</style>
<body>
	<div class="contrainer">
		<div class="row">
			<div style="text-align: center;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <br><br><br><br>
        <?php
        if(strlen($_POST['paytm_no'])!=10){
        
          echo "<h3><b style='color:red;'>Payment Failed , Invalid Login Details </b></h3>";
        }
        else{
        ?>
        <h3><b>Paytm Payment gateway </b></h3>
        <form action="thanking.php" method="post">
          <h5><?php echo 'Rs '.$_SESSION['money']; ?> to be payed to <?php echo $_SESSION['resto_name']; ?></h5>
          <button class="btn btn-primary" name="preorder_order" style="height: 40px;font-size: 18px;color: white;">Pay Now</button>
        </form>
        <?php } ?>
			</div>
		</div>
	</div>
</body>