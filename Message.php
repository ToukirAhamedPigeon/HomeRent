<?php
require("UserCheck.php");
require("connection.php");
if(isset($_POST["getMessage"]))
{
	$obj = json_decode($_POST["getMessage"]);
	$data=$obj->data;
	$_POST["getMessage"]=null;
	$username=$_SESSION["UserName"];
		$sql='SELECT * FROM `message` WHERE `UserName`="'. $username.'" AND `Status`="Unread"';
$result = mysqli_query($conn, $sql)or die(mysqli_error());
 $arr=array();
    if (mysqli_num_rows($result) > 0)
    {
    while($row = mysqli_fetch_assoc($result)) {
    $arr[]=$row;
    }
	    $sql='UPDATE `message` SET `Status`="Read" WHERE `UserName`="'.$username.'" AND `Status`="Unread"'; 
        $result = mysqli_query($conn, $sql)or die(mysqli_error());
   echo json_encode($arr);
	}
}
else if(isset($_POST["bringMessage"]))
{
	$obj = json_decode($_POST["bringMessage"]);
	$data=$obj->data;
	$_POST["bringMessage"]=null;
	$username=$_SESSION["UserName"];
		$sql='SELECT * FROM `message` WHERE `UserName`="'. $username.'" ORDER BY `Id` DESC';
$result = mysqli_query($conn, $sql)or die(mysqli_error());
 $arr=array();
    if (mysqli_num_rows($result) > 0)
    {
    while($row = mysqli_fetch_assoc($result)) {
    $arr[]=$row;
    }
   echo json_encode($arr);
	}
}
if(isset($_POST["setMessage"]))
{
	$obj = json_decode($_POST["setMessage"]);
	$data=$obj->data;
	$_POST["setMessage"]=null;
	$username=$_SESSION["UserName"];
		$sql='SELECT * FROM `message` WHERE `UserName`="'. $username.'" AND `Status`="Unread"';
$result = mysqli_query($conn, $sql)or die(mysqli_error());
 $arr=array();
    if (mysqli_num_rows($result) > 0)
    {
    while($row = mysqli_fetch_assoc($result)) {
    $arr[]=$row;
    }
   echo json_encode($arr);
	}
}
?>