 $(document).ready(function(){
	  function Err()
	  {
		   $(".log-status").addClass("wrong-entry");
           $(".alert").fadeIn(500);
           setTimeout( "$('.alert').fadeOut(1500);",3000 );
	  }
        $(".log-btn").click(function(){
			if($("#userName").val()===null||$("#password").val()===null)
			 {
                 Err();
			 }
			   else
			   {
			       var dataPost = {
                        "user":$("#userName").val(),
                        "pass":$("#password").val()
                    };
                    var dataString = JSON.stringify(dataPost);

                    $.ajax({
                        url: "LoginPHP.php",
                        data: { valid: dataString },
                        type: 'POST',
                        success: function (response)
                        {
                            if(response==="1")
                            {
                              $( "#log" ).submit();
                            }
                            else
                            {
                              Err();
                            }
                        }
                    });
			   }
        });
	 
	 $("#reg").click(function(){
		 location.href = './Register.php';
	 });
						 
        $(".form-control").keypress(function(){
            $(".log-status").removeClass("wrong-entry");
        });

    });