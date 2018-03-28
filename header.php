<script>
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            $('#search').hide();
        }
        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            $('#search').show();
        }
    </script>
    <style>
        #headitems{
          font-size: 18px;
        }
        #login_btn{
          margin-top: 1.4px;
        }
        .navbar-default .navbar-nav>li>a,.navbar-default .navbar-nav>li>a:hover,.navbar-default .navbar-nav>li>a:active,.navbar-default .navbar-nav>li>a:visited {
            color: #fff;
            font-size: 18px;
        }
        
        #slider{
            margin-left: 5px;
            box-shadow: 0 0 black;
        }
        .input-group>*{
            width: 40%;
            border-color: #20ac76;
            height: 50px;
        }
        .input-group>button{
            background-color: #ded8d8;
            font-size: 18px;
            border-radius: 0px;
        }
        #login_el{
                box-shadow: 0 0 black;
                margin-top: 20px;
                font-weight: 200;
                font-family: cursive;
                font-size: 18px;
                border-color: #cbffc0;
        }
        #login_btns,#signup_btns{
                margin-top: 20px;
                height: 40px;
                font-size: 18px;
                color: white;
        }
        #modal_header_button{
               font-size: 18px;
    font-weight: 400;
    font-family: sans-serif;
    border-color: white;
    background-color: #eaeaea;
        }
        #logo{
            color: #fff;
            font-family: inherit;
            font-size: 40px;
            margin-left:40px;
        }
        #logo_xs{
            color: #fff;
            font-family: inherit;
            font-size: 25px;
        }
      </style>
      <head>
          <title>Foodera</title>
      </head>
<body onload="w3_close();">
    <div class="hidden-lg hidden-md hidden-sm">
        <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;"   id="mySidebar">
            <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
            <a href="login.php" class="w3-bar-item w3-button">Login or Sign Up</a>
        </div>
    </div>
    <nav style="background-color: #ea5b31;border-color:#ea5b31; " class="navbar navbar-default">
        <div style="background-color: #ea5b31" class="navbar-top-fixed"> 
            <ul class="nav navbar-nav visible-xs inline btn-group">
                <li class="inline btn-group"><a id="slider" class="btn" onclick="w3_open()"> &#9776;</a>
                    <a id="logo_xs" style="color:white;" class="btn" href="#" >Foodera</a>
                </li>
            </ul>
            <div class="navbar-header navbar-left hidden-xs">
              <a id="logo" class="navbar-brand" href="#">Foodera</a>
            </div></p> 
          <div class="navbar-header navbar-right">            
            <ul class="nav navbar-nav visible-sm visible-md visible-lg">
                <li  style="margin-right:80px;" id="login_btn" ><a style="color:white;" data-toggle="modal" href="#loginModal">Login or Sign Up</a></li>
            </ul>
          </div>
        </div>
    </nav>
    
    <div class="container">
        <div class="row">
    <div style="margin-top:40px;" class="col-lg-12 col-xs-12 col-sm-11 col-md-10">
        <div class="modal fade" tabindex="-1" id="loginModal" data-backdrop="static">
          <div class="modal-dialog modal-md">
              <div class="modal-content">
                    <div class="modal-header">
                      <div class="btn-group" style="width: 100%;">
                        <button style="width: 10%;margin-top: 5px;" type="button" class="close" data-dismiss="modal">X</button>                    
                        <button style="width: 45%;" id="modal_header_button" class="btn btn-default" data-toggle="tab" href="#login">Login</button>
                        <button style="width: 45%;" id="modal_header_button" class="btn btn-default" data-toggle="tab" href="#signup">Sign-Up</button>
                      </div>
                    </div>
                    <div class="modal-body">
                        <div class="tab-content">
                            <div id="login" class="tab-pane in active">
                              <form action="login.php" method="post">
                                <h4>Registered Mobile Number</h4>
                                <input required style="width: 90%;" id="login_el" name="mob_no" class="form-control" type="text" placeholder="Mobile Number"/>
                                <h4>Your Password</h4>
                                <input required style="width: 90%;"  id="login_el" name="pass" class="form-control" type="password" placeholder="Password"  />
                                <button id="login_btns" style="background-color: #5ab55d;width: 90%;" type="submit" class="btn btn-default btn-block" 
                                href="#">Login</button>
                              </form>
                            </div>
                            <div id="signup" class="tab-pane">
                              <form action="signup.php" method="post">
                                <h4>Your Name</h4>
                                <input required style="width: 90%;" id="login_el" name="name" class="form-control" type="text" placeholder="Name"/>
                                <h4>Registered Mobile Number</h4>
                                <input required style="width: 90%;" id="login_el" name="mob_no" class="form-control" type="text" placeholder="Mobile Number"/>
                                <h4>Your Password </h4>
                                <input required style="width: 90%;" id="login_el" name="pass" class="form-control" type="password" placeholder="Password" style="font-size:18px" />
                                <button style="width: 90%;background-color: #5ab55d;" id="signup_btns" type="submit" class="btn btn-default btn-block" href="#">Sign-Up</button>
                              </form>
                            </div>
                      </div>
                    </div>
                      
              </div>
          </div>
        </div>
    </div>
      </div>
</div>
</body>
</html>
