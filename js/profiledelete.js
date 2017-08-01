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
		 $(function()
				{
		   getdata();
	 });	
	
	$("#cancel").click(function()
					 {
		 location.href = './Admin.php';
	});
	
	$("#delete").click(function()
					 {
		 $("#form").submit();
	});
});