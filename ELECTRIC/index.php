<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'links/link.php';?>
	<?php include 'css/styles.php';?>
	<?php include 'registration.php';?>
	<?php include 'validation.php';?>
</head>
<body>
	<nav class="navbar navbar-expand-lg p-4 bg-dark navbar-dark">
  		<a class="navbar-brand pl-5" href="index.php">Riders Providers</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <div class="navbar-nav ml-auto pr-5">
		      	<button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal1">Login</button>

				<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal2">Signup</button>

		    </div>
		  </div>
	</nav>
	<br>
	<br>
	<br>
	<div class="main-header">
		<div class="row w-100 h-100">
			<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
				<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center mr-3 ">
					<img src="images/SmartCities.jpeg" height=400 width=400>
				</div>
			</div>

			<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
				<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
					<h1>Smart Electric Bill</h1>
				</div>
			</div>
		</div>
	</div>

	
<div class="modal hide fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          	<h4 class="modal-title" id="myModalLabel">Login</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            
          </div>
          <div class="modal-body">
          	<form action="validation.php" method="post">
			  <div class="form-group">
			    <label>Username</label>
			    <input type="text" class="form-control" placeholder="Enter Username" name = "user">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your Username with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label>Password</label>
			    <input type="Password" class="form-control" name = "password" placeholder="Password">
			  </div>
			  
			  <button type="Submit" class="btn btn-primary" name = "submit">Submit</button>
			</form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>



<div class="modal hide fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          	<h4 class="modal-title" id="myModalLabel">Signin</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            
          </div>
          <div class="modal-body">
          	<form action = "registration.php" method="post">
			  <div class="form-group">
			    <label>Username</label>
			    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" name = "user">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label>Password</label>
			    <input type="Password" class="form-control" name = "password" placeholder="Password">
			  </div>
			  <div class="form-group">
			    <label>Mobile Number</label>
			    <input type="tel" class="form-control" name = "phone" placeholder="Number">
			  </div>
			  <div class="form-group">
			    <label>Amount</label>
			    <input type="Number" class="form-control" name = "amount" placeholder="Amount">
			  </div>
			  <button type="Submit" class="btn btn-primary" name = "submit">Submit</button>
			</form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss = "modal">cancel</button>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="container">
    	<div class="row">
    		<div class="col-lg-6 col-md-6 col-sm-12 col-12 order-2 order-lg-2 mr-auto">
    			<p>With the development in technology the average usage of electricity is
				increasing exponentially due to usage of various heavy appliances. The main
				problem the middle class faces is paying the exorbitant amount of bills that
				this generates.</p>
				<p>The only way we can solve this is by limiting our daily use of all major
				electronic appliances, to do this we must have a complete understanding of
				the unit system the electricity boards use to generate the bills. The basic
				definition of units are based on wattage.</p>
				<p>
					All major appliances(like Air conditioner) are connected to a current
					transformer sensor. Current transformers (CTs) are sensors that measure
					alternating current (AC). Using this sensor we can calculate the number of
					units of electricity that a device consumes. The data from the sensor is read
					by the ArduinoUno / Bolt and is sent to RaspberryPi via a Local Area
					Network(LAN) using a Router. The Raspberry Pi gets data from all
					appliances, studies the trends of daily consumptions and generates an
					expected units consumption using which it projects an expected bill
					amount.This data is then transferred to a cloud, which is displayed on a
					web/mobile app. This app works as an interface between the user and the
					device, where the user can set consumption limits and the device
					recommends usage hours and sends alerts on exceeding the limit. This not
					only helps save energy but also helps controlling the bill amount as an
					expense check
				</p>
    		</div>
    		<div class="col-lg-6 col-md-6 col-sm-12 col-12 order-1 order-lg-1 ml-auto">
    			<img src="images/modules.jpeg" height=600 width=500>
    		</div>
    	</div>
    </div>
</body>

<footer class="mt-5 footer-style">
  <div class="text-center container-fluid justify-content-center">
    <p>Copyright By RidersProviders</p>
  </div>
</footer>
</html>