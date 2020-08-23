<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
	<h1 style="font-family: Courier New" ><center>Registeration Form</center></h1>
	<meta content="noindex, nofollow" name="robots">
	<script src="formvalid.js"></script>
	<link rel="stylesheet" type="text/css" href="prop1.css">
<style>
	textarea {
  width: 40%;
  height: 70px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}
.submit{
	text-align: center;
}
legend{
	text-align: center;
}
th,td{
	width: 600px;
	color: white;
}
h1,h2{
	font-family: Courier New;
	color: white;
}
body{
	background-image: url("space4.jpg");
}

</style>
</head>
<body>
	<div id="form">
		<p id="head"></p>
 	<form action="register_check.php" method="post" onsubmit='return formValidation()' >
 	<fieldset>
 		<legend><h2><b>Join us now</b></h2></legend>
 		<table class="registry">
 		<tr>
 			<th align="left">Name:</th>
			<td><input name="username" type='text' value=""></td>
			<td><p id="p1"></p></td>
		</tr>
 		<tr>
 			<th align="left">Email:</th>
 			<td><input name="email" type='text' value=""></td>
 			<td><p id="p2"></p></td>
 		</tr>
 		<tr>
			<th align="left">Password:</th>
 			<td><input name="pwd" type='password' value=""></td>
 			<td><p id="p3"></p></td>
 		</tr>
 		<!--<tr>
			<th align="left">Retype Password:</th>
 			<td><input type="password" name="password" value=""></td><br>
 		</tr>-->
 		<tr>
 			<th align="left">Gender:</th>
 			<td>
 				<label><input type="radio" value="male" name='gender'>Male</label>
 			<label><input type="radio" value="female" name='gender'>Female</label>
 			<label><input type="radio" value="others" name='gender'>Others</label>
 			</td>
 		</tr>
 		<tr>
 		<th align="left">Date of Birth:</th>
 			<td><input type='text' value="" name='dob'></td>
 			<td><p id="p4"></p></td>
 		</tr>
 		<tr>
 		<tr>
 		<th align="left">Contact:</th>
 			<td><input type='text' value="" name='contact'></td>
 			<td><p id="p5"></p></td>
 		</tr>
 		<tr>
 		<th align="left">Country:</th>
 			<td><select name='country'>
 				<option value="Please Choose">Please Choose</option>}
 				<option value="ind">India</option>
 				<option value="usa">USA</option>
 				<option value="aus">Australia</option>
 				<option value="rsa">South Africa</option>
 				<option value="rus">Russia</option>
 				<option value="zim">Zimbabwe</option>
 			</select></td>
 			<td><p id="p6"></p></td>
 		</tr>
 		<tr>
			<th align="left">Address:</th>
 			<td><input type='text' value="" name='addr'></td><br>
 			<td><p id="p7"></p></td>
 		</tr>
 		<tr>
 		<th align="left">Zip Code:</th>
 			<td><input type='number' name='zip' value=""></td><br>
 			<td><p id="p7"></p></td>
 		</tr>
 		<tr>
 			<th align="left">Department:</th>
 			<td>
 				<label><input type="checkbox" name='dept' value="aspy" checked="checked">Astrophysics</label>
 			<label><input type="checkbox" name='dept' value="geol">Geology</label>
 			<label><input type="checkbox" name='dept' value="aspo">Astrophotography</label>
 			 	<label><input type="checkbox" name='dept' value="nano">Nanotechnology</label>
 			</td>
 		</tr>
 	</table> 
 	<p><b>Feedback:</b><br>
 		<textarea name="feedback"></textarea>
 	</p>
 	</fieldset>
 	<div class="submit">
 		<input type="submit" value="register">
 	</div>
 	</form>
</div>
</body>
</html>