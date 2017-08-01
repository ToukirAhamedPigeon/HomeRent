<?php
require("AdminCheck.php");
?>
<?php
require("connection.php");
if(isset($_REQUEST["propertyname"]))
{
	$propertyname=$_REQUEST["propertyname"];
	echo '<input type="hidden" id="propertyName" name="propertyname" value="'.$propertyname.'">';
}
else
{
  $propertyname=NULL;
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit Add</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
    <script src="./js/jquery-3.1.1.js"></script>
    <script src="./content/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <script src="./js/editadd.js"></script>
    <!--<script src="./content/bootstrap-3.3.7-dist/js/npm.js"></script>-->
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./content/bootstrap-3.3.7-dist/css/bootstrap.css" />
    <link rel="stylesheet" href="./content/bootstrap-3.3.7-dist/css/bootstrap-theme.css" />
    <link rel="stylesheet" href="./css/createAdd.css" />
    <style>
		
		</style>
	</head>
	<body>
	<form id="form" action="EditAddPHP.php" method="post" enctype="multipart/form-data">
		<div class="reg-form">
			<h2>Edit Addvertise</h2>
			<br>
			<span class="">
				<div class="container">
				<div class="row">
					<div class="col-lg-3"><label class="form-control label label-warning" style="
					font-size:20px;">Basic</label></div>
					<div class="col-lg-9"></div>
				</div><br/>
				<input type="hidden" id="id" name="id">
				<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7">
                    <select id="status" name="status" class="form form-control">
                    	<option id="open" value="Open">Open</option>
                    	<option id="close" value="Close">Close</option>
                    </select>
                 </div>
                   <div class="col-lg-4"></div>
                    </div>
                    
                    <div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-7"><h3 class="" id="statusErr" name="statuserr"></h3>
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
				<div class="col-lg-2"> <button type="button" id="create" class="form-control btn btn-success">Edit</button></div>
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