<?php 
    extract($_POST);
    $mysqli = new mysqli('localhost', 'root','','dataspace');

    if($mysqli->connect_errno > 0){
        die('Unable to connect to database [' . $db->connect_error . ']');
    }
    $username=$_POST['username'];
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $contact=$_POST['contact'];
    $country=$_POST['country'];
    $addr=$_POST['addr'];
    $zip=$_POST['zip'];
    $dept=$_POST['dept'];
    
    
    $query = "INSERT INTO registry(username,email,pwd,gender,dob,contact,country,addr,zip,dept) VALUES 
('$username','$email','$pwd','$gender','$dob','$contact','$country','$addr','$zip','$dept')";
    $insert_row = $mysqli->query($query);
    if($insert_row){
      header("location:reg_success.html"); 
    }
    else{
        die('Error : ('. $mysqli->errno .') '. $mysqli->error);
    }
  ?>
