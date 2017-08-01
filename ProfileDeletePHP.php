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
else
{
	if(isset($_POST["username"]))
	{
		$username=$_POST["username"];
	}
	else
	{
		$username=null;
	}
	
	$sql='DELETE FROM `userlogin` WHERE `UserName`="'.$username.'"';
$result = mysqli_query($conn, $sql)or die(mysqli_error());
$sql='DELETE FROM `booking` WHERE `UserName`="'.$username.'"';
$result = mysqli_query($conn, $sql)or die(mysqli_error());
    $_SESSION["AdminShow"]="First";
         header('Location:Admin.php');
	
}
?>