<?php
require("UserCheck.php");
?>
<?php
require("connection.php");
 $username=$_SESSION["UserName"];
if(isset($_POST["checkdata"]))
{
$obj = json_decode($_POST["checkdata"]);

		$col=$obj->col;
		$data=$obj->data;
	$_POST["checkdata"]=null;
	$sql='SELECT `Id` FROM `userlogin` WHERE `'.$col.'`="'.$data.'" AND `UserName`!="'.$username.'"';
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
elseif(isset($_POST["checkpass"]))
{
$obj = json_decode($_POST["checkpass"]);

		$col1=$obj->col;
		$data1=$obj->data;
	   
	$_POST["checkpass"]=null;
	$sql='SELECT * FROM `userlogin` WHERE `UserName`="'.$username.'" AND `'.$col1.'`="'.$data1.'" ';
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
elseif(isset($_POST["getdata"]))
{
	$obj = json_decode($_POST["getdata"]);
	$_POST["getdata"]=null;
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
if(isset($_POST["password"]))
{
$password=$_POST["password"];
}
else
{
	$password=NULL;
}
if(isset($_POST["contactnumber"]))
{
$contactnumber=$_POST["contactnumber"];
}
else
{
	$contactnumber=NULL;
}
if(isset($_POST["email"]))
{
$email=$_POST["email"];
}
else
{
	$email=NULL;
}
if(isset($_POST["nid"]))
{
$nid=$_POST["nid"];
}
else
{
	$nid="No NID";
}
if(isset($_POST["street"]))
{
$street=$_POST["street"];
}
else
{
	$street=NULL;
}
if(isset($_POST["thana"]))
{
$thana=$_POST["thana"];
}
else
{
	$thana=NULL;
}
if(isset($_POST["district"]))
{
$district=$_POST["district"];
}
else
{
	$district=NULL;
}
	
if(isset($_POST["division"]))
{
$division=$_POST["division"];
}
else
{
	$division=NULL;
}
$target_dir = ".\content\img\ProPic".DIRECTORY_SEPARATOR;
//move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
$uploadOk = 1;
$target_file = $target_dir.$_FILES["fileToUpload"]["name"];
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$now = (new \DateTime())->format('YmdHis');
$rand=rand(100,999);
$FileName=$username.$now.$rand.".".$imageFileType;
$target_file = $target_dir .$FileName;
// Check if image file is a actual image or fake image
if(isset($_POST["fileToUpload"])) {
    $ch = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($ch !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
       // $_SESSION['imgErr']= "File is not an image.";
		//$check=0;
        $uploadOk = 0;
    }
}
	if (file_exists($target_file)) {
   // $_SESSION['imgErr'].= "File is already exist.";
	//$check=0;
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000000000) {
   // $_SESSION['imgErr'].= "Sorry, your file is too large.";
	//$check=0;
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
   //  $_SESSION['imgErr'].= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	//$check=0;
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   // $_SESSION['imgErr'].= "Sorry, your file was not uploaded.";
	//$check=0;
// if everything is ok, try to upload file
	$sql = " UPDATE `userlogin` SET `Password`='".$password."',`ContactNumber`='".$contactnumber."',`Street`='".$street."',`Thana`='".$thana."',`District`='".$district."',`Division`='".$division."',`NID`='".$nid."',`Email`='".$email."' WHERE `UserName`='".$username."'";
if (mysqli_query($conn, $sql)) {
   header('Location:EditInfo.php');
	} else {
        $ok=0;
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
} else {
	$imgsrc="./content/img/ProPic/".$FileName;
  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
$sql = " UPDATE `userlogin` SET `Password`='".$password."',`ContactNumber`='".$contactnumber."',`Street`='".$street."',`Thana`='".$thana."',`District`='".$district."',`Division`='".$division."',`Propic`='".$imgsrc."',`NID`='".$nid."',`Email`='".$email."' WHERE `UserName`='".$username."'";
if (mysqli_query($conn, $sql)) {
   header('Location:EditInfo.php');
	} else {
        $ok=0;
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
}
?>