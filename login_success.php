<html>
<head>
    <title>User Login</title>
</head>
<body>
	<h1>
		<?php
		session_start();
		if (isset($_SESSION['SName'])){
			echo "Welcome, ".$_SESSION['SName']."!<br>";
			echo $_SESSION['Status'];
		}
		else {
			header("location:login.php");
		}
		?>

	</h1>
	<h2>Login Success!!!</h2>
</form>
</body>
</html>
