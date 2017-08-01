<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
    <script src="./js/jquery-3.1.1.js"></script>
    <script src="./content/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <script src="./js/registration.js"></script>
    <!--<script src="./content/bootstrap-3.3.7-dist/js/npm.js"></script>-->
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./content/bootstrap-3.3.7-dist/css/bootstrap.css" />
    <link rel="stylesheet" href="./content/bootstrap-3.3.7-dist/css/bootstrap-theme.css" />
    <link rel="stylesheet" href="./css/register.css" />
    <style>
		
		</style>
	</head>
	<body>
		<div class="reg-form">
		<form action="RegisterPHP.php" method="post" id="form" enctype="multipart/form-data">
			<h2>Register Here</h2><a class="link" href="Login.php">Go to Log In</a>
			<br>
			<span id="essential" class=" ">
				<div class="container">
				<div class="row">
					<div class="col-lg-3"><label class="form-control label label-warning" style="
					font-size:20px;">Essential</label></div>
					<div class="col-lg-9"></div>
				</div><br/>
				
				
				<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><input type="text" class="form-control" name="username" placeholder="Username " id="userName"/>
				</div>
				<div class="col-lg-4"></div>
				</div>
				
				<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><label class="" id="userNameErr" name="usernameerr"></label>
				</div>
				<div class="col-lg-4"></div>
				</div>
				
				
				<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><div class="input-group">
                    <input type="password" placeholder="Password" class="form-control" id="password" name="password">
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
                    
                    
                    <div class="row">
				<div class="col-lg-6"></div>
				<div class="col-lg-2">
                <button type="button" id="nextessential" class="form-control btn btn-primary">NEXT <span class="glyphicon glyphicon-circle-arrow-right"></span></button>
                 </div>
                   <div class="col-lg-4"></div>
                    </div>
				</div>
			</span>
			
				<span id="basic" class="nodisplay">
				<div class="container">
				<div class="row">
					<div class="col-lg-3"><label class="form-control label label-info" style="
					font-size:20px;">Basic</label></div>
					<div class="col-lg-9"></div>
				</div>
				<br>
				<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-2"><input type="text" name="title" placeholder="Title" list="Title" id="title" class="form-control" >
				<datalist id="Title">
					</datalist>
				</div>
				<div class="col-lg-3"><input type="text" class="form-control" name="firstname" placeholder="First Name " id="firstName"/>
				</div>
				<div class="col-lg-2"><input type="text" class="form-control" name="lastname" placeholder="Last Name " id="lastName"/>
				</div>
				<div class="col-lg-4"></div>
				</div>
				
				      <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-2"><h3 id="titleErr" name="titleerr" class=""></h3></div>
				<div class="col-lg-3"><h3 id="firstNameErr" name="firstnameerr" class=""></h3></div>
				<div class="col-lg-2">
				<h3 id="lastNameErr" name="lastnameerr" class=""></h3></div>
				<div class="col-lg-4"></div>
				</div>
				
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

                   
                    <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-2"><button type="button" id="prebasic" class="form-control btn btn-warning"><span class="glyphicon glyphicon-circle-arrow-left"></span> PREVIOUS</button></div>
				<div class="col-lg-3"></div>
				<div class="col-lg-2">
                <button type="button" id="nextbasic" class="form-control btn btn-primary">NEXT <span class="glyphicon glyphicon-circle-arrow-right"></span></button>
                 </div>
                   <div class="col-lg-4"></div>
					
                    </div>
				</div>
			</span>
			
			 <span id="address" class="nodisplay">
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
                    

                   
                    <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-2"><button type="button" id="preaddress" class="form-control btn btn-warning"><span class="glyphicon glyphicon-circle-arrow-left"></span> PREVIOUS</button></div>
				<div class="col-lg-3"></div>
				<div class="col-lg-2">
                <button type="button" id="nextaddress" class="form-control btn btn-primary">NEXT <span class="glyphicon glyphicon-circle-arrow-right"></span></button>
                 </div>
                   <div class="col-lg-4"></div>
					
                    </div>
				</div>
			</span>
			
			 <span id="propic" class="nodisplay">
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
				<div class="col-lg-1"></div>
				<div class="col-lg-2"><button type="button" id="prepropic" class="form-control btn btn-warning"><span class="glyphicon glyphicon-circle-arrow-left"></span> PREVIOUS</button></div>
				<div class="col-lg-3"></div>
				<div class="col-lg-2">
                <button type="button" id="finish" class="form-control btn btn-success" >FINISH</button>
                 </div>
                   <div class="col-lg-4"></div>
					
                    </div>
				</div>
			</span>
			</form>
		</div>
	</body>
</html>