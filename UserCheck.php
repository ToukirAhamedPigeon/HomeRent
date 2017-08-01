<?php
session_start();
if(!isset($_SESSION["UserName"])&&!isset($_SESSION["Type"]))
{
	
	header('Location:LogOut.php');
}	
?>