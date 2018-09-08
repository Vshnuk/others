<?php
session_start();
if($_SESSION['logina_status']==false)
{
    header("Location:adminlogin.php");
}
?>
<html>
<style>
#first{
	height:25%;
	width:100%;
	background-color:saddlebrown;
        text-align: center;
        color:black;
        
          }
#second{
	height:44%;
	width:100%;
	background-color:khaki;
        text-align: center;
        font-size: 20px;
        padding-top: 200px;
}
</style>
<body style="background-color: khaki;">
<div id="first">
    <span style="padding-left: 900px; color: black; font-size: 20px;"><a href="logouta.php" style="color: black;">Logout</a></span>
    <h1 style="padding-top: 40px;">
        ADMIN
    </h1>
    </div>
<div id="second">
    <a href='setbal.php'>USER DEPOSIT</a>
</div>
</body>
</html>
