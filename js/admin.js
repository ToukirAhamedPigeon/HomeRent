$(document).ready(function(){
	
	function getUserSearch()
	{
		 var dataPost = {
                        "data":$("#searchUser").val()
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "AdminPHP.php",
                        data: { getUserSearch: dataString },
                        type: 'POST',
                        success: function (response)
                        {
							if(response!=="")
								{
							var option = JSON.parse(response);
							var table='<table class="table table-hover"><tr><th>Action</th> <th>Profile Picture</th><th>Name</th><th>Phone</th></tr>';
							for(var i=0;i<option.length;i++)
								{
								table=table+' <tr><td><a href="ProfileDelete.php?username='+option[i].UserName+'">Block</a></td><td><img src="'+option[i].Propic+'" width="60px" height="60px"></td><td><a href="Profile.php?username='+option[i].UserName+'" target="_blank">'+option[i].Title+' '+option[i].FirstName+' '+option[i].LastName+'</a></td> <td>'+option[i].ContactNumber+'</td>  </tr>';
               					}
							table=table+'</table>';
							$("#users").html(table);
						       }
						       else
						       {
						         $("#users").html("No Result Found.");
					            }
					}});
	}
						   
	function getPropertySearch()
	{
		 var dataPost = {
                        "data":$("#searchProperty").val()
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "AdminPHP.php",
                        data: { getPropertySearch: dataString },
                        type: 'POST',
                        success: function (response)
                        {
							if(response!=="")
								{
							var option = JSON.parse(response);
							var table='<table class="table table-hover"><tr><th>Actions</th><th>Cover Photo</th><th>Name</th><th>Status</th></tr>';
     	
							for(var i=0;i<option.length;i++)
								{
								table=table+' <tr><td><a href="EditAdd.php?propertyname='+option[i].Name+'">Edit</a>&nbsp&nbsp<a href="DetailsDelete.php?propertyname='+option[i].Name+'">Delete</a></td><td><img src="'+option[i].CoverPhoto+'" width="85px" height="60px"></td><td><a href="Details.php?propertyname='+option[i].Name+'"target="_blank">'+option[i].Name+'</a></td><td>'+option[i].Status+'</td></tr>';
               					}
							table=table+'</table>';
							$("#properties").html(table);
						       }
						       else
						       {
						         $("#properties").html("No Result Found.");
					            }
					}});
	}
	
	function getBookingSearch()
	{
		 var dataPost = {
                        "data":$("#searchBooking").val()
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "AdminPHP.php",
                        data: { getBookingSearch: dataString },
                        type: 'POST',
                        success: function (response)
                        {
							if(response!=="")
								{
							var option = JSON.parse(response);
							var table='<table class="table table-hover"><tr><th>Property Name</th><th>User Name</th><th>Booking Date</th><th>Confirmation</th><th>Action</th></tr>';
     		
     			
							for(var i=0;i<option.length;i++)
								{
								 var id=option[i].Id;
								 var property=option[i].PropertyName;
								 var user=option[i].UserName;
									var action;
								 if(option[i].Confirmation==="Pending")
									 {
										  action='<a href="AdminPHP.php?id='+id+'&&property='+property+'&&user='+user+'">Confirm</a>';
									 }
									else
										{
											action="";
										}
								table=table+'<tr><td><a href="Details.php?propertyname='+option[i].PropertyName+'"target="_blank">'+option[i].PropertyName+'</a></td><td><a href="Profile.php?username='+option[i].UserName+'" target="_blank">'+option[i].UserName+'</a></td><td>'+option[i].DateTime+'</td><td>'+option[i].Confirmation+'</td><td>'+action+'</td></tr>';
               					}
							table=table+'</table>';
							$("#book").html(table);
						       }
						       else
						       {
						         $("#book").html("No Result Found.");
					            }
					}});
	}
	
	function checkShow()
	{
		var dataPost = {
                        "data":"ok"
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "AdminPHP.php",
                        data: { checkShow: dataString },
                        type: 'POST',
                        success: function (response)
                        {
							if(response==="First")
								{
									$("span").removeClass("nodisplay");
		                            $("span").addClass("nodisplay");
		                            $("#first").removeClass("nodisplay");
								}
							else if(response==="Third"){
								    $("span").removeClass("nodisplay");
		                            $("span").addClass("nodisplay");
		                            $("#third").removeClass("nodisplay");
							}
						}});
	}
	
	 $("#searchUser").keyup(function()
				{
		  getUserSearch();
	 });
	
	   $("#searchUser").blur(function()
				{
		 getUserSearch();
	 });
	
	 $("#searchProperty").keyup(function()
				{
		  getPropertySearch();
	 });
	
	   $("#searchProperty").blur(function()
				{
		 getPropertySearch();
	 });
	
	 $("#searchBooking").keyup(function()
				{
		  getBookingSearch();
	 });
	
	   $("#searchBooking").blur(function()
				{
		 getBookingSearch();
	 });
	
		 $(function()
				{
		   checkShow();	 
		   getPropertySearch();
		   getUserSearch();
		   getBookingSearch();
	 });		  
});