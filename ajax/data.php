<?php

$fname = $_POST['Name'];

$UID = $_POST['UID'];
$email = $_POST['Email'];

$password = $_POST['Password'];

echo $fname.' '.$UID.' '.$email.' '.$password;
$con = mysqli_connect("localhost","root","","web_login");
// $insert = "INSERT INTO `user` (`id`, `nname`, `email`, `pass`, `mobileno`, `gender`, `time`) VALUES ('','$name','$email','$pass','$mobileno','$gender','')";
//         $sql=mysqli_query($con,$insert); 
$sssql = "INSERT INTO `users` (`Name`, `UID`, `Email`, `Password`) VALUES ('$fname', '$UID', '$email', '$password');";
$query = mysqli_query($con,$sssql);
if($query)
	echo "Successfully inserted";
else
	echo "failed insertion";

?>