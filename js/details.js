$(document).ready(function(){
	var propertyName=$("#propertyName");
	var title=$("#title");
	var rent=$("#rent");
	var advance=$("#advance");
    var include=$("#include");
	var customerType=$("#customerType");
	var startingMonth=$("#startingMonth");
	var propertyType=$("#propertyType");
	var area=$("#buildUpArea");
	var floor=$("#floor");
	var rentFor=$("#rentFor");
	var description=$("#description");
	var maximumBorder=$("#maximumBorder");
	var address=$("#address");
	var status=$("#status");
	var postDate=$("#postDate");
	
	 function getdata()
	 {
		  var dataPost = {
                        "data":propertyName.val()
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "DetailsPHP.php",
                        data: { getdata: dataString },
                        type: 'POST',
                        success: function (response)
                        {
							var option = JSON.parse(response);
							title.html(option[0].Name);
							startingMonth.html(option[0].StartingMonth);
							rent.html(option[0].Rent);
							advance.html(option[0].Advance);
							include.html(option[0].Include);
							propertyType.html(option[0].PropertyType);
							area.html(option[0].BuildUpArea);
							floor.html(option[0].Floor);
							rentFor.html(option[0].RentFor);
							customerType.html(option[0].BorderType);
							maximumBorder.html(option[0].MaxBorder);
							description.html(option[0].Description);
							status.html(option[0].Status);
							postDate.html(option[0].PostDateTime);
							var Add="Area: "+option[0].InDhaka+", Zip Code: "+option[0].ZipCode+"<br>"+option[0].Street+",<br>Thana: "+option[0].Thana+", District: "+option[0].District+", <br>Division: "+option[0].Division+", Bangladesh.";
							address.html(Add);
							
							if(option[0].Status==="Open"||option[0].Status==="open")
								{
									status.removeAttr("style","Color:red");
									status.removeAttr("style","Color:green");
									status.attr("style","Color:green");
								}
							else
								{
									status.removeAttr("style","Color:red");
									status.removeAttr("style","Color:green");
									status.attr("style","Color:red");
								}
							//var conceptName = $('#aioConceptName').find(":selected").text();
                        }
                    });
	 }
	function prebook()
	{
		var dataPost = {
                        "data":propertyName.val()
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "DetailsPHP.php",
                        data: { prebook: dataString },
                        type: 'POST',
                        success: function (response)
                        {
							if(response==="close"||response==="Close")
								{
									$("#book").html('<img id="sold" src="./img/soldhouse.png" height="200px" width="250px"/>');
								}
						}
					});
	}
	
	function booking()
	{
		var dataPost = {
                        "data":propertyName.val()
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "DetailsPHP.php",
                        data: { booking: dataString },
                        type: 'POST',
                        success: function (response)
                        {
							if(response==="1")
								{
									$("#Book").addClass('nodisplay');
									$("#unBook").removeClass('nodisplay');
								}
							else if(response==="0")
							{
								$("#unBook").addClass('nodisplay');
								$("#Book").removeClass('nodisplay');
							}
						}
					});
	}
	
	$("#unBook").click(function()
					  {
		var dataPost = {
                        "data":propertyName.val()
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "DetailsPHP.php",
                        data: { unBook: dataString },
                        type: 'POST',
                        success: function (response)
                        {
							response="good";
						}
					});
		booking();
	});
	
	$("#Book").click(function()
					  {
		var dataPost = {
                        "data":propertyName.val()
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "DetailsPHP.php",
                        data: { Book: dataString },
                        type: 'POST',
                        success: function (response)
                        {
							response="good";
						}
					});
		booking();
	});
	
	function getImage()
	{
		 var dataPost = {
                        "data":propertyName.val()
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "DetailsPHP.php",
                        data: { getImage: dataString },
                        type: 'POST',
                        success: function (response)
                        {
							var imagedom = "";
							var option = JSON.parse(response);
							for(var i=0;i<option.length;i++)
								{
							     imagedom+="<div> <img data-u='image' src='"+option[i].ImgUrl+"'/> </div>";
								
								}
							$(".ImageListDom").html(imagedom);
							jssor_1_slider_init();
						}
					});
	}
		 $(function()
				{
		   getdata();
		   getImage();
		   booking();
		   prebook();
	 });		  
});