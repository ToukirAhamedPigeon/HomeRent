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
		$sql='SELECT * FROM `property` WHERE `Name`="'. $data.'"';
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
elseif(isset($_POST["getImage"]))
{
	$obj = json_decode($_POST["getImage"]);
	$data=$obj->data;
	$_POST["getImage"]=null;
		$sql='SELECT * FROM `propertycontent` WHERE `PropertyName`="'. $data.'"';
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
elseif(isset($_POST["booking"]))
{
	$UserName=$_SESSION["UserName"];
	$obj = json_decode($_POST["booking"]);
	$data=$obj->data;
	$_POST["booking"]=null;
	$sql='SELECT * FROM `booking` WHERE `PropertyName`="'. $data.'" AND `UserName`="'.$UserName.'"';
		
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
elseif(isset($_POST["prebook"]))
{
	$UserName=$_SESSION["UserName"];
	$obj = json_decode($_POST["prebook"]);
	$data=$obj->data;
	$_POST["prebook"]=null;
	$sql='SELECT * FROM `property` WHERE `Name`="'. $data.'"';
		
    $result = mysqli_query($conn, $sql)or die(mysqli_error());
    if (mysqli_num_rows($result) > 0)
    {
		while($row = mysqli_fetch_assoc($result)) {
			echo $row["Status"];
		}
	}
}
elseif(isset($_POST["Book"]))
{
	$UserName=$_SESSION["UserName"];
	$obj = json_decode($_POST["Book"]);
	$data=$obj->data;
	$datetime=(new \DateTime())->format('Y/m/d/ H:i:s');
	$_POST["Book"]=null;
	$sql='INSERT INTO `booking`(`UserName`, `PropertyName`, `DateTime`, `Confirmation`) VALUES ("'.$UserName.'","'.$data.'","'.$datetime.'","Pending")';
		
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
elseif(isset($_POST["unBook"]))
{
	$UserName=$_SESSION["UserName"];
	$obj = json_decode($_POST["unBook"]);
	$data=$obj->data;
	$_POST["unBook"]=null;
	$sql='DELETE FROM `booking` WHERE `PropertyName`="'. $data.'" AND `UserName`="'.$UserName.'"';
		
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
?>