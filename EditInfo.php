<?php
require("UserCheck.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit Info</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
    <script src="./js/jquery-3.1.1.js"></script>
    <script src="./content/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <script src="./js/editinfo.js"></script>
    <!--<script src="./content/bootstrap-3.3.7-dist/js/npm.js"></script>-->
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./content/bootstrap-3.3.7-dist/css/bootstrap.css" />
    <link rel="stylesheet" href="./content/bootstrap-3.3.7-dist/css/bootstrap-theme.css" />
    <link rel="stylesheet" href="./css/editInfo.css" />
    <style>
		
		</style>
	</head>
	<body>
	<form action="EditinfoPHP.php" method="post" id="form" enctype="multipart/form-data">
		<div class="reg-form">
			<h2>Edit Info</h2>
			<br>
			<span class="">
				<div class="container">
				<div class="row">
					<div class="col-lg-3"><label class="form-control label label-warning" style="
					font-size:20px;">Change Password</label></div>
					<div class="col-lg-9"></div>
				</div><br/>
				
				
				<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><div class="input-group">
                    <input type="password" placeholder="Old Password" class="form-control" id="oldPassword" name="oldpassword">
                    <div class="input-group-btn">
                    <button type="button" class="btn btn-default" id="showoldpass"><span id="eyeoldpass" class="glyphicon glyphicon-eye-open"></span></button>
                    </div></div>
                 </div>
                   <div class="col-lg-4"></div>
                    </div>
                    
                    <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><h3 id="oldPasswordErr" name="oldpassworderr" class=""></h3>
                 </div>
                   <div class="col-lg-4"></div>
                    </div>
				
				
				<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><div class="input-group">
                    <input type="password" placeholder="New Password" class="form-control" id="password" name="password">
                    <div class="input-group-btn">
                    <button type="button" class="btn btn-default" id="showpass"><span id="eyepass" class="glyphicon glyphicon-eye-open"></span></button>
                    </div></div>
                 </div>
                   <div class="col-lg-4"></div>
                    </div>
                    
                    <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><h3 id="passwordErr" name="passworderr" class=""></h3>
                 </div>
                   <div class="col-lg-4"></div>
                    </div>
                    
                    
                    <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><div class="input-group">
                    <input type="password" placeholder="Confirm Password" id="confPassword" name="confpassword" class="form-control">
                    <div class="input-group-btn">
                    <button type="button" class="btn btn-default" id="showconfpass"><span id="eyeconfpass" class="glyphicon glyphicon-eye-open"></span></button>
                    </div></div>
                 </div>
                   <div class="col-lg-4"></div>
                    </div>
                    
                      <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><h3 id="confPasswordErr" name="confpassworderr" class=""></h3>
                 </div>
                   <div class="col-lg-4"></div>
                    </div>
                    
				</div>
			</span>
			
				<span class="">
				<div class="container">
				<div class="row">
					<div class="col-lg-3"><label class="form-control label label-info" style="
					font-size:20px;">Basic</label></div>
					<div class="col-lg-9"></div>
				</div>
				<br>
				
             <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
                    <input type="text" placeholder="Contact Number" name="contactnumber" id="contactNumber" class="form-control">
                 </div>
					<div class="col-lg-4"></div>
                    </div>
				
				<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><div class="input-group">
                    <h3 id="contactNumberErr" name="contactnumbererr" class=""></h3>
                   </div>
                 </div>
					<div class="col-lg-4"></div>
                    </div>
				
                    
                      <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
                    <input type="text" placeholder="Email" name="email" id="email" class="form-control">
                 </div>
					<div class="col-lg-4"></div>
                    </div>
				
				<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><div class="input-group">
                    <h3 id="emailErr" name="emailerr" class=""></h3>
                   </div>
                 </div>
					<div class="col-lg-4"></div>
                    </div>
				
                    <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
                    <input type="text" placeholder="NID" id="nid" name="nid" class="form-control">
                 </div>
					<div class="col-lg-4"></div>
                    </div>
				
				<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><div class="input-group">
                    <h3 id="nidErr" name="niderr" class=""></h3>
                   </div>
                 </div>
					<div class="col-lg-4"></div>
                    </div><br>

				</div>
			</span>
			
			 <span class="">
				<div class="container">
				<div class="row">
					<div class="col-lg-3"><label class="form-control label label-default" style="
					font-size:20px;">Address</label></div>
					<div class="col-lg-9"></div>
				</div>
				<br>
				
              <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
                    <input type="text" placeholder="Street" id="street" name="street" class="form-control">
                 </div>
					<div class="col-lg-4"></div>
                    </div>
				
				<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><div class="input-group">
                    <h3 id="streetErr" name="streeterr" class=""></h3>
                   </div>
                 </div>
					<div class="col-lg-4"></div>
                    </div>
				
                    
                    <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
                    <input type="text" list="Thana" placeholder="Thana"id="thana" name="thana" class="form-control">
                    <datalist id="Thana">
                    	
                    </datalist>
                 </div>
					<div class="col-lg-4"></div>
                    </div>
				
				<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><div class="input-group">
                    <h3 id="thanaErr" name="thanaerr" class=""></h3>
                   </div>
                 </div>
					<div class="col-lg-4"></div>
                    </div>
                    
                     <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
                    <input type="text" list="District" name="district" placeholder="District" id="district" class="form-control">
                    <datalist id="District">
                    	
                    </datalist>
                 </div>
					<div class="col-lg-4"></div>
                    </div>
				
				<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><div class="input-group">
                    <h3 id="districtErr" name="districterr" class=""></h3>
                   </div>
                 </div>
					<div class="col-lg-4"></div>
                    </div>
				
                     <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
                    <input type="text" list="Division"  name="division" placeholder="Division" id="division" class="form-control">
                    <datalist id="Division">
                    	
                    </datalist>
                 </div>
					<div class="col-lg-4"></div>
                    </div>
				
				<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><div class="input-group">
                    <h3 id="divisionErr" name="divisionerr" class=""></h3>
                   </div>
                 </div>
					<div class="col-lg-4"></div>
                    </div><br>
                    
				</div>
			</span>
			
			 <span class="">
				<div class="container">
				<div class="row">
					<div class="col-lg-3"><label class="form-control label label-success" style="
					font-size:20px;">Profile Picture</label></div>
					<div class="col-lg-9"></div>
				</div>
				<br>
				
                 <div class="row">
                   	<div class="col-lg-3"></div>
                   	<div class="col-lg-4"><img id="pic" style="width:260px;height:250px;"></div>
                   	<div class="col-lg-5"></div>
                   </div>
                   
                   <div class="row">
                   	<div class="col-lg-3"></div>
                   	<div class="col-lg-3"><input type="file" name="fileToUpload" id="fileToUpload" class="form form-control"></div>
                   	<div class="col-lg-6"></div>
                   </div>

                   <div class="row">
                   	<div class="col-lg-3"></div>
                   	<div class="col-lg-3"><h3 id="imageErr" name="imageerr" class=""></h3></div>
                   	<div class="col-lg-6"></div>
                   </div>
                   <br>
                   
                    <div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-2"> <button type="button" id="finish" class="form-control btn btn-success">EDIT</button></div>
				<div class="col-lg-1"></div>
				<div class="col-lg-2">
                <button type="button" id="can" class="form-control btn btn-danger">CANCEL</button>
                 </div>
                   <div class="col-lg-4"></div>
				   <div class="col-lg-2"></div>
					
                    </div>
				</div>
			</span>
		</div>
		</form>
	</body>
</html>