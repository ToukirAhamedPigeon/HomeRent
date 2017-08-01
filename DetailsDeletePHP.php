<?php
require("AdminCheck.php");
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
else
{
	if(isset($_POST["propertyname"]))
	{
		$propertyname=$_POST["propertyname"];
	}
	else
	{
		$propertyname=null;
	}
	
	$sql='DELETE FROM `property` WHERE `Name`="'.$propertyname.'"';
$result = mysqli_query($conn, $sql)or die(mysqli_error());
  	$sql='DELETE FROM `propertycontent` WHERE `PropertyName`="'.$propertyname.'"';
		
		$result = mysqli_query($conn, $sql)or die(mysqli_error());
		$sql='DELETE FROM `booking` WHERE `PropertyName`="'.$propertyname.'"';
$result = mysqli_query($conn, $sql)or die(mysqli_error());
         $_SESSION["AdminShow"]="Second";
	
        header('Location:Admin.php');
}
?>