<?php
if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
echo '<script>location="success.php"</script>';
}
?>
<html>
<head>
	<title>Demo Form Login</title>
	<style type="text/css">
		form{
			margin-top: 150px;
			display: flex;
			justify-content: center;
			align-content: center;
			align-items: center;
		}
		.form_div{
			border-radius: 15px;
			border:1px solid grey;
			padding: 50px;
			margin-left: auto;
			background: #fff;
			margin-right: auto;
			box-shadow: 5px 5px 5px orange;
		}
		.in_div{
			padding: 20px;
		}
		.btn_submit{
			width: 100%;
			background: dodgerblue;
			color: #fff;
			box-shadow: 0px;
			padding: 10px;
		}
		body{
			background: dodgerblue;
			margin:0px;
			padding: 0px;
		}
		.head_h2{
			text-align: center;;
			background: dodgerblue;
			color: #fff;
			width: 100%;
			padding: 5px;
		}
	</style>
</head>
<body>
	<form action="login.php" method="post">
		<div class="form_div">
		<div class="in_div">
			<h2 class="head_h2">Login Now</h2>
		</div>	
		<div class="in_div">
			<label>Username</label>
			<input type="text" name="username" placeholder="Username">
		</div>
		<div class="in_div">
			<label>Password</label>
			<input type="Password" name="password" placeholder="Password">
		</div>
		<div class="in_div">
			<input type="submit" name="submit" value="submit" class="btn_submit">
		</div>	
	</div>
	</form>
</body>
</html>