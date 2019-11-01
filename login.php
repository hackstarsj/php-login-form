<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){
	header("Location:success.php");
}
else if(isset($_REQUEST['username']) && isset($_REQUEST['password']))
{
	$_SESSION['username']=$_REQUEST['username'];
	$_SESSION['password']=$_REQUEST['password'];
	setcookie("username",$_REQUEST['username'],time()+(86400*30),"/");
	setcookie("password",$_REQUEST['password'],time()+(86400*30),"/");
	header("Location:success.php");
}
else{
	header("Location:error.php?value=USERNAME Password Not Be Blank");
}

