 $(function()
   {
function getMessage()
	{
		 var dataPost = {
                        "data":"ok"
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "Message.php",
                        data: { getMessage: dataString },
                        type: 'POST',
                        success: function (response)
                        {
							var option = JSON.parse(response);
							
							for(var i=0;i<option.length;i++)
								{
								 var message=option[i].Content;
									alert(message);
								}
					}});
	}

	 function bringMessage()
	{
		 var dataPost = {
                        "data":"ok"
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "Message.php",
                        data: { bringMessage: dataString },
                        type: 'POST',
                        success: function (response)
                        {
							if(response!=="")
								{
							var option = JSON.parse(response);
							var table='<table class="table table-hover">';
     		
     			
							for(var i=0;i<option.length;i++)
								{
								table=table+'<tr><td>'+option[i].DateTime+'</td><td style="background-color:lavender;">'+option[i].Content+'</td></tr>';
               					}
							table=table+'</table>';
							$("#notify").html(table);
						       }
						       else
						       {
						         $("#notify").html("No Result Found.");
					            }
					}});
	}

 $(function()
				{
		   getMessage();
	       bringMessage();
	 });		  
 });