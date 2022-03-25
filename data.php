<?php

$fname = $_POST['Name'];

$UID = $_POST['UID'];
$email = $_POST['email'];

$password = $_POST['Password'];

echo $fname.' '.$UID.' '.$email.' '.$password;
$con = mysqli_connect("localhost","root","","web_login")
if(mysqli_connect()("INSERT INTO users VALUES('$fname', '$UID', '$email', '$password') "))
	echo "Successfully inserted";
else
	echo "failed insertion";

?>