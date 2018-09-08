<?php
session_start();
$usera=$_POST["username"];
$passworda=$_POST["password"];
$connect= mysqli_connect("localhost","root","sanjumysql","test");
$q="select * from admin where userid='$usera' and password='$passworda'";
$resulta= mysqli_query($connect,$q);
$rowa= mysqli_fetch_array($resulta);
$_SESSION['userid']=$rowa['userid'];
$_SESSION['password']=$rowa['password'];
if($usera==$rowa['userid']&&$passworda=$rowa['password'])
{
    header("Location:adminwelcome.php");
    $_SESSION['logina_status']=true;
}
 else {
     echo"<script>alert('Invalid User Id or Password')</script>";
     header("Location:adminlogin.php");
 }
?>
