<?php
require("UserCheck.php");
?>
<?php
require("connection.php");
if(isset($_POST["getdata"]))
{
	$obj = json_decode($_POST["getdata"]);
	$data=$obj->data;
	$_POST["getdata"]=null;
		$sql='SELECT * FROM `userlogin` WHERE `UserName`="'. $data.'"';
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
elseif(isset($_POST["getbook"]))
{
	$obj = json_decode($_POST["getbook"]);
	$data=$obj->data;
	$_POST["getbook"]=null;
	$sql='SELECT * FROM `booking` WHERE `UserName` ="'.$data.'" ORDER BY `Id` DESC';
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