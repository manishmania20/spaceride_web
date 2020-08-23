<!DOCTYPE html>
<html>
<head>
	<title>Space Ride</title>
	<meta name="name" content="content">
	<br><br><h1 style="font-family: Courier New" ><center>A Space Odyssey</center></h1>
	<link rel="stylesheet" type="text/css" href="prop1.css">
	<!--<script src="formvalid.js"></script>-->
</head>
<body>
<ul class="nav">
	<li><a href="aboutus.html" title="">About Us</a></li>
	<li><a href="#" title="">Space Missions</a></li>
	<li><a href="#" title="">Asteroids</a></li>
	<li><a href="#" title="">Comets</a></li>
	<li><a href="#" title="">Interstellar</a></li>
	<li><a href="register.php" title="hop in now!">Register</a></li>
	<li><a href="login.php" title="welcome back!">Login</a></li>
</ul>
<?php
		session_start();
		if (isset($_SESSION['SName'])){
			echo "<font color=white>Welcome, ".$_SESSION['SName']."</font>!<br>";
			echo '<font color=white>'.$_SESSION['Status'].'</font>';
			if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 10)){
			session_unset();
			session_destroy();
			}
			$_SESSION['LAST_ACTIVITY'] = time();
		}
		else {
			header("location:login.php");
		}
		?>
	<img src="front1.png" alt="universe" width="1355" height="400">
<h2 style="font-family: Courier New">Planets</h2>
<div class="main1">
<a href="mercury.html" title="mercury..."><h3><center>Mercury</center></h3></a>
<p align="center">
	The smallest planet <br> in our solar system and nearest to the Sun,<br> Mercury is only slightly larger than Earth's Moon.<br>
	<figure align="center">
	   <img src="mercury2.jpg" alt="mercury" width ="200" height="200" >
	   <figcaption>Distance from Earth:<b>304.34 mln km</b></figcaption>

    </figure>
</p>
<a href="#" title="venus..."><h3><center>Venus</center></h3></a>
<p align="center">
   Second planet from the Sun and our closest planetary <br> neighbor,Venus is similar in structure and size to Earth, but it is now a very different world.<br> 
	<figure align="center">
		<img src="venus.jpg" alt="venus..." width="200" height="200">
		<figcaption>Distance from Earth:<b>354.47 mln km</b></figcaption>
		
	</figure>
</p>
<a href="#" title="mars..."><h3><center>Mars</center></h3></a>
<p align="center">
	The fourth planet from the Sun,<br> Mars is a dusty, cold, desert world with a very thin atmosphere. 
	<figure align="center">
		<img src="mars.jpg" alt="mars..." width="200" height="200">
		<figcaption>Distance from Earth:<b>251.54 mln km</b></figcaption>
		
	</figure>
</p>
<a href="#" title="jupiter..."><h3><center>Jupiter</center></h3></a>
<p align="center">
	Fifth in line from the Sun,<br> Jupiter is, by far, the largest planet in the solar system<br> – more than twice as massive as all the other planets combined.<br> 
	<figure align="center">
		<img src="jupiter.jpg" alt="jupiter..." width="200" height="200">
		<figcaption>Distance from Earth:<b>399.37 mln km</b></figcaption>
		
	</figure>
</p>
<a href="#" title="saturn..."><h3><center>Saturn</center></h3></a>
<p align="center">
	Adorned with thousands of beautiful ringlets,<br> Saturn is unique among the planets.<br>
	<figure align="center">
		<img src="saturn.jpg" alt="saturn..." width="200" height="200">
		<figcaption>Distance from Earth:<b>1.46 bln km</b></figcaption>
		
	</figure>
</p>
<a href="#" title="uranus..."><h3><center>Uranus</center></h3></a>
<p align="center">
	Uranus is about four times wider than Earth.<br> If Earth were a large apple, Uranus would be the size of a basketball.
	<figure align="center">
		<img src="uranus.jpg" alt="uranus..." width="200" height="200">
		<figcaption>Distance from Earth:<b>2.53 bln km</b></figcaption>
		
	</figure>
</p>
<a href="#" title="neptune..."><h3><center>Neptune</center></h3></a>
<p align="center">
	Uranus is about four times wider than Earth.<br> If Earth were a large apple, Uranus would be the size of a basketball.
	<figure align="center">
		<img src="neptune.jpg" alt="neptune..." width="200" height="200">
		<figcaption>Distance from Earth:<b>4.69 bln km</b></figcaption>
		
	</figure>
</p>
</div>
<h2 style="font-family: Courier New">Extra Byte</h2>
<div class="main2">
<img src="ChartGo.png" alt="analysis" width="500" height="500">
<table>
	<caption><b>how long is a year in solar system</b></caption>
	<thead>
		<tr>
			<th>Planet</th>		
			<th>Number of Days</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Mercury</td>
			<td>88</td>
		</tr>
		<tr>
			<td>Venus</td>
			<td>255</td>
		</tr>
		<tr>
			<td>Earth</td>
			<td>365</td>
		</tr>
		<tr>
			<td>Mars</td>
			<td>687</td>
		</tr>
		<tr>
			<td>Jupiter</td>
			<td>4333</td>
		</tr>
		<tr>
			<td>Saturn</td>
			<td>10759</td>
		</tr>
		<tr>
			<td>Uranus</td>
			<td>30687</td>
		</tr>
		<tr>
			<td>Neptune</td>
			<td>60190</td>
		</tr>
	</tbody>
</table>
</div><hr>
<ul class="foot">
<li>Contact Us:+41-67996668</li><br>
<li>E-mail:spaceride@gmail.com</li><br>
<li>Twitter:@space_ride77</li>
</ul>
</body>
</html>