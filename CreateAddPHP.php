<?php
require("AdminCheck.php");
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
elseif(isset($_POST["autoDouble"]))
{
	$obj = json_decode($_POST["autoDouble"]);
	$datakey1=$obj->datakey1;
	$datakey2=$obj->datakey2;
		$data=$obj->data;
		$data=preg_replace("#[^0-9a-z]#i","",$data);
	$_POST["autoComplete"]=null;
		$sql='SELECT * FROM `lookup` WHERE`DataKey`="'.$datakey1.'" AND `DisplayText` LIKE "%'.$data.'%" OR `DataKey`="'.$datakey2.'" AND `DisplayText` LIKE "%'.$data.'%"';
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
elseif(isset($_POST["doubleComplete"]))
{
	$obj = json_decode($_POST["doubleComplete"]);
	$datakey1=$obj->datakey1;
	$datakey2=$obj->datakey2;
		$_POST["doubleComplete"]=null;
		$sql='SELECT * FROM `lookup` WHERE `DataKey`="'.$datakey1.'" OR `DataKey`="'.$datakey2.'"';
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
elseif(isset($_POST["checklookup2"]))
{
$obj = json_decode($_POST["checklookup2"]);
		$data=$obj->data;
	    $datakey1=$obj->datakey1;
	    $datakey2=$obj->datakey2;
	$_POST["checklookup2"]=null;
	$sql='SELECT `Id` FROM `lookup` WHERE `DataKey`="'.$datakey1.'" AND `DisplayText`="'.$data.'" OR `DataKey`="'.$datakey2.'" AND `DisplayText`="'.$data.'"';
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
if(isset($_POST["name"]))
{
$name=$_POST["name"];
}
else
{
	$name=NULL;
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
	
if(isset($_POST["zipcode"]))
{
$zipcode=$_POST["zipcode"];
}
else
{
	$zipcode=NULL;
}
	
if(isset($_POST["description"]))
{
$description=$_POST["description"];
}
else
{
	$description=NULL;
}
if(isset($_POST["indhaka"]))
{
$indhaka=$_POST["indhaka"];
}
else
{
	$indhaka=NULL;
}
$target_dir = ".\content\img\PropertyPic".DIRECTORY_SEPARATOR;
//move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
$uploadOk = 1;
$target_file = $target_dir.$_FILES["fileToUpload"]["name"];
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$now = (new \DateTime())->format('YmdHis');
$rand=rand(100,999);
$FileName=$name.$now.$rand.".".$imageFileType;
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
if ($_FILES["fileToUpload"]["size"] > 50000000000) {
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
} else {
  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

}
$imgsrc="./content/img/PropertyPic/".$FileName;
$status="Open";
$username="Pigeon";	
$today=(new \DateTime())->format('Y/m/d');
$sql='INSERT INTO `property`(`Name`, `Rent`,`RentFor`,`Advance`, `StartingMonth`, `Street`, `Thana`, `District`, `Division`, `ZipCode`, `Floor`, `BuildUpArea`, `Description`, `BorderType`, `Include`, `MaxBorder`, `PropertyType`, `Status`, `Admin`, `PostDateTime`, `CoverPhoto`,`InDhaka`) VALUES ("'.$name.'","'.$rent.'","'.$rentfor.'","'.$advance.'","'.$startingmonth.'","'.$street.'","'.$thana.'","'.$district.'","'.$division.'","'.$zipcode.'","'.$floor.'","'.$area.'","'.$description.'","'.$customertype.'","'.$include.'","'.$maximumborder.'","'.$propertytype.'","'.$status.'","'.$username.'","'.$today.'","'.$imgsrc.'","'.$indhaka.'")';
if (mysqli_query($conn, $sql)) {
   $ok=1;
	} else {
        $ok=0;
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	$sql='INSERT INTO `propertycontent`(`PropertyName`, `ContentType`, `ImgUrl`) VALUES ("'.$name.'","Cover","'.$imgsrc.'")';
	
	if (mysqli_query($conn, $sql)) {
		$ok=1;
	} else {
        $ok=0;
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	

  $target_dir = ".\content\img\PropertyPic".DIRECTORY_SEPARATOR;
//move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
$uploadOk = 1;
$target_file = $target_dir.$_FILES["fileToUpload1"]["name"];
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$now = (new \DateTime())->format('YmdHis');
$rand=rand(100,999);
$FileName=$name.$now.$rand.".".$imageFileType;
$target_file = $target_dir .$FileName;
// Check if image file is a actual image or fake image
if(isset($_POST["fileToUpload1"])) {
    $ch = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
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
if ($_FILES["fileToUpload1"]["size"] > 50000000000) {
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
} else {
  move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file);
	$imgsrc="./content/img/PropertyPic/".$FileName;
	$sql='INSERT INTO `propertycontent`(`PropertyName`, `ContentType`, `ImgUrl`) VALUES ("'.$name.'","Other","'.$imgsrc.'")';
	
	if (mysqli_query($conn, $sql)) {
		$ok=1;
	} else {
        $ok=0;
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
	
    $target_dir = ".\content\img\PropertyPic".DIRECTORY_SEPARATOR;
//move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
$uploadOk = 1;
$target_file = $target_dir.$_FILES["fileToUpload4"]["name"];
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$now = (new \DateTime())->format('YmdHis');
$rand=rand(100,999);
$FileName=$name.$now.$rand.".".$imageFileType;
$target_file = $target_dir .$FileName;
// Check if image file is a actual image or fake image
if(isset($_POST["fileToUpload4"])) {
    $ch = getimagesize($_FILES["fileToUpload4"]["tmp_name"]);
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
if ($_FILES["fileToUpload4"]["size"] > 50000000000) {
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
} else {
  move_uploaded_file($_FILES["fileToUpload4"]["tmp_name"], $target_file);
	$imgsrc="./content/img/PropertyPic/".$FileName;
	$sql='INSERT INTO `propertycontent`(`PropertyName`, `ContentType`, `ImgUrl`) VALUES ("'.$name.'","Other","'.$imgsrc.'")';
	
	if (mysqli_query($conn, $sql)) {
		$ok=1;
	} else {
        $ok=0;
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
    $target_dir = ".\content\img\PropertyPic".DIRECTORY_SEPARATOR;
//move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
$uploadOk = 1;
$target_file = $target_dir.$_FILES["fileToUpload2"]["name"];
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$now = (new \DateTime())->format('YmdHis');
$rand=rand(100,999);
$FileName=$name.$now.$rand.".".$imageFileType;
$target_file = $target_dir .$FileName;
// Check if image file is a actual image or fake image
if(isset($_POST["fileToUpload2"])) {
    $ch = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
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
if ($_FILES["fileToUpload2"]["size"] > 50000000000) {
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
} else {
  move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file);
	$imgsrc="./content/img/PropertyPic/".$FileName;
	$sql='INSERT INTO `propertycontent`(`PropertyName`, `ContentType`, `ImgUrl`) VALUES ("'.$name.'","Other","'.$imgsrc.'")';
	
	if (mysqli_query($conn, $sql)) {
		$ok=1;
	} else {
        $ok=0;
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
    $target_dir = ".\content\img\PropertyPic".DIRECTORY_SEPARATOR;
//move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
$uploadOk = 1;
$target_file = $target_dir.$_FILES["fileToUpload3"]["name"];
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$now = (new \DateTime())->format('YmdHis');
$rand=rand(100,999);
$FileName=$name.$now.$rand.".".$imageFileType;
$target_file = $target_dir .$FileName;
// Check if image file is a actual image or fake image
if(isset($_POST["fileToUpload3"])) {
    $ch = getimagesize($_FILES["fileToUpload3"]["tmp_name"]);
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
if ($_FILES["fileToUpload3"]["size"] > 50000000000) {
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
} else {
  move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file);
	$imgsrc="./content/img/PropertyPic/".$FileName;
	$sql='INSERT INTO `propertycontent`(`PropertyName`, `ContentType`, `ImgUrl`) VALUES ("'.$name.'","Other","'.$imgsrc.'")';
	
	if (mysqli_query($conn, $sql)) {
		$ok=1;
	} else {
        $ok=0;
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
	if($ok==1)
	{
		 header('Location:CreateAdd.php');
	}
}
?>