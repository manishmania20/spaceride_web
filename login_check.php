<?php
$host="localhost"; 
$username="root"; 
$db_name="dataspace"; 
$tbl_name="registry"; 

$conn=mysqli_connect("$host", "$username", "","$db_name")or die("cannot connect");
mysqli_select_db($conn,"$db_name")or die("cannot select DB");

$email=$_POST['email'];
$pwd=$_POST['pwd'];

$sql=mysqli_query($conn,"SELECT * FROM $tbl_name WHERE email='$email' and pwd='$pwd'");
$result=($sql);

$count=mysqli_num_rows($result);

if($count==1){
	$row=mysqli_fetch_row($result);
 	$sname=$row[1];
	session_start();
	$_SESSION['SName']=$sname;
	$_SESSION['Status']="Session Status: Login Success!!!";
	
	if (isset($_POST['remuser'])){
		setcookie("email",$_POST['email'],time()+3600);
		setcookie("pwd",$_POST['pwd'],time()+3600);
	}
	else
	{
		setcookie("email","");
		setcookie("pwd","");
	}
	header("location:home.php");
}
else {
	unset($_SESSION['SName']);
	unset($_SESSION['Status']);
	echo '<h2>Login Failed!!!</h2>';
	header("location:login.php");
}

?>


