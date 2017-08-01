 $(document).ready(function(){
	  var oldPassword= $("#oldPassword");
	  var password= $("#password");
	  var confPassword= $("#confPassword");
	  var contactNumber= $("#contactNumber");
	  var email= $("#email"); 
	  var nid= $("#nid");
	 var street= $("#street");
	 var thana= $("#thana");
	  var district= $("#district");
	 var img= $("#pic");
	 var division= $("#division");
	 var file= $("#fileToUpload");
	 var oldPasswordErr= $("#oldPasswordErr");
	  var passwordErr= $("#passwordErr");
	  var confPasswordErr= $("#confPasswordErr");
	  var contactNumberErr= $("#contactNumberErr");
	  var emailErr= $("#emailErr"); 
	  var nidErr= $("#nidErr");
	 var streetErr= $("#streetErr");
	 var thanaErr= $("#thanaErr");
	  var districtErr= $("#districtErr");
	 var divisionErr= $("#divisionErr");
	 var fileErr= $("#imageErr");
	 var Thana= $("#Thana");
	 var District= $("#District");
	 var Division= $("#Division");
	 
	 var oldPasswordOk=0;
	 var passwordOk=0;
	 var confPasswordOk=0;
	 var contactNumberOk=0;
	 var emailOk=0;
	  var nidOk=0;
	 var streetOk=0;
	 var thanaOk=0;
	 var divisionOk=0;
	 var districtOk=0;
	 var fileOk=0;
	 
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
                        "data":"ok"
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "EditInfoPHP.php",
                        data: { getdata: dataString },
                        type: 'POST',
                        success: function (response)
                        {
							var option = JSON.parse(response);
							
							contactNumber.val(option[0].ContactNumber);
							email.val(option[0].Email);
							nid.val(option[0].NID);
							street.val(option[0].Street);
							thana.val(option[0].Thana);
							district.val(option[0].District);
							division.val(option[0].Division);
							img.attr("src",option[0].Propic);
                        }
                    });
	 }
	/* function checkdata(col,data)
	 {
		  var dataPost = {
                        "col":col,
                        "data":data
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "RegisterPHP.php",
                        data: { checkdata: dataString },
                        type: 'POST',
                        success: function (response)
                        {
							alert(response);
                            if(response==="1")
                            {
                              return 1;
                            }
                            else if(response==="0")
                            {
                              return 0;
                            }
                        }
                    });
	 }
	 
	  function checklookup(datakey,data)
	 {
		  var dataPost = {
                        "data":data,
			            "datakey":datakey
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "RegisterPHP.php",
                        data: { checklookup: dataString },
                        type: 'POST',
                        success: function (response)
                        {
                            if(response==="1")
                            {
                              return true;
                            }
                            else
                            {
                              return false;
                            }
                        }
                    });
	 }
	 
	 function checkpass(col,data)
	 {
		  var dataPost = {
                        "col":col,
                        "data":data
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "EditInfoPHP.php",
                        data: { checkpass: dataString },
                        type: 'POST',
                        success: function (response)
                        {
							alert(response);
                            if(response==="1")
                            {
                              return 1;
                            }
                            else if(response==="0")
                            {
                              return 0;
                            }
                        }
                    });
	 }*/
	 
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
	 
	 function validfile() {
                    var ext = file.val().split('.').pop().toLowerCase();
                    if ($.inArray(ext, ['jpg', 'jpeg','png']) === -1) {
                        return 0;
                    }
                    else {
                        var filesize = file[0].files[0].size / 1024;
                        if (filesize / 1024 <= 10) {
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
				                         addErr(file,fileErr,"img size is bigger than 5mb");
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
				                       
				                         fileOk=0;
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
				                         addErr(file,fileErr,"img size is bigger than 5mb");
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
				                         addErr(file,fileErr,"ProPic is required");
				                         fileOk=1;
                    }
                });

	 function OldPasswordErr()
	 {
		  if(emptyCheck(oldPassword))
			 {
				 var a=oldPassword.val();
		  var dataPost = {
                        "col":"Password",
                        "data":a
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "EditInfoPHP.php",
                        data: { checkpass: dataString },
                        type: 'POST',
                        success: function (response)
                        {
                            if(response==="1")
                            {
                               rmvErr(oldPassword,oldPasswordErr);
				               rmvValid(oldPassword);
				               addValid(oldPassword,oldPasswordErr);
				               oldPasswordOk=0;
                            }
                            else if(response==="0")
                            {
                               rmvErr(oldPassword,oldPasswordErr);
				               rmvValid(oldPassword);
				               addErr(oldPassword,oldPasswordErr,"Password don't match");
				               oldPasswordOk=1;
                            }
                        }
                    });
			 }
		 else
			 {
				 rmvErr(oldPassword,oldPasswordErr);
				 rmvValid(oldPassword);
				 addErr(oldPassword,oldPasswordErr,"Password is required");
				 oldPasswordOk=1;
			 }
	 }
	 
	 function PasswordErr()
	 {
		  if(emptyCheck(password))
			 {
				 var data = password.val();
                        var regx = /^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})/;
                        if (validate(data, regx))
							{
					    var data1 = password.val();
                        var regx1 = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
								if (validate(data1, regx1))
							{
								 rmvErr(password,passwordErr);
				 rmvValid(password);
				 addValid(password,passwordErr);
				 passwordOk=0;
							}
								else
									{
										 rmvErr(password,passwordErr);
				 rmvValid(password);
				 addErr(password,passwordErr,"medium type Password");
				 passwordOk=1;
									}
							}
				 else
				 {
			     rmvErr(password,passwordErr);
				 rmvValid(password);
				 addErr(password,passwordErr,"low type Password");
				 passwordOk=1;
				 }
			 }
		 else
			 {
				 rmvErr(password,passwordErr);
				 rmvValid(password);
				 addErr(password,passwordErr,"Password is required");
				 passwordOk=1;
			 }
	 }
	 
	 function ConfirmPasswordErr()
	 {
		 if(emptyCheck(confPassword))
			 {
				 if(confPassword.val()===password.val())
					 {
						 rmvErr(confPassword,confPasswordErr);
				 rmvValid(confPassword);
				 addValid(confPassword,confPasswordErr);
				 confPasswordOk=0;
					 }
				 else
					 {
						 rmvErr(confPassword,confPasswordErr);
				 rmvValid(confPassword);
				 addErr(confPassword,confPasswordErr,"Don't Match");
				 confPasswordOk=1;
					 }
			 }
		  else
			 {
				 rmvErr(confPassword,confPasswordErr);
				 rmvValid(confPassword);
				 addErr(confPassword,confPasswordErr,"Password must be confirmed");
				 confPasswordOk=1;
			 }
	 }
	 
	 
	 function ContactNumberErr()
	 {
		  if(emptyCheck(contactNumber))
			{
				 var data = contactNumber.val();
                        var regx = /^(?:\+88|01)?(?:\d{11}|\d{13})$/;
                        if (validate(data, regx))
							{
								 var dataPost = {
                        "col":"ContactNumber",
                        "data":contactNumber.val()
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "EditInfoPHP.php",
                        data: { checkdata: dataString },
                        type: 'POST',
                        success: function (response)
                        {
                            if(response==="1")
                            {
                              
						 rmvErr(contactNumber,contactNumberErr);
				 rmvValid(contactNumber);
				 addErr(contactNumber,contactNumberErr,"Already Exist");
				 contactNumberOk=1;
                            }
                            else if(response==="0")
                            {
                              
								 rmvErr(contactNumber,contactNumberErr);
				 rmvValid(contactNumber);
				 addValid(contactNumber,contactNumberErr);
				 contactNumberOk=0;
                            }
                        }
							});
							}
				else
					{
						 rmvErr(contactNumber,contactNumberErr);
				 rmvValid(contactNumber);
				 addErr(contactNumber,contactNumberErr,"Invalid");
				 contactNumberOk=1;
					}
			}
		 else
			 {
				 rmvErr(contactNumber,contactNumberErr);
				 rmvValid(contactNumber);
				 addErr(contactNumber,contactNumberErr,"Contact Number is required");
				 contactNumberOk=1;
			 }
	 }
	 
	 function EmailErr()
	 {
		 if(emptyCheck(email))
			{
				 var data = email.val();
                        var regx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                        if (validate(data, regx))
							{
								 var dataPost = {
                        "col":"Email",
                        "data":email.val()
                    };
		 var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "EditInfoPHP.php",
                        data: { checkdata: dataString },
                        type: 'POST',
                        success: function (response)
                        {
                            if(response==="1")
                            {
                              
						 rmvErr(email,emailErr);
				 rmvValid(email);
				 addErr(email,emailErr,"Already Exist");
				 emailOk=1;
                            }
                            else if(response==="0")
                            {
                              
								 rmvErr(email,emailErr);
				 rmvValid(email);
				 addValid(email,emailErr);
				 emailOk=0;
                            }
                        }
							});
							}
				else
					{
						 rmvErr(email,emailErr);
				 rmvValid(email);
				 addErr(email,emailErr,"Invalid");
				 emailOk=1;
					}
			}
		 else
			 {
				 rmvErr(email,emailErr);
				 rmvValid(email);
				 addErr(email,emailErr,"Email is required");
				 emailOk=1;
			 }
	 }
	 
	 function NIDErr()
	 {
		 if(emptyCheck(nid))
			{
				 var data = nid.val();
                        var regx = /^\d+$/;
                        if (validate(data, regx))
							{
								 rmvErr(nid,nidErr);
				 rmvValid(nid);
				 addValid(nid,nidErr);
				 nidOk=0;
							}
				else
					{
						rmvErr(nid,nidErr);
				 rmvValid(nid);
				 addErr(nid,nidErr,"Invalid");
				 nidOk=1;
					}
			}
		 else
			 {
				 rmvErr(nid,nidErr);
				 rmvValid(nid);
				 nidOk=0;
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
                        url: "EditInfoPHP.php",
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
                        url: "EditInfoPHP.php",
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
                        url: "EditInfoPHP.php",
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
		 getdata();
		 allComplete("Thana",Thana);
		  allComplete("District",District);
		 allComplete("Devision",Division);
	 });
	 
	 oldPassword.click(function()
				  {
		 rmvErr(oldPassword,oldPasswordErr);
		 rmvValid(oldPassword);
	 });
	oldPassword.keyup(function()
				  {
		 OldPasswordErr();
	 });
	 oldPassword.blur(function()
				  {
		 OldPasswordErr();
	 });
	 var e=0;
	 $("#showoldpass").click(function()
						 {
		   if (e===0) {
                    oldPassword.attr('type', 'text');
                    $("#eyeoldpass").removeClass('glyphicon-eye-open');
                    $("#eyeoldpass").addClass('glyphicon-eye-close');
                    e = 1;
                }
                else
                {
                    oldPassword.attr('type', 'password');
                    $("#eyeoldpass").removeClass('glyphicon-eye-close');
                    $("#eyeoldpass").addClass('glyphicon-eye-open');
                    e = 0;
                }
	 });
	 
	 password.click(function()
				  {
		 rmvErr(password,passwordErr);
		 rmvValid(password);
	 });
	password.keyup(function()
				  {
		 PasswordErr();
	 });
	 password.blur(function()
				  {
		 PasswordErr();
	 });
	 var c=0;
	 $("#showpass").click(function()
						 {
		   if (c===0) {
                    password.attr('type', 'text');
                    $("#eyepass").removeClass('glyphicon-eye-open');
                    $("#eyepass").addClass('glyphicon-eye-close');
                    c = 1;
                }
                else
                {
                     password.attr('type', 'password');
                    $("#eyepass").removeClass('glyphicon-eye-close');
                    $("#eyepass").addClass('glyphicon-eye-open');
                    c = 0;
                }
	 });
	 
	 confPassword.click(function()
				  {
		 rmvErr(confPassword,confPasswordErr);
		 rmvValid(confPassword);
	 });
	confPassword.keyup(function()
				  {
		 ConfirmPasswordErr();
	 });
	 confPassword.blur(function()
				  {
		 ConfirmPasswordErr();
	 });
	 var d=0;
	 $("#showconfpass").click(function()
						 {
		   if (d===0) {
                    confPassword.attr('type', 'text');
                    $("#eyeconfpass").removeClass('glyphicon-eye-open');
                    $("#eyeconfpass").addClass('glyphicon-eye-close');
                    d = 1;
                }
                else
                {
                     confPassword.attr('type', 'password');
                    $("#eyeconfpass").removeClass('glyphicon-eye-close');
                    $("#eyeconfpass").addClass('glyphicon-eye-open');
                    d = 0;
                }
	 });
	 
	 
	  contactNumber.click(function()
				  {
		 rmvErr(contactNumber,contactNumberErr);
		 rmvValid(contactNumber);
	 });
	 
	 contactNumber.keyup(function()
				{
		 ContactNumberErr();
	 });
	 
	  contactNumber.blur(function()
				{
		 ContactNumberErr();
	 });
	 
	  email.click(function()
				  {
		 rmvErr(email,emailErr);
		 rmvValid(email);
	 });
	 
	 email.keyup(function()
				{
		 EmailErr();
	 });
	 
	  email.blur(function()
				{
		  EmailErr();
	 });
	 
	  nid.click(function()
				  {
		 rmvErr(nid,nidErr);
		 rmvValid(nid);
	 });
	 
	 nid.keyup(function()
				{
		 NIDErr();
	 });
	 
	  nid.blur(function()
				{
		  NIDErr();
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
	 $("#can").click(function()
					   {
		 location.href = './Home.php';
	 });
	 $("#finish").click(function(){
		 OldPasswordErr();
		 PasswordErr();
		 ConfirmPasswordErr();
		 ContactNumberErr();
		 EmailErr();
		 NIDErr();
		 StreetErr();
		 ThanaErr();
		 DistrictErr();
		 DevisionErr();
		 PropicErr();
		 if(oldPasswordOk===0&&passwordOk===0&&confPasswordOk===0&&contactNumberOk===0&&emailOk===0&&nidOk===0&&streetOk===0&&thanaOk===0&&districtOk===0&&divisionOk===0&&fileOk===0)
			 {
				 $("#form").submit();
			 }
	 });
	 
 });