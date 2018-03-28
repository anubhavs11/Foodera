  <?php
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
          #time_day>h4,#to>h4{
                margin-bottom: 23.5px;
          }
          pre{
            background-color: white;
            border-color:white;
          }
          #add_btn{
            display: block;
            width: 100%;
            height: 50px;
            color: white;
            font-size: 18px;
            background-color: #a94442;
          }
          #addr>input{
            margin-bottom: 20px;
          }
      </style>
   <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-9 col-sm-10 col-xs-12">
            <form id="addr" action="add_foods.php" method="post">    
                <h2>Adding my restaurant online</h2>
                </br>
                <h4 >Name of restaurant </h4>
                  <input required name="name" class="form-control" type="text" placeholder="Name"/>
                  <h4>Email Address</h4>
                  <input required name="email" class="form-control" type="text" placeholder="Email Address
                  "/>
                </br>
                <h3>Food Type</h3><hr>
                    <select class="form-control">
                        <option>Veg/Non-Veg</option>
                        <option>Veg</option>
                        <option>Non-Veg</option>
                    </select>
                </br>
                <h3  >Address Details</h3><hr>
                <h4>Street Address</h4>
                  <input required name="street" class="form-control" type="text" placeholder="Street Address name"/>
                <h4>Calony</h4>
                  <input required name="district" class="form-control" type="text" placeholder="Calony name"/>
                <h4>City</h4>
                  <input required name="city" class="form-control" type="text" placeholder="City name"/>
                <h4>State</h4>
                  <input required name="state" class="form-control" type="text" placeholder="State  name"/>
                <h4>Zip Code</h4>
                  <input required name="zipcode" class="form-control" type="text" placeholder="Zip Code name"/>
                 <h4>Country</h4>
                  <input required name="country" class="form-control" type="text" placeholder="Country name"/>
                  <br>
                  <h4> Enable Home Delivery <input  class="w3-check" name="delivery" type="checkbox" checked="checked" /> </h4>
                  <hr>
                  <h5></h5>
                  <h4> Enable Pre-order <input data-toggle="modal" href="#premodal" class="w3-check" name="preorder" type="checkbox" /> </h4>
                      <div class="modal" tabindex="-1" id="premodal" data-backdrop="static">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                  <div class="modal-header">
                                <button  type="button" class="close" data-dismiss="modal">X</button>                    
                                    Minimum payment percentage required for preorder
                                  </div>
                                  <div class="modal-body">
                                      <input type="text" name="premoney" value="20%" class="form-control" />
                                  </div>
                                  <div class="modal-footer">
                                    <button class="btn btn-default btn-block" data-dismiss="modal">Submit</button>
                                  </div>
                            </div>
                        </div>
                      </div>
                  <hr>
                  <h4> Live Order <input class="w3-check" name="liveorder" type="checkbox" checked="checked" /> </h4>
                  <hr>
                  <br>
                  <h3>Opening Details</h3><hr>
                <div class="row">
                     <h4 style="margin-left:50%;"><pre>Open Time         Close Time</pre></h4>
                    <div id="time_day" class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <h4>Monday</h4>
                        <h4>Tuesday</h4>
                        <h4>Wednesday</h4>
                        <h4>Thursday</h4>
                        <h4>Friday</h4>
                        <h4>Saturday</h4>
                        <h4>Sunday</h4>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                         <h4><select required name="working1" class="form-control">
                            <option value="open" >Openning</option><option value="close">Closed</option></select> </h4>
                         <h4><select required name="working2" class="form-control">
                            <option value="open">Openning</option><option value="close">Closed</option></select> </h4>
                         <h4><select required name="working3" class="form-control">
                            <option value="open" >Openning</option><option value="close">Closed</option></select> </h4>
                         <h4><select required name="working4" class="form-control">
                            <option value="open" >Openning</option><option value="close">Closed</option></select> </h4>
                         <h4><select required name="working5" class="form-control">
                            <option value="open" >Openning</option><option value="close">Closed</option></select> </h4>
                         <h4><select required name="working6" class="form-control">
                            <option value="open" >Openning</option><option value="close">Closed</option></select> </h4>
                         <h4><select required name="working7" class="form-control">
                            <option value="open" >Openning</option><option value="close">Closed</option></select> </h4>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <h4><input name="from1" class="form-control" type="text" placeholder="From"/></h4>
                        <h4><input name="from2" class="form-control" type="text" placeholder="From"/></h4>                                         
                        <h4><input name="from3" class="form-control" type="text" placeholder="From"/></h4>                                         
                        <h4><input name="from4" class="form-control" type="text" placeholder="From"/></h4>                                         
                        <h4><input name="from5" class="form-control" type="text" placeholder="From"/></h4>                                         
                        <h4><input name="from6" class="form-control" type="text" placeholder="From"/></h4>                                         
                        <h4><input name="from7" class="form-control" type="text" placeholder="From"/></h4>                                         
                    </div>
                    <div id="to" class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                        <h4> to </h4>                                         
                        <h4> to </h4>                                         
                        <h4> to </h4>                                         
                        <h4> to </h4>                                         
                        <h4> to </h4>                                         
                        <h4> to </h4>                                         
                        <h4> to </h4>                                         
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <h4><input name="to1" class="form-control" type="text" placeholder="to"/><h4>                  
                        <h4><input name="to2" class="form-control" type="text" placeholder="to"/><h4>                  
                        <h4><input name="to3" class="form-control" type="text" placeholder="to"/><h4>                  
                        <h4><input name="to4" class="form-control" type="text" placeholder="to"/><h4>                  
                        <h4><input name="to5" class="form-control" type="text" placeholder="to"/><h4>                  
                        <h4><input name="to6" class="form-control" type="text" placeholder="to"/><h4>                  
                        <h4><input name="to7" class="form-control" type="text" placeholder="to"/><h4>                  
                    </div>
                </div>
                </br>
                <button class="btn btn-prmary" type="submit" id="add_btn">Add</button>               
            </form>
            </div>            
        </div>
    </div>
    </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>