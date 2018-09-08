<?php
session_start();
$_SESSION['logina_status']=false;
header("Location:adminlogin.html");
?>