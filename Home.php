<?php
require("UserCheck.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home Rent</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
    <script src="./js/jquery-3.1.1.js"></script>
    <script src="./content/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <script src="./js/home.js"></script>
    <!--<script src="./content/bootstrap-3.3.7-dist/js/npm.js"></script>-->
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./content/bootstrap-3.3.7-dist/css/bootstrap.css" />
    <link rel="stylesheet" href="./content/bootstrap-3.3.7-dist/css/bootstrap-theme.css" />
    <link rel="stylesheet" href="./css/home.css" />
    <style>
		
	</style>
	
	</head>
<body>
    <div class="reg-form" >
    
    <div class="container">
     <div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-4"> </div>
    <div class="col-lg-2"></div>
    <div class="col-lg-4"><h2 style="font-size: 15px;">Contact Us: 019########</h2></div>
    <div class="col-lg-1"></div>
   </div>
     <div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-4"><h2>Home Rent</h2> </div>
    <div class="col-lg-3"></div>
    <div class="col-lg-1"><label id="username">Username</label></div>
    <div class="col-lg-2"><img id="img" width="100px"; height="100px";/></div>
    <div class="col-lg-1"></div>
   </div>
 <br>
    <div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
  <ul class="nav nav-tabs">
  <li role="presentation" class="active" style="padding-right: 5px;"><a href="#">Home</a></li>
  <li role="presentation" style="padding-right: 5px;"><a id="profile" href="#">Profile</a></li>
  <li role="presentation" style="padding-right: 5px;"><a href="EditInfo.php">Edit Info</a></li>
  <li role="presentation" style="padding-right: 5px;"><a href="Notifications.php" target="_blank">Notifications<span class="badge" id="mess" style="background-color: dodgerblue;"></span></a></li>
  <li role="presentation" style="padding-right: 5px;"><input placeholder="Search" id="search" list="Dhaka" type="text" class="form form-control" style="width:270px;">
  <datalist id="Dhaka">
  	
  </datalist></li>
  <li role="presentation" style="padding-right: 5px;"><button type="button" class="form-control">Search</button></li>
  <li role="presentation" style="padding-right: 5px;"><input type="radio" id="north" name="dhaka" value="NorthDhaka" class="form radio" ><label >North </label></li>
  <li role="presentation" style="padding-right: 5px;"><input type="radio" id="south" name="dhaka" value="SouthDhaka" class="form radio"><label >South </label></li>
  <li role="presentation" style="padding-right: 5px;"><a href="LogOut.php">Log Out</a></li>
   </ul>
   </div>
		<div class="col-lg-1"></div>
   </div>
   <br>
   <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-10" id="card">
				</div>
				<div class="col-lg-1"></div>
			</div>
   </div>
	</div>
</body>
</html>
<script>
	function goDetail(name)
	{
		window.open("./Details.php?propertyname="+name);
	}
</script>