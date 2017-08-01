$(document).ready(function(){
	  var rent=$("#rent");
	  var advance=$("#advance");
      var include=$("#include");
	  var customerType=$("#customerType");
	  var startingMonth=$("#startingMonth");
	var propertyType=$("#propertyType");
	var area=$("#area");
	var floor=$("#floor");
	var rentFor=$("#rentFor");
	var description=$("#description");
	 var maximumBorder=$("#maximumBorder");
	var rentErr= $("#rentErr");
	var advanceErr= $("#advanceErr");
	 var includeErr=$("#includeErr");
	var customerTypeErr=$("#customerTypeErr");
	 var maximumBorderErr=$("#maximumBorderErr");
	var propertyTypeErr=$("#propertyTypeErr");
	var areaErr=$("#areaErr");
	var floorErr=$("#floorErr");
	var rentForErr=$("#rentForErr");
	var descriptionErr=$("#descriptionErr");
	var startingMonthErr= $("#startingMonthErr");
	var StartingMonth=$("#StartingMonth");
	var CustomerType=$("#CustomerType");
	 var PropertyType=$("#PropertyType");
	 var RentFor=$("#RentFor");
	
	var rentOk=0;
	var advanceOk=0;
	 var includeOk=0;
	 var customerTypeOk=0;
	var maximumBorderOk=0;
	var startingMonthOk=0;
	var propertyTypeOk=0;
	var areaOk=0;
	var floorOk=0;
	var rentForOk=0;
	var descriptionOk=0;
	
	 
	 function addErr(input,err,mess)
	 {
		 input.addClass("wrong-entry");
		 err.addClass("alert");
		 err.html(mess);
	 }
	  function rmvErr(input,err)
	 {
		 input.removeClass("wrong-entry");
		 err.removeClass("alert");
		 err.html("");
	 }
	  function addValid(input,err)
	 {
		 input.addClass("valid");
		 err.removeClass("alert");
		 err.html("");
	 }
	   function rmvValid(input)
	 {
		 input.removeClass("valid");
	 }
	 
	 
	  function emptyCheck(id)
                {
                    if(id.val()==="")
                    {
                        return false;
                    }
                    else
                    {
                        return true;
                    }
                }
	   function validate(data,regex)
                {
                    if(regex.test(data))
                    {
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                }
	 function getdata()
	 {
		  var dataPost = {
                        "data":$("#propertyName").val()
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "EditAddPHP.php",
                        data: { getdata: dataString },
                        type: 'POST',
                        success: function (response)
                        {
							var option = JSON.parse(response);
							$("#id").val(option[0].Id);
							//alert($("#id").val());
							startingMonth.val(option[0].StartingMonth);
							rent.val(option[0].Rent);
							advance.val(option[0].Advance);
							include.val(option[0].Include);
							propertyType.val(option[0].PropertyType);
							area.val(option[0].BuildUpArea);
							floor.val(option[0].Floor);
							rentFor.val(option[0].RentFor);
							customerType.val(option[0].BorderType);
							maximumBorder.val(option[0].MaxBorder);
							description.val(option[0].Description);
							//var conceptName = $('#aioConceptName').find(":selected").text();
                        }
                    });
	 }
	
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
                        "datakey":datakey,
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
	 
	function MaximumBorderErr()
	{
	  	 if(emptyCheck(maximumBorder))
			 {
				 rmvErr(maximumBorder,maximumBorderErr);
				                         rmvValid(maximumBorder);
				                         addValid(maximumBorder,maximumBorderErr);
				                         maximumBorderOk=0;
			 }
		 else
			 {
				 rmvErr(maximumBorder,maximumBorderErr);
				 rmvValid(maximumBorder);
				 addErr(maximumBorder,maximumBorderErr,"Maximum border is required");
				 maximumBorderOk=1;
			 }
	} 
    function PropertyTypeErr()
	{
		 if(emptyCheck(propertyType))
			{
			
		  var dataPost = {
                        "data":propertyType.val(),
			            "datakey":"PropertyType"
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "CreateAddPHP.php",
                        data: { checklookup: dataString },
                        type: 'POST',
                        success: function (response)
                        {
                            if(response==="1")
                            {
                               rmvErr(propertyType,propertyTypeErr);
				 rmvValid(propertyType);
				 addValid(propertyType,propertyTypeErr);
				 propertyTypeOk=0;
                            }
                            else
                            {
                              rmvErr(propertyType,propertyTypeErr);
				 rmvValid(propertyType);
				 addErr(propertyType, propertyTypeErr,"Invalid Property Type");
				 propertyTypeOk=1;
                            }
                        }
                    });
			}
			else
			{
			     rmvErr(propertyType,propertyTypeErr);
				 rmvValid(propertyType);
				 addErr(propertyType,propertyTypeErr,"Property Type name is required");
				 propertyTypeOk=1;
			}
	}
    function AreaErr()
	{
		 if(emptyCheck(area))
			{
				 var data = area.val();
                        var regx = /^-?\d*(\.\d+)?$/;
                        if (validate(data, regx))
							{
								 rmvErr(area,areaErr);
				 rmvValid(area);
				 addValid(area,areaErr);
				 areaOk=0;
							}
				else
					{
						rmvErr(area,areaErr);
				 rmvValid(area);
				 addErr(area,areaErr,"Invalid");
				 areaOk=1;
					}
			}
		 else
			 {
				
						rmvErr(area,areaErr);
				 rmvValid(area);
				 addErr(area,areaErr,"Area is required");
				 areaOk=1;
			 }
	}
    function FloorErr()
	{
		if(emptyCheck(floor))
			 {
				 rmvErr(floor,floorErr);
				                         rmvValid(floor);
				                         addValid(floor,floorErr);
				                         floorOk=0;
			 }
		 else
			 {
				 rmvErr(floor,floorErr);
				 rmvValid(floor);
				 addErr(floor,floorErr,"Floor number is required");
				 floorOk=1;
			 }
	}
	function RentForErr()
	{
		 if(emptyCheck(rentFor))
			{
			
		  var dataPost = {
                        "data":rentFor.val(),
			            "datakey":"RentFor"
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "CreateAddPHP.php",
                        data: { checklookup: dataString },
                        type: 'POST',
                        success: function (response)
                        {
                            if(response==="1")
                            {
                               rmvErr(rentFor,rentForErr);
				 rmvValid(rentFor);
				 addValid(rentFor,rentForErr);
				 rentForOk=0;
                            }
                            else
                            {
                              rmvErr(rentFor,rentForErr);
				 rmvValid(rentFor);
				 addErr(rentFor, rentForErr,"Invalid");
				 rentForOk=1;
                            }
                        }
                    });
			}
			else
			{
			     rmvErr(rentFor,rentForErr);
				 rmvValid(rentFor);
				 addErr(rentFor,rentForErr,"Rent For is required");
				 rentForOk=1;
			}
	}
	function DescriptionErr()
	{
		 if(emptyCheck(description))
			{
				 var data = description.val();
                        var regx = /^[a-zA-Z0-9,. !?]*$/i;
                        if (validate(data, regx))
							{
								 rmvErr(description,descriptionErr);
				 rmvValid(description);
				 addValid(description,descriptionErr);
				 descriptionOk=0;
							}
				else
					{
						rmvErr(description,descriptionErr);
				 rmvValid(description);
				 addErr(description,descriptionErr,"Invalid");
				 descriptionOk=1;
					}
			}
		 else
			 {
				rmvErr(description,descriptionErr);
				 rmvValid(description);
				 addErr(description,descriptionErr,"Description is required");
				 descriptionOk=1;
			 }
	}
	
	 function RentErr()
	 {
		 if(emptyCheck(rent))
			{
				 var data = rent.val();
                        var regx = /^-?\d*(\.\d+)?$/;
                        if (validate(data, regx))
							{
								 rmvErr(rent,rentErr);
				 rmvValid(rent);
				 addValid(rent,rentErr);
				 rentOk=0;
							}
				else
					{
						rmvErr(rent,rentErr);
				 rmvValid(rent);
				 addErr(rent,rentErr,"Invalid");
				 rentOk=1;
					}
			}
		 else
			 {
				rmvErr(rent,rentErr);
				 rmvValid(rent);
				 addErr(rent,rentErr,"Rent amount required");
				 rentOk=1;
			 }
	 }
	
	 function AdvanceErr()
	 {
		 if(emptyCheck(advance))
			{
				 var data = advance.val();
                        var regx = /^-?\d*(\.\d+)?$/;
                        if (validate(data, regx))
							{
								 rmvErr(advance,advanceErr);
				 rmvValid(advance);
				 addValid(advance,advanceErr);
				 advanceOk=0;
							}
				else
					{
						rmvErr(advance,advanceErr);
				 rmvValid(advance);
				 addErr(advance,advanceErr,"Invalid");
				 advanceOk=1;
					}
			}
		 else
			 {
				rmvErr(advance,advanceErr);
				 rmvValid(advance);
				 addErr(advance,advanceErr,"Advance amount required");
				 advanceOk=1;
			 }
	 }
	 
	 function IncludeErr()
	 {
		 if(emptyCheck(include))
			{
				 var data = include.val();
                        var regx = /^[a-zA-Z0-9,. ]*$/i;
                        if (validate(data, regx))
							{
								 rmvErr(include,includeErr);
				 rmvValid(include);
				 addValid(include,includeErr);
				 includeOk=0;
							}
				else
					{
						rmvErr(include,includeErr);
				 rmvValid(include);
				 addErr(include,includeErr,"Invalid");
				 includeOk=1;
					}
			}
		 else
			 {
				 rmvErr(include,includeErr);
				 rmvValid(include);
				 addValid(include,includeErr);
				 includeOk=0;
			 }
	 }
	 
	 function CustomerTypeErr()
	 {
		  if(emptyCheck(customerType))
			{
			
		  var dataPost = {
                        "data":customerType.val(),
			            "datakey":"CustomerType"
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "CreateAddPHP.php",
                        data: { checklookup: dataString },
                        type: 'POST',
                        success: function (response)
                        {
                            if(response==="1")
                            {
                               rmvErr(customerType,customerTypeErr);
				 rmvValid(customerType);
				 addValid(customerType,customerTypeErr);
				customerTypeOk=0;
                            }
                            else
                            {
                              rmvErr(customerType,customerTypeErr);
				 rmvValid(customerType);
				 addErr(customerType,customerTypeErr,"Invalid Customer Type");
				 customerTypeOk=1;
                            }
                        }
                    });
			}
			else
			{
			     rmvErr(customerType,customerTypeErr);
				 rmvValid(customerType);
				 addErr(customerType,customerTypeErr,"Customer Type is required");
				 customerTypeOk=1;
			}
	 }
	
	 function StartingMonthErr()
	 {
		  if(emptyCheck(startingMonth))
			{
			
		  var dataPost = {
                        "data":startingMonth.val(),
			            "datakey":"Month"
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "CreateAddPHP.php",
                        data: { checklookup: dataString },
                        type: 'POST',
                        success: function (response)
                        {
                            if(response==="1")
                            {
                               rmvErr(startingMonth,startingMonthErr);
				 rmvValid(startingMonth);
				 addValid(startingMonth,startingMonthErr);
				 startingMonthOk=0;
                            }
                            else
                            {
                              rmvErr(startingMonth,startingMonthErr);
				 rmvValid(startingMonth);
				 addErr(startingMonth,startingMonthErr,"Invalid Month");
				 startingMonthOk=1;
                            }
                        }
                    });
			}
			else
			{
			     rmvErr(startingMonth,startingMonthErr);
				 rmvValid(startingMonth);
				 addErr(startingMonth,startingMonthErr,"Starting Month is required");
				 startingMonthOk=1;
			}
	 }
	 
	  $(function()
				{
		   getdata();
		   allComplete("Month",StartingMonth);
		  allComplete("CustomerType",CustomerType);
		  allComplete("PropertyType",PropertyType);
		  allComplete("RentFor",RentFor);
	 });
	
	maximumBorder.click(function()
				  {
		 rmvErr(maximumBorder,maximumBorderErr);
		 rmvValid(maximumBorder);
	 });
	maximumBorder.keyup(function()
				  {
		MaximumBorderErr();
	 });
	 maximumBorder.blur(function()
				  {
		MaximumBorderErr();
	 });
	
		floor.click(function()
				  {
		 rmvErr(floor,floorErr);
		 rmvValid(floor);
	 });
	floor.keyup(function()
				  {
		FloorErr();
	 });
	 floor.blur(function()
				  {
		FloorErr();
	 });
	 
	  rent.click(function()
				  {
		 rmvErr(rent,rentErr);
		 rmvValid(rent);
	 });
	 
	 rent.keyup(function()
				{
		 RentErr();
	 });
	 
	  rent.blur(function()
				{
		  RentErr();
	 });
	 
	  advance.click(function()
				  {
		 rmvErr(advance,advanceErr);
		 rmvValid(advance);
	 });
	 
	 advance.keyup(function()
				{
		 AdvanceErr();
	 });
	 
	  advance.blur(function()
				{
		  AdvanceErr();
	 });
	
	  area.click(function()
				  {
		 rmvErr(area,areaErr);
		 rmvValid(area);
	 });
	 
	 area.keyup(function()
				{
		 AreaErr();
	 });
	 
	  area.blur(function()
				{
		  AreaErr();
	 });
	 
	
		  include.click(function()
				  {
		 rmvErr(include,includeErr);
		 rmvValid(include);
	 });
	 
	 include.keyup(function()
				{
		 IncludeErr();
	 });
	 
	  include.blur(function()
				{
		  IncludeErr();
	 });
	
	 description.click(function()
				  {
		 rmvErr(description,descriptionErr);
		 rmvValid(description);
	 });
	 
	 description.keyup(function()
				{
		 DescriptionErr();
	 });
	 
	  description.blur(function()
				{
		  DescriptionErr();
	 });
	
	 customerType.click(function()
				  {
		 rmvErr(customerType,customerTypeErr);
		 rmvValid(customerType);
		 customerType.val("");
	 });
	 
	 customerType.keyup(function()
				{
		 var data=customerType.val();
		 autoComplete("CustomerType",data,CustomerType);
	 });
	 
	  customerType.blur(function()
				{
		 CustomerTypeErr();
	 });
	
	propertyType.click(function()
				  {
		 rmvErr(propertyType,propertyTypeErr);
		 rmvValid(propertyType);
		 propertyType.val("");
	 });
	 
	 propertyType.keyup(function()
				{
		 var data=propertyType.val();
		 autoComplete("PropertyType",data,PropertyType);
	 });
	 
	  propertyType.blur(function()
				{
		 PropertyTypeErr();
	 });
	
	rentFor.click(function()
				  {
		 rmvErr(rentFor,rentForErr);
		 rmvValid(rentFor);
		 rentFor.val("");
	 });
	 
	 rentFor.keyup(function()
				{
		 var data=rentFor.val();
		 autoComplete("RentFor",data,RentFor);
	 });
	 
	  rentFor.blur(function()
				{
		 RentForErr();
	 });
	
	 startingMonth.click(function()
				  {
		 rmvErr(startingMonth,startingMonthErr);
		 rmvValid(startingMonth);
		 startingMonth.val("");
	 });
	 
	 startingMonth.keyup(function()
				{
		 var data=startingMonth.val();
		 autoComplete("Month",data,StartingMonth);
	 });
	 
	  startingMonth.blur(function()
				{
		 StartingMonthErr();
	 });
	 
	 $("#cancel").click(function()
					   {
		 location.href = './Admin.php';
	 });
	 $("#create").click(function(){
		 RentErr();
		 StartingMonthErr();
		 AdvanceErr();
		 IncludeErr();
		 CustomerTypeErr();
		 MaximumBorderErr();
		 PropertyTypeErr();
		 AreaErr();
		 FloorErr();
		 RentForErr();
		 DescriptionErr();
		 if(startingMonthOk===0&&rentOk===0&&advanceOk===0&&maximumBorderOk===0&&includeOk===0&&customerTypeOk===0&&propertyTypeOk===0&&areaOk===0&&floorOk===0&&rentForOk===0&&descriptionOk===0)
			 {
				 $("#form").submit();
			 }
	 });
	 
 });