$(document).ready(function(){
	  var name= $("#name");
	  var rent=$("#rent");
	  var advance=$("#advance");
      var include=$("#include");
	  var customerType=$("#customerType");
 	  var zipCode=$("#zipCode");
	  var startingMonth=$("#startingMonth");
	var propertyType=$("#propertyType");
	var area=$("#area");
	var floor=$("#floor");
	var rentFor=$("#rentFor");
	var description=$("#description");
	 var street= $("#street");
	 var thana= $("#thana");
	 var inDhaka= $("#inDhaka");
	  var district= $("#district");
	 var img= $("#pic");
	var img1= $("#pic1");
	var img2= $("#pic2");
	var img3= $("#pic3");
	var img4= $("#pic4");
	 var maximumBorder=$("#maximumBorder");
	 var division= $("#division");
	 var file= $("#fileToUpload");
	var file1= $("#fileToUpload1");
	var file2= $("#fileToUpload2");
	var file3= $("#fileToUpload3");
	var file4= $("#fileToUpload4");
	var nameErr= $("#nameErr");
	var rentErr= $("#rentErr");
	var advanceErr= $("#advanceErr");
	 var includeErr=$("#includeErr");
	var customerTypeErr=$("#customerTypeErr");
	 var maximumBorderErr=$("#maximumBorderErr");
	var zipCodeErr= $("#zipCodeErr");
	var propertyTypeErr=$("#propertyTypeErr");
	var areaErr=$("#areaErr");
	var floorErr=$("#floorErr");
	var rentForErr=$("#rentForErr");
	var descriptionErr=$("#descriptionErr");
	var startingMonthErr= $("#startingMonthErr");
	 var streetErr= $("#streetErr");
	 var thanaErr= $("#thanaErr");
	var inDhakaErr= $("#inDhakaErr");
	  var districtErr= $("#districtErr");
	 var divisionErr= $("#divisionErr");
	 var fileErr= $("#imageErr");
	 var fileErr1= $("#imageErr1");
	 var fileErr2= $("#imageErr2");
	 var fileErr3= $("#imageErr3");
	 var fileErr4= $("#imageErr4");
	 var Thana= $("#Thana");
	 var InDhaka= $("#InDhaka");
	 var District= $("#District");
	 var Division= $("#Division");
	var StartingMonth=$("#StartingMonth");
	var CustomerType=$("#CustomerType");
	 var PropertyType=$("#PropertyType");
	 var RentFor=$("#RentFor");
	
	 var nameOk=0;
	var rentOk=0;
	var advanceOk=0;
	 var includeOk=0;
	 var customerTypeOk=0;
	var zipCodeOk=0;
	var maximumBorderOk=0;
	var startingMonthOk=0;
	 var streetOk=0;
	 var thanaOk=0;
	 var inDhakaOk=0;
	 var divisionOk=0;
	 var districtOk=0;
	 var fileOk=0;
	 var fileOk1=0;
	 var fileOk2=0;
	 var fileOk3=0;
	 var fileOk4=0;
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
	 
	function autoDouble(datakey1,datakey2,data,id)
	 {
		  var dataPost = {
                        "datakey1":datakey1,
			            "datakey2":datakey2,
                        "data":data
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "CreateAddPHP.php",
                        data: { autoDouble: dataString },
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
	
	function doubleComplete(datakey1,datakey2,id)
	 {
		  var dataPost = {
                        "datakey1":datakey1,
			            "datakey2":datakey2
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "CreateAddPHP.php",
                        data: { doubleComplete: dataString },
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
	 
	 function validfile() {
                    var ext = file.val().split('.').pop().toLowerCase();
                    if ($.inArray(ext, ['jpg', 'jpeg','png']) === -1) {
                        return 0;
                    }
                    else {
                        var filesize = file[0].files[0].size / 1024;
                        if (filesize / 1024 <= 2) {
                            return 1;
                        }
                        else {
                            return 2;
                        }
                    }
                }
	function validfileOther(id) {
                    var ext = id.val().split('.').pop().toLowerCase();
                    if ($.inArray(ext, ['jpg', 'jpeg','png']) === -1) {
                        return 0;
                    }
                    else {
                        var filesize = id[0].files[0].size / 1024;
                        if (filesize / 1024 <= 2) {
                            return 1;
                        }
                        else {
                            return 2;
                        }
                    }
                }
	  function readURL2(input) {

                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            img.attr('src', e.target.result);
                        };

                        reader.readAsDataURL(input.files[0]);
                    }
                }
	
	function readURL1(input,show) {

                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            show.attr('src', e.target.result);
                        };

                        reader.readAsDataURL(input.files[0]);
                    }
                }
	
	
	 function PropicErr() {
		                  if (emptyCheck(file)) {

                        if (validfile() === 1) {
							readURL2(this);
                             rmvErr(file,fileErr);
				                         rmvValid(file);
				                         addValid(file,fileErr);
				                         fileOk=0;
                        }
                        else if (validfile() === 2) {
							rmvErr(file,fileErr);
				                         rmvValid(file);
				                         addErr(file,fileErr,"img size is bigger than 2mb");
				                         fileOk=1;
                        }
                        else {
                            rmvErr(file,fileErr);
				                         rmvValid(file);
				                         addErr(file,fileErr,"invalid file type");
				                         fileOk=1;
                        }
                    }
                    else {
                        
                         rmvErr(file,fileErr);
				                         rmvValid(file);
				                         addErr(file,fileErr,"Cover Photo is required");
				                         fileOk=1;
                    }
	 }
	
	 
	         file.change(function () {

                     if (emptyCheck(file)) {

                        if (validfile() === 1) {
							readURL2(this);
                             rmvErr(file,fileErr);
				                         rmvValid(file);
				                         addValid(file,fileErr);
				                         fileOk=0;
                        }
                        else if (validfile() === 2) {
							rmvErr(file,fileErr);
				                         rmvValid(file);
				                         addErr(file,fileErr,"img size is bigger than 2mb");
				                         fileOk=1;
                        }
                        else {
                            rmvErr(file,fileErr);
				                         rmvValid(file);
				                         addErr(file,fileErr,"invalid file type");
				                         fileOk=1;
                        }
                    }
                    else {
                        
                       rmvErr(file,fileErr);
				                         rmvValid(file);
				                         addErr(file,fileErr,"Cover Photo is required");
				                         fileOk=1;
                    }
                });
	
	file1.change(function () {

                      if (emptyCheck(file1)) {

                        if (validfileOther(file1) === 1) {
							readURL1(this,img1);
                             rmvErr(file1,fileErr1);
				                         rmvValid(file1);
				                         addValid(file1,fileErr1);
				                         fileOk1=0;
                        }
                        else if (validfileOther(file1) === 2) {
							rmvErr(file1,fileErr1);
				                         rmvValid(file1);
				                         addErr(file1,fileErr1,"img size is bigger than 2mb");
				                         fileOk1=1;
                        }
                        else {
                            rmvErr(file1,fileErr1);
				                         rmvValid(file1);
				                         addErr(file1,fileErr1,"invalid file type");
				                         fileOk1=1;
                        }
                    }
                    else {
                        
                       rmvErr(file1,fileErr1);
				                         rmvValid(file1);
				                       
				                         fileOk1=0;
                    }
                });
	
	file2.change(function () {

                      if (emptyCheck(file2)) {

                        if (validfileOther(file2) === 1) {
							readURL1(this,img2);
                             rmvErr(file2,fileErr2);
				                         rmvValid(file2);
				                         addValid(file2,fileErr2);
				                         fileOk2=0;
                        }
                        else if (validfileOther(file2) === 2) {
							rmvErr(file2,fileErr2);
				                         rmvValid(file2);
				                         addErr(file2,fileErr2,"img size is bigger than 2mb");
				                         fileOk2=1;
                        }
                        else {
                            rmvErr(file2,fileErr2);
				                         rmvValid(file2);
				                         addErr(file2,fileErr2,"invalid file type");
				                         fileOk2=1;
                        }
                    }
                    else {
                        
                       rmvErr(file2,fileErr2);
				                         rmvValid(file2);
				                       
				                         fileOk2=0;
                    }
                });
	
	file3.change(function () {

                      if (emptyCheck(file3)) {

                        if (validfileOther(file3) === 1) {
							readURL1(this,img3);
                             rmvErr(file3,fileErr3);
				                         rmvValid(file3);
				                         addValid(file3,fileErr3);
				                         fileOk3=0;
                        }
                        else if (validfileOther(file3) === 2) {
							rmvErr(file3,fileErr3);
				                         rmvValid(file3);
				                         addErr(file3,fileErr3,"img size is bigger than 2mb");
				                         fileOk3=1;
                        }
                        else {
                            rmvErr(file3,fileErr3);
				                         rmvValid(file3);
				                         addErr(file3,fileErr3,"invalid file type");
				                         fileOk3=1;
                        }
                    }
                    else {
                        
                       rmvErr(file3,fileErr3);
				                         rmvValid(file3);
				                       
				                         fileOk3=0;
                    }
                });
	
	
	file4.change(function () {

                      if (emptyCheck(file4)) {

                        if (validfileOther(file4) === 1) {
							readURL1(this,img4);
                             rmvErr(file4,fileErr4);
				                         rmvValid(file4);
				                         addValid(file4,fileErr4);
				                         fileOk4=0;
                        }
                        else if (validfileOther(file4) === 2) {
							rmvErr(file4,fileErr4);
				                         rmvValid(file4);
				                         addErr(file4,fileErr4,"img size is bigger than 2mb");
				                         fileOk4=1;
                        }
                        else {
                            rmvErr(file4,fileErr4);
				                         rmvValid(file4);
				                         addErr(file4,fileErr4,"invalid file type");
				                         fileOk4=1;
                        }
                    }
                    else {
                        
                       rmvErr(file4,fileErr4);
				                         rmvValid(file4);
				                       
				                         fileOk4=0;
                    }
                });
	
	  function NameErr()
	 {
		 if(emptyCheck(name))
			 {
				 var data = name.val();
                        var regx = /^[a-z0-9]*$/;
                        if (validate(data, regx))
							{
							    var exist = name.val();
								 var dataPost = {
                        "col":"Name",
                        "data":exist
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "CreateAddPHP.php",
                        data: { checkdata: dataString },
                        type: 'POST',
                        success: function (response)
                        {
                            if(response==="1")
                            {
                               rmvErr(name,nameErr);
				                         rmvValid(name);
				                         addErr(name,nameErr,"already exist");
				                         nameOk=1;
                            }
                            else if(response==="0")
                            {
										 rmvErr(name,nameErr);
				                         rmvValid(name);
				                         addValid(name,nameErr);
				                         nameOk=0;
                            }
                        }
                    });
							}
				 else
				 {
			     rmvErr(name,nameErr);
				 rmvValid(name);
				 addErr(name,nameErr,"Invalid Property Name");
				 nameOk=1;
				 }
			 }
		 else
			 {
				 rmvErr(name,nameErr);
				 rmvValid(name);
				 addErr(name,nameErr,"Property Name is required");
				 nameOk=1;
			 }
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
	
	function ZipCodeErr()
	 {
		 if(emptyCheck(zipCode))
			{
				 var data = zipCode.val();
                        var regx = /^\d+$/;
                        if (validate(data, regx))
							{
								 rmvErr(zipCode,zipCodeErr);
				 rmvValid(zipCode);
				 addValid(zipCode,zipCodeErr);
				 zipCodeOk=0;
							}
				else
					{
						rmvErr(zipCode,zipCodeErr);
				 rmvValid(zipCode);
				 addErr(zipCode,zipCodeErr,"Invalid");
				 zipCodeOk=1;
					}
			}
		 else
			 {
				 rmvErr(zipCode,zipCodeErr);
				 rmvValid(zipCode);
				 zipCodeOk=0;
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
	 
	 function StreetErr()
	 {
		 if(emptyCheck(street))
			{
						rmvErr(street,streetErr);
				 rmvValid(street);
				 addValid(street,streetErr);
				 streetOk=0;
			}
		 else
			 {
				 
						rmvErr(street,streetErr);
				 rmvValid(street);
				 addErr(street,streetErr,"Street is required");
				 streetOk=1;
			 }
	 }
	
	 function ThanaErr()
	 {
		  if(emptyCheck(thana))
			{
			
		  var dataPost = {
                        "data":thana.val(),
			            "datakey":"Thana"
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
                               rmvErr(thana,thanaErr);
				 rmvValid(thana);
				 addValid(thana,thanaErr);
				 thanaOk=0;
                            }
                            else
                            {
                              rmvErr(thana,thanaErr);
				 rmvValid(thana);
				 addErr(thana,thanaErr,"Invalid Thana");
				 thanaOk=1;
                            }
                        }
                    });
			}
			else
			{
			     rmvErr(thana,thanaErr);
				 rmvValid(thana);
				 addErr(thana,thanaErr,"Thana name is required");
				 thanaOk=1;
			}
	 }
	 
	function InDhakaErr()
	 {
		  if(emptyCheck(inDhaka))
			{
			
		  var dataPost = {
                        "data":inDhaka.val(),
			            "datakey1":"NorthDhaka",
			            "datakey2":"SouthDhaka"
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "CreateAddPHP.php",
                        data: { checklookup2: dataString },
                        type: 'POST',
                        success: function (response)
                        {
                            if(response==="1")
                            {
                               rmvErr(inDhaka,inDhakaErr);
				 rmvValid(inDhaka);
				 addValid(inDhaka,inDhakaErr);
				 inDhakaOk=0;
                            }
                            else
                            {
                              rmvErr(inDhaka,inDhakaErr);
				 rmvValid(inDhaka);
				 addErr(inDhaka,inDhakaErr,"Invalid Area Name");
				 thanaOk=1;
                            }
                        }
                    });
			}
			else
			{
			     rmvErr(inDhaka,inDhakaErr);
				 rmvValid(inDhaka);
				 addErr(inDhaka,inDhakaErr,"Area name is required");
				 inDhakaOk=1;
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
	 
	 function DistrictErr()
	 {
		  if(emptyCheck(district))
			{
			
		  var dataPost = {
                        "data":district.val(),
			            "datakey":"District"
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
                               rmvErr(district,districtErr);
				 rmvValid(district);
				 addValid(district,districtErr);
				 districtOk=0;
                            }
                            else
                            {
                              rmvErr(district,districtErr);
				 rmvValid(district);
				 addErr(district,districtErr,"Invalid district name");
				 districtOk=1;
                            }
                        }
                    });
			}
			else
			{
			     rmvErr(district,districtErr);
				 rmvValid(district);
				 addErr(district,districtErr,"District name is required");
				 districtOk=1;
			}
	 }
	 
	 function DevisionErr()
	 {
		  if(emptyCheck(division))
			{
			
		  var dataPost = {
                        "data":division.val(),
			            "datakey":"Devision"
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
                               rmvErr(division,divisionErr);
				 rmvValid(division);
				 addValid(division,divisionErr);
				 divisionOk=0;
                            }
                            else
                            {
                              rmvErr(division,divisionErr);
				 rmvValid(division);
				 addErr(division,divisionErr,"Invalid Division");
				 divisionOk=1;
                            }
                        }
                    });
			}
			else
			{
			     rmvErr(division,divisionErr);
				 rmvValid(division);
				 addErr(division,divisionErr,"Division is required");
				 divisionOk=1;
			}
	 }
	 
	  $(function()
				{
		 //getdata();
		  doubleComplete("NorthDhaka","SouthDhaka",InDhaka);
		   allComplete("Month",StartingMonth);
		 allComplete("Thana",Thana);
		  allComplete("CustomerType",CustomerType);
		  allComplete("District",District);
		 allComplete("Devision",Division);
		  allComplete("PropertyType",PropertyType);
		  allComplete("RentFor",RentFor);
	 });
	
	  name.click(function()
				  {
		 rmvErr(name,nameErr);
		 rmvValid(name);
	 });
	name.keyup(function()
				  {
		 NameErr();
	 });
	 name.blur(function()
				  {
		NameErr();
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
	
	  zipCode.click(function()
				  {
		 rmvErr(zipCode,zipCodeErr);
		 rmvValid(zipCode);
	 });
	 
	 zipCode.keyup(function()
				{
		 ZipCodeErr();
	 });
	 
	  zipCode.blur(function()
				{
		  ZipCodeErr();
	 });
	
	  street.click(function()
				  {
		 rmvErr(street,streetErr);
		 rmvValid(street);
	 });
	 
	  street.blur(function()
				{
		 StreetErr();
	 });
	 
	 thana.click(function()
				  {
		 rmvErr(thana,thanaErr);
		 rmvValid(thana);
		 thana.val("");
	 });
	 
	 thana.keyup(function()
				{
		 var data=thana.val();
		 autoComplete("Thana",data,Thana);
	 });
	 
	  thana.blur(function()
				{
		 ThanaErr();
	 });
	
	 inDhaka.click(function()
				  {
		 rmvErr(inDhaka,inDhakaErr);
		 rmvValid(inDhaka);
		 inDhaka.val("");
	 });
	 
	 inDhaka.keyup(function()
				{
		 var data=inDhaka.val();
		 autoDouble("NorthDhaka","SouthDhaka",data,InDhaka);
	 });
	 
	  inDhaka.blur(function()
				{
		 InDhakaErr();
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
	 
	 district.click(function()
				  {
		 rmvErr(district,districtErr);
		 rmvValid(district);
		 district.val("");
	 });
	 
	 district.keyup(function()
				{
		 var data=district.val();
		 autoComplete("District",data,District);
	 });
	 
	  district.blur(function()
				{
		 DistrictErr();
	 });
	 
	 division.click(function()
				  {
		 rmvErr(division,divisionErr);
		 rmvValid(division);
		 division.val("");
	 });
	 
	 division.keyup(function()
				{
		 var data=division.val();
		 autoComplete("Devision",data,Division);
	 });
	 
	  division.blur(function()
				{
		 DevisionErr();
	 });
	 $("#cancel").click(function()
					   {
		 location.href = './Home.php';
	 });
	 $("#create").click(function(){
		 NameErr();
		 RentErr();
		 StreetErr();
		 ZipCodeErr();
		 StartingMonthErr();
		 AdvanceErr();
		 ThanaErr();
		 InDhakaErr();
		 DistrictErr();
		 DevisionErr();
		 PropicErr();
		 IncludeErr();
		 CustomerTypeErr();
		 MaximumBorderErr();
		 PropertyTypeErr();
		 AreaErr();
		 FloorErr();
		 RentForErr();
		 DescriptionErr();
		 if(nameOk===0&&startingMonthOk===0&&rentOk===0&&zipCodeOk===0&&advanceOk===0&&maximumBorderOk===0&&includeOk===0&&customerTypeOk===0&&propertyTypeOk===0&&areaOk===0&&floorOk===0&&rentForOk===0&&descriptionOk===0&&streetOk===0&&thanaOk===0&&inDhakaOk===0&&districtOk===0&&divisionOk===0&&fileOk===0&&fileOk1===0&&fileOk2===0&&fileOk3===0&&fileOk4===0)
			 {
				 $("#form").submit();
			 }
	 });
	 
 });