$(document).ready(function(){
	
	function autoComplete(datakey,data,id)
	 {
		  var dataPost = {
                        "datakey":datakey,
                        "data":data
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "EditInfoPHP.php",
                        data: { autoComplete: dataString },
                        type: 'POST',
                        success: function (response)
                        {
							var option = JSON.parse(response);
							
                            var opt = "";
                                for (var i = 0; i < option.length; i++) {
                                    opt = opt + '<option value="'+ option[i].DisplayText + '">';
                                }
                                id.html(opt);
                        }
                    });
		 
	 }
	
	  function allComplete(datakey,id)
	 {
		  var dataPost = {
                        "datakey":datakey
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "EditInfoPHP.php",
                        data: { allComplete: dataString },
                        type: 'POST',
                        success: function (response)
                        {
							var option = JSON.parse(response);
							
                            var opt = "";
                                for (var i = 0; i < option.length; i++) {
                                    opt = opt + '<option value="'+ option[i].DisplayText + '">';
                                }
                                id.html(opt);
                        }
                    });
		 
	 }
	
	function getSearch()
	{
		 var dataPost = {
                        "data":$("#search").val()
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "HomePHP.php",
                        data: { getSearch: dataString },
                        type: 'POST',
                        success: function (response)
                        {
							if(response!=="")
								{
							var card = "";
							var option = JSON.parse(response);
							
							for(var i=0;i<option.length;i++)
								{
								 var Name="'"+option[i].Name+"'";
							     card+='<div class="content" onclick="goDetail('+Name+')"><div style="padding:5px;"><h3 class="other"><b>'+option[i].Name+'</b></h3></div><div style="padding:5px;"><img src="'+option[i].CoverPhoto+'" height="150px"; width="275px"; style="background-color: azure;"/></div><div style="padding:5px;"><h4 class="other">Rent: <b>'+option[i].Rent+'</b></h4></div><div style="height:180px; padding:5px;"><p class="back" style="text-align: justify; font-size:5px;">1 '+option[i].PropertyType+' is avialable for '+option[i].RentFor+'<br> From '+option[i].StartingMonth+'<br> at Floor no. '+option[i].Floor+'<br> Total Area '+option[i].BuildUpArea+'<br> Border-Type: '+option[i].BorderType+'</p></div></div>';
								
								}
							$("#card").html(card);
						       }
						       else
						       {
						         $("#card").html("No Result Found.");
					            }
					}});
	}
				
	function setMessage()
	{
		 var dataPost = {
                        "data":"ok"
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "Message.php",
                        data: { setMessage: dataString },
                        type: 'POST',
                        success: function (response)
                        {
							var option = JSON.parse(response);
							var mess=option.length;
							$("#mess").html(mess);
					}});
	}
	
	$(".radio").change(function()
					  {
		var radioValue = $("input[name='dhaka']:checked").val();
		allComplete(radioValue,$("#Dhaka"));
	});
	
	 $("#search").click(function()
				  {
		 $("#search").val("");
		 getAll();
	 });
	 
	 $("#search").keyup(function()
				{
		 var data=$("#search").val();
		 var radioValue = $("input[name='dhaka']:checked").val();
		 autoComplete(radioValue,data,$("#Dhaka"));
		  getSearch();
	 });
	
	
	 $("#search").change(function()
				{
		 getSearch();
		 if( $("#search").val()==="")
			 {
				getAll(); 
			 }
	 });
	 
	   $("#search").blur(function()
				{
		 getSearch();
		   if( $("#search").val()==="")
			 {
				getAll(); 
			 }
	 });
	
function getdata()
	 {
		  var dataPost = {
                        "data":"ok"
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "HomePHP.php",
                        data: { getdata: dataString },
                        type: 'POST',
                        success: function (response)
                        {
							var option = JSON.parse(response);
							$("#profile").attr('href','./Profile.php?username='+option[0].UserName);
							$("#profile").attr('target','_blank');
						    $("#username").html(option[0].FirstName);
							$("#img").attr('src',option[0].Propic);
                        }
                    });
	 }
	
	function getAll()
	{
		 var dataPost = {
                        "data":"ok"
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "HomePHP.php",
                        data: { getAll: dataString },
                        type: 'POST',
                        success: function (response)
                        {
							var card = "";
							var option = JSON.parse(response);
							for(var i=0;i<option.length;i++)
								{
								 var Name="'"+option[i].Name+"'";
							     card+='<div class="content" onclick="goDetail('+Name+')"><div style="padding:5px;"><h3 class="other"><b>'+option[i].Name+'</b></h3></div><div style="padding:5px;"><img src="'+option[i].CoverPhoto+'" height="150px"; width="275px"; style="background-color: azure;"/></div><div style="padding:5px;"><h4 class="other">Rent: <b>'+option[i].Rent+'</b></h4></div><div style="height:150px; padding:5px;"><p class="back" style="text-align: justify; font-size:17px;">1 '+option[i].PropertyType+' is avialable for '+option[i].RentFor+'<br> From '+option[i].StartingMonth+'<br> at Floor no. '+option[i].Floor+'<br> Total Area '+option[i].BuildUpArea+'<br> Border-Type: '+option[i].BorderType+'</p></div></div>';
								
								}
							$("#card").html(card);
						}
					});
	}
		 $(function()
				{
		   getdata();
		   getAll();
		   setMessage();
	 });		  
});