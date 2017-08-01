<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
  
  <link rel="stylesheet prefetch" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="./content/bootstrap-3.3.7-dist/css/bootstrap.css" />
    <link rel="stylesheet" href="./content/bootstrap-3.3.7-dist/css/bootstrap-theme.css" />
      <link rel="stylesheet" href="css/style.css">
      <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="js/jquery-3.1.1.js"></script>

    <script src="js/index.js"></script>

      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>

<body>
 <form id="log" action="LoginPHP.php" method="post">
  <div class="login-form">
     <h1>Home Rent</h1>
     <div class="form-group ">
       <input type="text" class="form-control" name="UserName" placeholder="Username " id="userName">
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
       <input type="password" class="form-control" name="Password" placeholder="Password" id="password">
       <i class="fa fa-lock"></i>
     </div>
      <span class="alert">username password don't match</span>
      <a class="link" href="ForgetPassword.php">Lost your password?</a>
     <input type="button" class="log-btn" value="Log In" >
     <h4>Or</h4>
     <input type="button" class="reg-btn" id="reg" value="Register" >
     
    
   </div>
   </form>
 
</body>
</html>
