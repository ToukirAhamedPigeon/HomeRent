<?php
session_start();
if(!isset($_SESSION["UserName"])&&!isset($_SESSION["Type"]))
{
	
	header('Location:LogOut.php');
}
else
{
	if($_SESSION["Type"]!='Admin')
	{
		header('Location:LogOut.php');
	}
}
?>