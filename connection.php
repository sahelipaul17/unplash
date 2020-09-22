<?php

session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass ="";
$db ="study";

$con = new mysqli ($dbhost,$dbuser,$dbpass,$db);

//for check the connection

if($con->connect_error){
	echo "Connection Failed!";
}

else{
	echo " Connection Successful!";
}

mysqli_select_db($con,'study');
    $fullname = $_POST['fullnane'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile.no'];
	$plan = $_POST['plan'];
    
    
    $query = "insert into userinfodata (firstname,lastname,country,subject) value ('$fullname','$email','$password','$mobile','$plan')";
    
    
 mysqli_query($con,$query);

$row  = mysqli_fetch_array($query);
if(is_array($row)) {
$_POST["fullname"] = $row['fullname'];
$_POST["email"] = $row['email'];
$_POST["password"] = $row['password'];
$_POST["mobile"] = $row['mobile.no'];
$_POST["plan"] = $row['plan'];
} else {
$message = "Invalid Username or Password!";
}
















?>