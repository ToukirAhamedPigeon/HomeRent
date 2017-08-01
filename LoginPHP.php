<?php
require("connection.php");
if(isset($_POST["valid"]))
{
$obj = json_decode($_POST["valid"]);
$UserName=$obj->user;
$Password=$obj->pass;
	$sql='SELECT `Type` FROM `userlogin` WHERE `UserName`="'.$UserName.'" AND `Password`="'.$Password.'" ';
	 $result = mysqli_query($conn, $sql)or die(mysqli_error());
    if (mysqli_num_rows($result) > 0)
    {
        echo "1";
    }
    else
    {
        echo "0";
    }
}

if(isset($_POST["UserName"]) && isset($_POST["Password"]))
{
	$UserName=$_POST["UserName"];
    $Password=$_POST["Password"];
	$sql='SELECT `Type` FROM `userlogin` WHERE `UserName`="'.$UserName.'" AND `Password`="'.$Password.'" ';
	 $result = mysqli_query($conn, $sql)or die(mysqli_error());
    if (mysqli_num_rows($result) > 0)
    {
		session_start();
		if (mysqli_num_rows($result) > 0)
    {
    while($row = mysqli_fetch_assoc($result)) {
    $_SESSION["UserName"]=$UserName;
	$_SESSION["Type"]=$row["Type"];
		if($_SESSION["Type"]=="Admin")
		{
	       header('Location:Admin.php');
		}
		else
		{
			header('Location:Home.php');
		}
	}
    }
    else
    {
       header('Location:Login.php');
    }
}
}
?>