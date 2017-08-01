<?php
require("AdminCheck.php");
?>
<?php
require("connection.php");

if(isset($_POST["checkdata"]))
{
$obj = json_decode($_POST["checkdata"]);

		$col=$obj->col;
		$data=$obj->data;
	$_POST["checkdata"]=null;
	$sql='SELECT `Id` FROM `property` WHERE `'.$col.'`="'.$data.'"';
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
elseif(isset($_POST["getdata"]))
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
elseif(isset($_POST["autoComplete"]))
{
	$obj = json_decode($_POST["autoComplete"]);
	$datakey=$obj->datakey;
		$data=$obj->data;
		$data=preg_replace("#[^0-9a-z]#i","",$data);
	$_POST["autoComplete"]=null;
		$sql='SELECT * FROM `lookup` WHERE `DataKey`="'.$datakey.'" AND `DisplayText` LIKE "%'.$data.'%"';
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
elseif(isset($_POST["allComplete"]))
{
	$obj = json_decode($_POST["allComplete"]);
	$datakey=$obj->datakey;
		$_POST["allComplete"]=null;
		$sql='SELECT * FROM `lookup` WHERE `DataKey`="'.$datakey.'"';
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
elseif(isset($_POST["checklookup"]))
{
$obj = json_decode($_POST["checklookup"]);
		$data=$obj->data;
	    $datakey=$obj->datakey;
	$_POST["checklookup"]=null;
	$sql='SELECT `Id` FROM `lookup` WHERE `DataKey`="'.$datakey.'" AND `DisplayText`="'.$data.'"';
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
else
{
if(isset($_POST["id"]))
{
$id=$_POST["id"];
}
else
{
	$id=NULL;
}
if(isset($_POST["startingmonth"]))
{
$year = (new \DateTime())->format('Y');
$startingmonth=$_POST["startingmonth"].",".$year;
}
else
{
	$startingmonth=NULL;
}
if(isset($_POST["rent"]))
{
$rent=$_POST["rent"]."TK";
}
else
{
	$rent=NULL;
}
if(isset($_POST["advance"]))
{
$advance=$_POST["advance"]."TK";
}
else
{
	$advance=NULL;
}
if(isset($_POST["include"]))
{
$include=$_POST["include"];
}
else
{
	$include=NULL;
}
if(isset($_POST["propertytype"]))
{
$propertytype=$_POST["propertytype"];
}
else
{
	$propertytype=NULL;
}
if(isset($_POST["area"]))
{
$area=$_POST["area"]."sqft";
}
else
{
	$area=NULL;
}
if(isset($_POST["floor"]))
{
$floor=$_POST["floor"];
}
else
{
	$floor=NULL;
}
if(isset($_POST["rentfor"]))
{
$rentfor=$_POST["rentfor"];
}
else
{
	$rentfor=NULL;
}
if(isset($_POST["customertype"]))
{
$customertype=$_POST["customertype"];
}
else
{
	$customertype=NULL;
}
if(isset($_POST["maximumborder"]))
{
$maximumborder=$_POST["maximumborder"];
}
else
{
	$maximumborder=NULL;
}

if(isset($_POST["description"]))
{
$description=$_POST["description"];
}
else
{
	$description=NULL;
}

if(isset($_POST["status"]))
{
$status=$_POST["status"];
}
else
{
	$status=NULL;
}

$sql='UPDATE `property` SET `Rent`="'.$rent.'", `BuildUpArea`="'.$area.'", `Advance`="'.$advance.'",`RentFor`="'.$rentfor.'",`StartingMonth`="'.$startingmonth.'",`Include`="'.$include.'",`MaxBorder`="'.$maximumborder.'",`PropertyType`="'.$propertytype.'",`Status`="'.$status.'", `BorderType`="'.$customertype.'",`Description`="'.$description.'"  WHERE `Id`='.$id;
if (mysqli_query($conn, $sql)) {
	$_SESSION["AdminShow"]="Second";
   header('Location:Admin.php');
	} else {
        $ok=0;
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
		
}
?>