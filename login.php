<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<h1 style="font-family: Courier New" ><center>Login Form</center></h1>
	<style>
		th,td{
	width: 600px;
}
	h2{
		font-family: Courier New;
	}
	legend{
	text-align: center;
}
div{
	margin: 70px;
	border-left: 50px;
	padding-left: 400px;
}
fieldset{
	width: 400px;
}
h1,h2{
	color: white;
}
body{
	background-image: url("space4.jpg");
}
th,td{
	color: white;
}
	</style>
</head>
<body>
	<div>
	<form action="login_check.php" method="post" accept-charst="utf-8">
			<fieldset>
				<legend><h2><b>Welcome back Jedi!</b></h2></legend>
				<table>
					<tr>
 						<th align="right">Email:</th>
 						<td><input type="text" name="email" value=<?php echo Cookie_val(1) ?> ></td><br>
 					</tr>
 					<tr>
						<th align="right">Password:</th>
 						<td><input type="password" name="pwd" value=<?php echo Cookie_val(2) ?> ></td><br>
 					</tr>
 					<tr>
 						<td><input type="checkbox" name="remuser">Remember Password</td><br>
 					</tr>
 					<tr>
 						<td><input type="submit" value="login"></td>
 					</tr>
				</table>
			</fieldset>
	</form>
</div>
</body>
<?php
		function Cookie_val($ch){
		if ($ch==1)
		{	
			if (isset($_COOKIE['email']))
			{
				return $_COOKIE['email'];
			}
			else 
				return;
		}
		else
		{
			if (isset($_COOKIE['pwd']))
			{
				return $_COOKIE['pwd'];
			}
			else 
				return;
		}
		}
	?>

</html>