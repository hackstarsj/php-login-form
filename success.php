<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{
	echo "<h2> Welcome, ".$_SESSION['username']."</h2>";
	echo "<br>";
	echo "<a href='logout.php'>Logout</a>";
}
else{
	header("Location:error.php?value=You Must Login to Access Page");
}