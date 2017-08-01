 <?php
require("AdminCheck.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Create Add</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
    <script src="./js/jquery-3.1.1.js"></script>
    <script src="./content/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <script src="./js/createadd.js"></script
    ><!--<script src="./content/bootstrap-3.3.7-dist/js/npm.js"></script>-->
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./content/bootstrap-3.3.7-dist/css/bootstrap.css" />
    <link rel="stylesheet" href="./content/bootstrap-3.3.7-dist/css/bootstrap-theme.css" />
    <link rel="stylesheet" href="./css/createAdd.css" />
    <style>
		
		</style>
	</head>
	<body>
	<form id="form" action="CreateAddPHP.php" method="post" enctype="multipart/form-data">
		<div class="reg-form">
			<h2>Create New Addvertise</h2>
			<br>
			<span class="">
				<div class="container">
				<div class="row">
					<div class="col-lg-3"><label class="form-control label label-warning" style="
					font-size:20px;">Basic</label></div>
					<div class="col-lg-9"></div>
				</div><br/>
				
				
				<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
                    <input type="text" id="name" name="name" placeholder="Name" class="form-control">
                 </div>
                   <div class="col-lg-4"></div>
                    </div>
				
				<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><h3 class="" id="nameErr" name="nameerr"></h3>
				</div>
				<div class="col-lg-4"></div>
				</div>
				
				
				<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
                    <input type="text" list="StartingMonth" id="startingMonth" name="startingmonth" placeholder="Starting Month" class="form-control">
                     <datalist id="StartingMonth">
                    	
                    </datalist>
                 </div>
                   <div class="col-lg-4"></div>
                    </div>
                    
                    <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><h3 class="" id="startingMonthErr" name="startingmontherr"></h3>
                 </div>
                   <div class="col-lg-4"></div>
                    </div>
                    
                     <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
                    <input type="text" id="rent" name="rent" placeholder="Rent per Month in Taka" class="form-control">
                 </div>
                   <div class="col-lg-4"></div>
                    </div>
                    
                      <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><h3 class="" id="rentErr" name="renterr"></h3>
                 </div>
                   <div class="col-lg-4"></div>
                    </div>
                    
                      <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
                    <input type="text" id="advance" name="advance" placeholder="Advance in Taka" class="form-control">
                 </div>
                   <div class="col-lg-4"></div>
                    </div>
                    
                      <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><h3 class="" id="advanceErr" name="advanceerr"></h3>
                 </div>
                   <div class="col-lg-4"></div>
                    </div>
                    
                    <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
                    <input type="text" id="include" name="include" placeholder="Include" class="form-control">
                 </div>
                   <div class="col-lg-4"></div>
                    </div>
                    
                      <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><h3 class="" id="includeErr" name="includeerr"></h3>
                 </div>
                   <div class="col-lg-4"></div>
                    </div>
                    
				</div>
				<br>
				
			</span>
			
				<span class="">
				<div class="container">
				<div class="row">
					<div class="col-lg-3"><label class="form-control label label-info" style="
					font-size:20px; background-color:red;">Property</label></div>
					<div class="col-lg-9"></div>
				</div>
				<br>
				
              <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
                    <input type="text" list="PropertyType" id="propertyType" name="propertytype" placeholder="Property Type" class="form-control">
                    <datalist id="PropertyType">
                    	
                    </datalist>
                 </div>
					<div class="col-lg-4"></div>
                    </div>
				
				<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><div class="input-group">
                    <h3 class="" id="propertyTypeErr" name="propertytypeerr"></h3>
                   </div>
                 </div>
					<div class="col-lg-4"></div>
                    </div>
				
                    
                     <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
                    <input type="text" id="area" name="area" placeholder="Area" class="form-control">
                 </div>
					<div class="col-lg-4"></div>
                    </div>
				
				<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><div class="input-group">
                    <h3 class="" id="areaErr" name="areaerr"></h3>
                   </div>
                 </div>
					<div class="col-lg-4"></div>
                    </div>
				
                    <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
                    <input type="number" id="floor" name="floor" placeholder="Floor" class="form-control" min="-1" max="20" >
                 </div>
					<div class="col-lg-4"></div>
                    </div>
				
				<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><div class="input-group">
                    <h3 class="" id="floorErr" name="floorerr"></h3>
                   </div>
                 </div>
					<div class="col-lg-4"></div>
                    </div>
                    
                    <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
                    <input type="text" list="RentFor" id="rentFor" name="rentfor" placeholder="Rent For" class="form-control">
                    <datalist id="RentFor">
                    	
                    </datalist>
                 </div>
					<div class="col-lg-4"></div>
                    </div>
				
				<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><div class="input-group">
                    <h3 class="" id="rentForErr" name="rentforerr"></h3>
                   </div>
                 </div>
					<div class="col-lg-4"></div>
                    </div><br>
                    
				</div>
			</span>
			<br>
				</span>
			
				<span class="">
				<div class="container">
				<div class="row">
					<div class="col-lg-3"><label class="form-control label label-info" style="
					font-size:20px;">Customer Type</label></div>
					<div class="col-lg-9"></div>
				</div>
				<br>
				
              <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
                   <input type="text" list="CustomerType" id="customerType" name="customertype" placeholder="Customer Type" class="form-control">
                   <datalist id="CustomerType">
                    	
                    </datalist>
                 </div>
					<div class="col-lg-4"></div>
                    </div>
				
				<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><div class="input-group">
                    <h3 class="" id="customerTypeErr" name="customertypeerr" ></h3>
                   </div>
                 </div>
					<div class="col-lg-4"></div>
                    </div>
				
                    
                     <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
                    <input type="number" id="maximumBorder" name="maximumborder"  placeholder="Maximum Border" class="form-control" min="1" max="20">
                 </div>
					<div class="col-lg-4"></div>
                    </div>
				
				<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><div class="input-group">
                    <h3 class="" id="maximumBorderErr" name="maximumbordererr" ></h3>
                   </div>
                 </div>
					<div class="col-lg-4"></div>
                    </div>
				
                    
				</div>
			</span>
			<br>
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
                    <input type="text" list="InDhaka" placeholder="In Dhaka"id="inDhaka" name="indhaka" class="form-control">
                    <datalist id="InDhaka">
                    	
                    </datalist>
                 </div>
					<div class="col-lg-4"></div>
                    </div>
				
				<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><div class="input-group">
                    <h3 id="inDhakaErr" name="indhakaerr" class=""></h3>
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
                    </div>
                    
                    
                    
                    <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
                    <input type="text" id="zipCode" name="zipcode" placeholder="Zip Code" class="form-control">
                 </div>
					<div class="col-lg-4"></div>
                    </div>
				
				<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><div class="input-group">
                    <h3 class="" id="zipCodeErr" name="zipcodeerr"></h3>
                   </div>
                 </div>
					<div class="col-lg-4"></div>
                    </div><br>
                    
				</div>
			</span>
			<br>
			 <span class="">
				<div class="container">
				<div class="row">
					<div class="col-lg-3"><label class="form-control label label-success" style="
					font-size:20px;">Pictures</label></div>
					<div class="col-lg-9"></div>
				</div>
				<br>
				
                   <div class="row">
                   	<div class="col-lg-1"></div>
                   	<div class="col-lg-4"><img style="width:340px;height:250px;" id="pic" alt="Cover Photo"></div>
                   	<div class="col-lg-3"><input type="file" id="fileToUpload" name="fileToUpload" class="form form-control"></div>
                   	<div class="col-lg-4"></div>
                   </div>
                   
                    <div class="row">
                   	<div class="col-lg-1"></div>
                   	<div class="col-lg-4"><h3 class="" id="imageErr" name="imageerr"></h3></div>
                   	<div class="col-lg-5"></div>
                   	<div class="col-lg-2"></div>
                   </div>

                   <br>
                   
                   
                     <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
                   <label class="form-control" style="
					font-size:20px;">Other Pictures</label>
                 </div>
					<div class="col-lg-4"></div>
                    </div>
                    <br>
                     <div class="row">
                   	<div class="col-lg-1"></div>
                   	<div class="col-lg-4"><img style="width:340px;height:250px;" id="pic1" alt="Other Photo 1"></div>
                   	<div class="col-lg-3"><input type="file" id="fileToUpload1" name="fileToUpload1" class="form form-control"></div>
                   	<div class="col-lg-4"></div>
                   </div>
                   
                    <div class="row">
                   	<div class="col-lg-1"></div>
                   	<div class="col-lg-4"><h3 class="" id="imageErr1" name="imageerr1"></h3></div>
                   	<div class="col-lg-5"></div>
                   	<div class="col-lg-2"></div>
                   </div>

                   <br>
                   
						 <div class="row">
                   	<div class="col-lg-1"></div>
                   	<div class="col-lg-4"><img style="width:340px;height:250px;" id="pic2" alt="Other Photo 2"></div>
                   	<div class="col-lg-3"><input type="file" id="fileToUpload2" name="fileToUpload2" class="form form-control"></div>
                   	<div class="col-lg-4"></div>
                   </div>
                   
                    <div class="row">
                   	<div class="col-lg-1"></div>
                   	<div class="col-lg-4"><h3 class="" id="imageErr2" name="imageerr2"></h3></div>
                   	<div class="col-lg-5"></div>
                   	<div class="col-lg-2"></div>
                   </div>

                   <br>
                   
						 <div class="row">
                   	<div class="col-lg-1"></div>
                   	<div class="col-lg-4"><img style="width:340px;height:250px;" id="pic3" alt="Other Photo 3"></div>
                   	<div class="col-lg-3"><input type="file" id="fileToUpload3" name="fileToUpload3" class="form form-control"></div>
                   	<div class="col-lg-4"></div>
                   </div>
                   
                    <div class="row">
                   	<div class="col-lg-1"></div>
                   	<div class="col-lg-4"><h3 class="" id="imageErr3" name="imageerr3"></h3></div>
                   	<div class="col-lg-5"></div>
                   	<div class="col-lg-2"></div>
                   </div>

                   <br>
                   
						 <div class="row">
                   	<div class="col-lg-1"></div>
                   	<div class="col-lg-4"><img style="width:340px;height:250px;" id="pic4" alt="Other Photo 4"></div>
                   	<div class="col-lg-3"><input type="file" id="fileToUpload4" name="fileToUpload4" class="form form-control"></div>
                   	<div class="col-lg-4"></div>
                   </div>
                   
                    <div class="row">
                   	<div class="col-lg-1"></div>
                   	<div class="col-lg-4"><h3 class="" id="imageErr4" name="imageerr4"></h3></div>
                   	<div class="col-lg-5"></div>
                   	<div class="col-lg-2"></div>
                   </div>

                   <br>
                   
				</div>
			</span>
			<div class="container">
			<div class="row">
					<div class="col-lg-3"><label class="form-control label label-warning" style="
					font-size:20px; background-color:#FF4500">Description</label></div>
					<div class="col-lg-9"></div>
				</div><br/>
				
			 <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
                    <textarea id="description" name="description" rows="4" cols="50" class="form-control">
					</textarea>
                 </div>
                   <div class="col-lg-4"></div>
                    </div>
                    
                      <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><h3 class="" id="descriptionErr" name="descriptionerr"></h3>
                 </div>
                   <div class="col-lg-4"></div>
                    </div> 
                                       
                    <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-2"> <button type="button" id="create" class="form-control btn btn-success">Create</button></div>
				<div class="col-lg-3"></div>
				<div class="col-lg-2">
                  <button type="button" id="cancel" class="form-control btn btn-danger">Cancel</button>
                 </div>
                   <div class="col-lg-4"></div>
					
                    </div>
			</div>  
		</div>
		</form>
	</body>
</html>