$(document).ready(function(){
	var userName=$("#userName");
	var name=$("#name");
	var img=$("#img");
	var contactNumber=$("#contactNumber");
    var email=$("#email");
	var nid=$("#nid");
	var address=$("#address");
	 
	function getdata()
	 {
		  var dataPost = {
                        "data":userName.val()
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "ProfilePHP.php",
                        data: { getdata: dataString },
                        type: 'POST',
                        success: function (response)
                        {
							var option = JSON.parse(response);
							name.html(option[0].Title+" "+option[0].FirstName+" "+option[0].LastName);
							contactNumber.html(option[0].ContactNumber);
							email.html(option[0].Email);
							nid.html(option[0].NID);
							var Add=option[0].Street+",<br>Thana: "+option[0].Thana+", District: "+option[0].District+", <br>Division: "+option[0].Division+", Bangladesh.";
							address.html(Add);
							
							img.attr("src",option[0].Propic);
                        }
                    });
	 }
	
	function getbook()
	 {
		  var dataPost = {
                        "data":userName.val()
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "ProfilePHP.php",
                        data: { getbook: dataString },
                        type: 'POST',
                        success: function (response)
                        {
							var option = JSON.parse(response);
							var table='<table class="table table-hover"><tr><th>Property Name</th><th>Booking Date</th><th>Confirmation</th></tr>';
							for(var i=0;i<option.length;i++)
								{
								if(option[i].Confirmation==="Pending")
									{
								table=table+'<tr><td><a href="Details.php?propertyname='+option[i].PropertyName+'"target="_blank">'+option[i].PropertyName+'</a></td><td>'+option[i].DateTime+'</td><td>'+option[i].Confirmation+'</td></tr>';
									}
									else if(option[i].Confirmation==="Canceled")
									{
								    table=table+'<tr class="redback"><td><a href="Details.php?propertyname='+option[i].PropertyName+'"target="_blank">'+option[i].PropertyName+'</a></td><td>'+option[i].DateTime+'</td><td style="color:red;">'+option[i].Confirmation+'</td></tr>';
									}
									else
										{
											table=table+'<tr class="greenback"><td><a href="Details.php?propertyname='+option[i].PropertyName+'"target="_blank">'+option[i].PropertyName+'</a></td><td>'+option[i].DateTime+'</td><td style="color:green;">'+option[i].Confirmation+'</td></tr>';
										}
               					}
							table=table+'</table>';
							$("#book").html(table);
                        }
                    });
	 }
	
		 $(function()
				{
		   getdata();
			 getbook();
	 });		  
});