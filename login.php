<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){
	header("Location:success.php");
}
else if(isset($_REQUEST['username']) && isset($_REQUEST['password']))
{
	$_SESSION['username']=$_REQUEST['username'];
	$_SESSION['password']=$_REQUEST['password'];
	header("Location:success.php");
}
else{
	header("Location:error.php?value=USERNAME Password Not Be Blank");
}

