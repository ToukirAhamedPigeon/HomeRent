<?php
require("AdminCheck.php");
?>
<?php
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
elseif(isset($_POST["getUserSearch"]))
{
	$obj = json_decode($_POST["getUserSearch"]);
	$data=$obj->data;
	$_POST["getUserSearch"]=null;
		$sql='SELECT * FROM `userlogin` WHERE `FirstName` LIKE "%'.$data.'%" OR `LastName`  LIKE "%'.$data.'%" ORDER BY `Id` DESC';
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
elseif(isset($_POST["checkShow"]))
{
	$obj = json_decode($_POST["checkShow"]);
	$data=$obj->data;
	$_POST["checkShow"]=null;
		echo $_SESSION["AdminShow"];
}
elseif(isset($_POST["getPropertySearch"]))
{
	$obj = json_decode($_POST["getPropertySearch"]);
	$data=$obj->data;
	$_POST["getPropertySearch"]=null;
		$sql='SELECT * FROM `property` WHERE `Name` LIKE "%'.$data.'%" ORDER BY `Id` DESC';
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
elseif(isset($_POST["getBookingSearch"]))
{
	$obj = json_decode($_POST["getBookingSearch"]);
	$data=$obj->data;
	$_POST["getBookingSearch"]=null;
	$sql='SELECT * FROM `booking` WHERE `UserName` LIKE "%'.$data.'%" OR `PropertyName` LIKE "%'.$data.'%"  ORDER BY `Id` DESC';
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
	if(isset($_REQUEST["id"]))
	{
		$id=$_REQUEST["id"];
	}
	if(isset($_REQUEST["user"]))
	{
		$user=$_REQUEST["user"];
	}
	if(isset($_REQUEST["property"]))
	{
		$property=$_REQUEST["property"];
	}
	$sql='UPDATE `booking` SET `Confirmation`="Confirmed" WHERE `UserName`="'.$user.'" AND `PropertyName`="'.$property.'"';
    $result = mysqli_query($conn, $sql)or die(mysqli_error());
	
	$sql='UPDATE `booking` SET `Confirmation`="Canceled" WHERE `UserName`!="'.$user.'" AND `PropertyName`="'.$property.'"';
    $result = mysqli_query($conn, $sql)or die(mysqli_error());
  
      $sql='UPDATE `property` SET `Status`="Close" WHERE `Name`="'.$property.'"';
		$result = mysqli_query($conn, $sql)or die(mysqli_error());
    
		$now = (new \DateTime())->format('Y/m/d H:i:s');
		$content="Your booking request of ".$property." has been Confirmed at ".$now.". Thank You.";
      $sql='INSERT INTO `Message`(`UserName`, `Content`, `DateTime`, `Status`) VALUES ("'.$user.'","'.$content.'","'.$now.'","Unread")';
		$result = mysqli_query($conn, $sql)or die(mysqli_error());
	
			$sql='SELECT `UserName` FROM `booking` WHERE `UserName`!="'.$user.'" AND `PropertyName`="'.$property.'" ORDER BY `Id` DESC';
            $result = mysqli_query($conn, $sql)or die(mysqli_error());
            $arr=array();
            if (mysqli_num_rows($result) > 0)
            {
				$n=0;
            while($row = mysqli_fetch_assoc($result)) {
            $arr[$n]=$row["UserName"];
				$n++;
             }
				
	        }
	for($i=0; $i<$n;$i++)
				{
					 $content="Sorry!!! Your booking request of ".$property." has been Canceled at ".$now.".";
                      $sql='INSERT INTO `Message`(`UserName`, `Content`, `DateTime`, `Status`) VALUES ("'.$arr[$i].'","'.$content.'","'.$now.'","Unread")';
		               $result = mysqli_query($conn, $sql)or die(mysqli_error());
				}
	 
	    $_SESSION["AdminShow"]="Third";
		header('Location:Admin.php');
}
?>