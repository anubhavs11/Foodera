<?php
  session_start();
    require 'header.php';
    require 'pdo.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="w3.css">

    <style type="text/css">
    	.input-group>button{
    		background-color: #ded8d8;
    		font-size: 18px;
    		border-radius: 0px;
    	}
    	#login_el{
    		font-size:18px;
    		box-shadow: 0 0 black;
    		margin-top: 20px;
    		font-weight: 300;
    		font-family:  -webkit-pictograph ;
    		font-size: 18px;
    		width: 80%;
    	}
      #login_btns{
        width:80%;
      }
    </style>
     <script src="../bootstrap/jquery.min.js"></script>
      <script src="../bootstrap/js/bootstrap.min.js"></script>
    <div class="container">
      	<div class="row">
      		<div style="margin-top:40px;" class="col-lg-8 col-lg-offset-3 col-md-9 col-sm-12 col-xs-12 ">
                  <?php
                        if(isset($_POST['mob_no'])&&isset($_POST['pass'])){
                            $_SESSION['mobile_no']=$_POST['mob_no'];
                          if(!empty($_POST['mob_no'])&&!empty($_POST['pass'])){
                            $stmt=$db->prepare("SELECT * FROM users WHERE mob_no=:mob_no AND password=:pass");
                              $stmt->bindParam(":mob_no",$_POST['mob_no']);
                              $stmt->bindParam(":pass",$_POST['pass']);
                              $stmt->execute();
                              $count=$stmt->rowCount();
                              if($count>0){
                                ?>
                              <script type="text/javascript">
                                window.location = "home.php";
                              </script>
                              <?php
                              }
                              else{
                                ?>
                                <div class="alert alert-warning">
                                    <h4 style='color:red;'>Invalid login details</h4>
                                </div>
                               <?php
                              }
                          }
                        }
                  ?>
                    <form action="login.php" method="post">
                      <h4>Registered Mobile Number</h4>
                      <input required id="login_el" name="mob_no" class="form-control" type="text" placeholder="Mobile Number"/>
                      <h4>Your Password</h4>
                      <input required id="login_el" name="pass" class="form-control" type="password" placeholder="Password" style="font-size:18px" />
                      <br>
                      <button id="login_btns" style="background-color: #5ab55d;" type="submit" class="btn btn-default btn-block" 
                      href="#">Login</button>
                    </form>
                    <br>
                    <a href="signup.php"><h4> Create an Account </h4></a>
                </div>
      			</div>
			  </div>
		</div>
	</div>