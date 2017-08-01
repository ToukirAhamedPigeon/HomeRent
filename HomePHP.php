<?php
require("UserCheck.php");
require("connection.php");
if(isset($_POST["getAll"]))
{
	$obj = json_decode($_POST["getAll"]);
	$data=$obj->data;
	$_POST["getAll"]=null;
		$sql='SELECT * FROM `property` WHERE `status`="open" ORDER BY `Id` DESC';
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
elseif(isset($_POST["getSearch"]))
{
	$obj = json_decode($_POST["getSearch"]);
	$data=$obj->data;
	$_POST["getSearch"]=null;
		$sql='SELECT * FROM `property` WHERE `InDhaka`="'.$data.'" AND `status`="open" ORDER BY `Id` DESC';
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
elseif(isset($_POST["getdata"]))
{
	$obj = json_decode($_POST["getdata"]);
	$_POST["getdata"]=null;
	$username=$_SESSION["UserName"];
		$sql='SELECT * FROM `userlogin` WHERE `UserName`="'. $username.'"';
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