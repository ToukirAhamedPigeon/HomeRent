<?php
require("AdminCheck.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
    <script src="./js/jquery-3.1.1.js"></script>
    <script src="./content/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <script src="./js/admin.js"></script>
    <!--<script src="./content/bootstrap-3.3.7-dist/js/npm.js"></script>-->
		<script>
		function confirmbooking(id,property,user)
	{
		alert("good");
		 var dataPost = {
                        "id":id,
			            "property":property,
			            "user":user
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "AdminPHP.php",
                        data: { confirmbooking: dataString },
                        type: 'POST',
                        success: function (response)
                        {
							alert(response);
							 getBookingSearch();
						}
					});
	}
	
		</script>
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
    <div class="col-lg-3"><h2>Admin</h2> </div>
    <div class="col-lg-3"></div>
    <div class="col-lg-1"></div>
    <div class="col-lg-2"></div>
    <div class="col-lg-1"></div>
   </div>
   <br>
    <div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
   <ul class="nav nav-tabs">
  <li role="presentation" class="active" style="padding-right: 16px;"><a href="#">Admin</a></li>
  <li role="presentation" style="padding-right: 16px;"><a href="./Home.php" target="_blank">Home</a></li>
  <li role="presentation" style="padding-right: 16px;"><a href="CreateAdd.php" target="_blank">Create Add</a></li>
  <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      Actions <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      <li ><a onClick="viewproperties()">Properties</a></li>
  <li><a onClick="viewusers()">Users</a></li>
   <li><a onClick="viewbooks()">Bookings</a></li>
    </ul>
  </li>
 <li role="presentation" style="padding-right: 16px;"><a href="LogOut.php">Log Out</a></li>
</ul>
</div>
 <div class="col-lg-1"></div>
  </div>
  <br>
 <div class="row">
 <div class="col-lg-1"></div>
 <div class="col-lg-10">
 	<span id="first" class="nodisplay">
 	 <div class="row">
     <div class="col-lg-12"><input type="text" id="searchUser" class="form-control" placeholder="Search User by Name"/>
     </div>
	 </div>
	 <br>
	 <div class="row">
     <div class="col-lg-12" id="users">
     	
     </div>
	 </div>
 </span>
 	<span id="second">
    <div class="row">
     <div class="col-lg-12"><input type="text" id="searchProperty" class="form-control" placeholder="Search Property by Name"/>
     </div>
	 </div>
	 <br>
	 <div class="row">
     <div class="col-lg-12" id="properties">
     	
     </div>
	 </div>
	 </span>
	 <span id="third" class="nodisplay">
    <div class="row">
     <div class="col-lg-12"><input type="text" id="searchBooking" class="form-control" placeholder="Search by Property or User Name"/>
	 </div>
	 </div>
	 <br>
	 <div class="row">
     <div class="col-lg-12" id="book" >
     	
     	
     </div>
	 </div>
	 </span>
 </div>
 <div class="col-lg-1"></div>	
 </div>
   </div>
	</div>
</body>
</html>
<script>
	
	
	function viewproperties()
	{
		$("span").removeClass("nodisplay");
		$("span").addClass("nodisplay");
		$("#second").removeClass("nodisplay");
	}
	function viewusers()
	{
		$("span").removeClass("nodisplay");
		$("span").addClass("nodisplay");
		$("#first").removeClass("nodisplay");
	}
	function viewbooks()
	{
		$("span").removeClass("nodisplay");
		$("span").addClass("nodisplay");
		$("#third").removeClass("nodisplay");
	}
</script>