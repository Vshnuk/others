<?php
$user=$_POST["username"];
$pwd=$_POST["password"];
$name=$_POST["name"];
$mobile=$_POST["mobile"];
$accountno=$_POST["accountno"];
$conn=mysqli_connect("localhost","root","sanjumysql","test");
$sql="INSERT INTO `users`(`username`,`name`,`mobile`,`password`,`AccountNo`) VALUES('$user','$name','$mobile','$pwd','$accountno')";
$result=mysqli_query($conn,$sql);
echo "Successful";
?>