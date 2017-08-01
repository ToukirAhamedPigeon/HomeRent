<?php
require("UserCheck.php");
?>
<?php
require("connection.php");
if(isset($_REQUEST["username"]))
{
	$username=$_REQUEST["username"];
	echo '<input type="hidden" id="userName" name="username" value="'.$username.'">';
}
else
{
  $username=NULL;
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Profile</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
    <script src="./js/jquery-3.1.1.js"></script>
    <script src="./content/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
		<script src="./js/profile.js"></script>
   <script src="./js/jssor.slider-24.1.5.min.js" type="text/javascript"></script>
    <!--<script src="./content/bootstrap-3.3.7-dist/js/npm.js"></script>-->
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./content/bootstrap-3.3.7-dist/css/bootstrap.css" />
    <link rel="stylesheet" href="./content/bootstrap-3.3.7-dist/css/bootstrap-theme.css" />
    <link rel="stylesheet" href="./css/profile.css" />
    <style>
		
		</style>
	</head>
	<body>
	<form id="form" action="ProfilePHP.php" method="post" enctype="multipart/form-data">
	<div class="container">
		<div class="reg-form">
		    <div class="row">
			    <div class="col-lg-4"></div>
				<div class="col-lg-3"><img id="img" style="height: 200px; width: 200px;"></div>
				<div class="col-lg-3"></div>
				<div class="col-lg-2"></div>
			</div>
				</br>
			<div class="row title">
			    <div class="col-lg-2"></div>
				<div class="col-lg-3"><label style="font-size: 24px;">NAME:</label></div>
				<div class="col-lg-3"><label id="name" style="font-size: 24px;"></label></div>
				<div class="col-lg-4"></div>
			</div>
			<div class="row">
			    <div class="col-lg-2"></div>
				<div class="col-lg-3"><label style="font-size: 24px;">Contact Number:</label></div>
				<div class="col-lg-3"><label id="contactNumber" style="font-size: 24px;"></label></div>
				<div class="col-lg-4"></div>
			</div>
			<div class="row">
			    <div class="col-lg-2"></div>
				<div class="col-lg-3"><label style="font-size:24px;">Email:</label></div>
				<div class="col-lg-3"><label id="email" style="font-size: 24px;"></label></div>
				<div class="col-lg-4"></div>
			</div>
			
            <div class="row">
			    <div class="col-lg-2"></div>
				<div class="col-lg-3"><label style="font-size: 24px;">NID:</label></div>
				<div class="col-lg-3"><label id="nid" style="font-size: 24px;"></label></div>
				<div class="col-lg-4"></div>
			</div>
			<br>
			<div class="row">
			    <div class="col-lg-2"></div>
				<div class="col-lg-3"><label style="font-size: 24px;">ADDRESS:</label></div>
				<div class="col-lg-3"><address id="address" style="font-size: 24px;"></address></div>
				<div class="col-lg-4"></div>
			</div>
			<br>
			
			<div class="row">
          <div class="col-lg-1"></div>
	          <div class="col-lg-10"><h2>Booking History:</h2></div>
	          <div class="col-lg-1"></div>
		    </div>
			<div class="row" id="book">
          <div class="col-lg-2"></div>
	          <div class="col-lg-8"></div>
	          <div class="col-lg-2"></div>
		    </div>
			
		</div>
		</div>
		</form>
	</body>
</html>