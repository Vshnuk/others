<?php
session_start();
$connection= mysqli_connect("localhost", "root", "sanjumysql","test");
$username=$_POST["username"];
$password=$_POST["password"];
$sqlu="select * from users where username='$username' and password='$password'";
$reslt= mysqli_query($connection, $sqlu);
$row= mysqli_fetch_array($reslt);
$_SESSION['name']=$row['name'];
$_SESSION['mobile']=$row['mobile'];
$_SESSION['balance']=$row['balance'];
$_SESSION['accountno']=$row['AccountNo'];
if(isset($_POST["ulogin"]))
{
    if($reslt->num_rows<=0)
{
    header("Location:userlogind.php");
  
}
 else
	{
    header("Location:userwelcome.php");
    $_SESSION['login_status']=true;
}
}
