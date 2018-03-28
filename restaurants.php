<?php
session_start();
require 'pdo.php';
include 'user_header.php';	
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
      img{
      	opacity: 0.4;
      	position: absolute;
      	z-index: -1;
      }
      #addr{
      	margin: 0 0 10px;
	    margin-top: 10px;
	    font-family: sans-serif;
	    text-align: center;
	    font-size: 14px;
      }
      #title-sm{
      	    margin-left: 25%;
		    margin-top: 40px;
		    color: #bb480f;
		    font-size: 80px;
      }
      #title-xs{
      	    margin-left: 25%;
		    margin-top: 40px;
		    color: #bb480f;
		    font-size: 40px;
      }
      #title-lg{
		    margin-top: 40px;
		    color: #bb480f;
		    font-size: 35px;
      }
      #quote-sm{
      	margin-left: 20%;
	    margin-top: 40px;
	    font-size: 50px;
	    font-style: italic;
	    color: #ff5959;
	    font-family: initial;
      }
      #quote-xs{
      	margin-left: 20%;
	    margin-top: 40px;
	    font-size: 20px;
	    font-style: italic;
	    color: #ff5959;
	    font-family: initial;
      }
      #left-col>h5{
      	font-size: 14px;
      }
      #availability>h4{
      	    font-size: 18px;
		    font-family: sans-serif;
		    color: #00a53c;
      }
      #details{
      	color: #868686;
      }
      #footer>button{
      }
      	</style>
      	<?php 
      	$_SESSION['food']='';
      		if(!empty($_POST['resto_name'])){
      			$name=$_POST['resto_name'];
      			$_SESSION['resto_name']=$name;
      		}
      		else{
      			$name=$_SESSION['resto_name'];
      		}
      		
      		
      		$stmt=$db->prepare("SELECT * FROM restaurants WHERE name='$name'");
      		$stmt->execute();
      		$result=$stmt->fetch();
      	?>      	
<body>
	<?php
            foreach($db->query("SELECT * FROM restaurants WHERE name='$name'") as $row){   
        ?>
	<div class="container">
		<div class="row">
			<div class="hidden-lg hidden-md hidden-xs col-sm-12">
      			<img  class="img-responsive" src="<?php echo 'resto_pics/'.$result['image']; ?>" />
      			<h3 id="title-sm"><?php echo $result['name']; ?></h3>
      			<h3 id="quote-sm" >Life begins after food</h3>
      			<hr style="margin-top:35%; ">
      			<p id="addr"><?php echo '<b>Address : </b>'.$result['street'].','.$result['district'].','.$result['city'].','.$result['state'].','.$result['zipcode'].','.$result['country']; ?></p>
      			<div style="text-align: center;margin-top: 20px;" >
      				<div class="row">
      					<div id="availability" class="col-sm-6">
      						<?php
	                    	if($row['delivery']=="on"){
	                    		echo "<h4> Home Delivery Available </h4>";
	                    	}
	                    	else{
	                    		echo "<h4> Home Delivery not Available </h4>";
	                    	}
	                    	if($row['preorder']=="on"){
	                    		echo "<h4> Pre-Order Available </h4>";
	                    	}
	                    	else{
	                    		echo "<h4> Pre-Order not Available </h4>";
	                    	}
	                    	if($row['liveorder']=="on"){
	                    		echo "<h4> Live Order Available </h4>";
	                    	}
	                    	else{
	                    		echo "<h4> Live Order not Available </h4>";
	                    	}
	                    	?>
      					</div>
      					<div class="col-sm-6">
      						<h5><b>Opening Time</b></h5>
		      				<h5>Monday <?php echo $row['from1'].'-'.$row['to1']; ?></h5>
		                    <h5>Tuesday <?php echo $row['from2'].'-'.$row['to2']; ?></h5>
		                    <h5>Wednesday <?php echo $row['from3'].'-'.$row['to3']; ?></h5>
		                    <h5>Thursday <?php echo $row['from4'].'-'.$row['to4']; ?></h5>
		                    <h5>Friday <?php echo $row['from5'].'-'.$row['to5']; ?></h5>
		                    <h5>Saurday <?php echo $row['from6'].'-'.$row['to6']; ?></h5>
		                    <h5>Sunday <?php echo $row['from7'].'-'.$row['to7']; ?></h5>
		                    <br>
      					</div>
      				</div>
	            </div>
			</div>
			<div class="hidden-lg hidden-md hidden-sm col-xs-12">
      			<img  class="img-responsive" src="<?php echo 'resto_pics/'.$result['image']; ?>" />
      			<h3 id="title-xs"><?php echo $result['name']; ?></h3>
      			<h3 id="quote-xs" >Life begins after food</h3>
      			<hr style="margin-top:25%; ">
      			<p id="addr"><?php echo '<b>Address : </b>'.$result['street'].','.$result['district'].','.$result['city'].','.$result['state'].','.$result['zipcode'].','.$result['country']; ?></p>
      			<div style="margin-top: 50px;text-align: center;" class="availability">
	                    <?php
	                    	if($row['delivery']=="on"){
	                    		echo "<h4> Home Delivery Available </h4>";
	                    	}
	                    	else{
	                    		echo "<h4> Home Delivery not Available </h4>";
	                    	}
	                    	if($row['preorder']=="on"){
	                    		echo "<h4> Pre-Order Available </h4>";
	                    	}
	                    	else{
	                    		echo "<h4> Pre-Order not Available </h4>";
	                    	}
	                    	if($row['liveorder']=="on"){
	                    		echo "<h4> Live Order Available </h4>";
	                    	}
	                    	else{
	                    		echo "<h4> Live Order not Available </h4>";
	                    	}
	                    ?>
	                    <br>
	                    <h5><b>Opening Time</b></h5>
      				<h5>Monday <?php echo $row['from1'].'-'.$row['to1']; ?></h5>
                    <h5>Tuesday <?php echo $row['from2'].'-'.$row['to2']; ?></h5>
                    <h5>Wednesday <?php echo $row['from3'].'-'.$row['to3']; ?></h5>
                    <h5>Thursday <?php echo $row['from4'].'-'.$row['to4']; ?></h5>
                    <h5>Friday <?php echo $row['from5'].'-'.$row['to5']; ?></h5>
                    <h5>Saurday <?php echo $row['from6'].'-'.$row['to6']; ?></h5>
                    <h5>Sunday <?php echo $row['from7'].'-'.$row['to7']; ?></h5>
                    <br>
	                </div>
			</div>
			<div id="left-col" class="hidden-sm hidden-xs col-md-3 col-lg-3">
      			<img  class="img-responsive" src="<?php echo 'resto_pics/'.$result['image']; ?>" />
      			<h3 id="title-lg"><?php echo $result['name']; ?></h3>
      			<hr style="margin-top:40%; ">
      				<p id="addr"><?php echo '<b>Address : </b>'.$result['street'].','.$result['district'].','.$result['city'].','
      					.$result['state'].','.$result['zipcode'].','.$result['country']; ?></p>
      					<h4><b>Opening Time</b></h4>
      				<h5>Monday <?php echo $row['from1'].'-'.$row['to1']; ?></h5>
                    <h5>Tuesday <?php echo $row['from2'].'-'.$row['to2']; ?></h5>
                    <h5>Wednesday <?php echo $row['from3'].'-'.$row['to3']; ?></h5>
                    <h5>Thursday <?php echo $row['from4'].'-'.$row['to4']; ?></h5>
                    <h5>Friday <?php echo $row['from5'].'-'.$row['to5']; ?></h5>
                    <h5>Saurday <?php echo $row['from6'].'-'.$row['to6']; ?></h5>
                    <h5>Sunday <?php echo $row['from7'].'-'.$row['to7']; ?></h5>
                    <br>
                    <div class="availability">
	                    <?php
	                    	if($row['delivery']=="on"){
	                    		echo "<h4> Home Delivery Available </h4>";
	                    	}
	                    	else{
	                    		echo "<h4> Home Delivery not Available </h4>";
	                    	}
	                    	if($row['preorder']=="on"){
	                    		echo "<h4> Pre-Order Available </h4>";
	                    	}
	                    	else{
	                    		echo "<h4> Pre-Order not Available </h4>";
	                    	}
	                    	if($row['liveorder']=="on"){
	                    		echo "<h4> Live Order Available </h4>";
	                    	}
	                    	else{
	                    		echo "<h4> Live Order not Available </h4>";
	                    	}
	                    ?>
	                </div>
			</div>
			<div  class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<form action="restaurants.php" method="post">
					<div class="input-group" style="width: 70%;margin-left: 60px;">
						<input style="height: 40px;" class="form-control" name="fooditem" type="text" placeholder="Search for any fooditem..">
							<span class="input-group-btn">
						<button style="height: 40px;margin-bottom: 20px;" type="submit" name="filter" class="btn btn-default">Search</button>
						 </span>
					</div>
				</form>
			  <form action="thanking.php" method="post">
				<nav id="footer" style="text-align: center;" class="navbar-right navbar-inverse navbar-fixed-bottom">
					<?php
						$stmt=$db->prepare("SELECT * FROM restaurants WHERE name=:name");
						$stmt->bindParam(":name",$_SESSION['resto_name']);
						$stmt->execute();
						$row=$stmt->fetch();
					if($row['preorder']=="on"){
					?>
			     <button class="btn btn-primary" name="preorder" type="submit">Pre-Order</button>
			     <?php
			 }if($row['delivery']=="on"){
			     ?>
			     <button class="btn btn-primary" name="order" type="submit">Home-Delivery</button>
			     <?php }if($row["liveorder"]=="on"){ ?>
			     <button class="btn btn-primary" name="liveorder" type="submit">Live-Order</button>
			     <?php } ?>

				</nav>
				<div style="margin-left: 10px;">					
					</br><br>
					
					<?php 
					
					 	if(isset($_POST['filter'])&&isset($_POST['fooditem'])&&!empty($_POST['fooditem'])){
					 		$fooditem=$_POST['fooditem'];
					 			 foreach($db->query("SELECT * FROM $name WHERE name like '%$fooditem%' or details like '%$fooditem%'") as $row){ ?>
					 			 	<div id="a" style="margin:20px;" class="row w3-margin-top" >
								     <div id="myTable" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

								     	<h4 ><?php echo $row['name']; ?></h4>
								     	<h6 id="details"><?php echo $row['details']; ?></h6>
								     </div>
								     <div style="text-align: center;" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
								     	<h6><?php echo $row['price'].' Rs '.$row['quantity']; ?></h6>
								     </div>
								     <div style="text-align: center;" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
								     	<h6> Add to Plate
								     	<input class="w3-check" name="food[]" type="checkbox" value="<?php echo $row['food_id']; ?>" /></h6>
								     </div>
								  </div>
							 	<?php
							 	}
							 }
					 	else{
					 			foreach($db->query("SELECT * FROM $name") as $row){
							 		?>
							 		<div id="a" style="margin:20px;" class="row w3-margin-top" >
							     <div id="myTable" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							     	<h4 ><?php echo $row['name']; ?></h4>
							     	<h6 id="details"><?php echo $row['details']; ?></h6>
							     </div>
							     <div style="text-align: center;" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							     	<h6><?php echo $row['price'].' Rs '.$row['quantity']; ?></h6>
							     </div>
							     <div style="text-align: center;" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							     	<h6> Add to Plate
							     	<input class="w3-check" name="food[]" type="checkbox" value="<?php echo $row['food_id']; ?>" /></h6>
							     </div>
							  </div>	
							  <?php
								}
					 		}
					 		?>			  	
					  <hr>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
<br><br><br><br><br><br>
<?php
}
?>