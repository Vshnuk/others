<?php
session_start();
if($_SESSION['login_status']==false)
{
    header("Location:userlogin.php");
}
?>
<html>
     <head>
         <style>
             #welcome{
                 font-size: 15px;
                 height: 450px;width: 100%;
                 background-color: khaki;
                 margin-left: 100px;
             }
         </style>
     </head>
     <body style="background-color: khaki">
         <div style="background-color: saddlebrown; height: 180px;">
             <a href="logout.php" style="font-size: 25px; color:black; margin-left: 1200px; ">Logout</a>
         <div style="position:relative;left:500px;">
	<div style="position:absolute;top:-20px;left:70px;opacity:0.5;width:150px;height:80px;background-color:blue;">
</div>
	<div style="positon:absolute; top:30px;left:80px; width:300px;border-radius:10px;border:10px solid #EE872A;font-size:200%;padding:20px;">MS BANK</div>
</div>
         </div>

         <div id="welcome">
             <div>
             <h1>Welcome <?php echo($_SESSION["name"]);?></h1>
         </div >
         <div style="text-align: center; font-size: 25px; margin-right: 200px;">
             <a href="details.php">DETAILS</a><br><br>
             <a href="transfer.php">TRANSFER</a>
         </div>
         </div>
     </body>
 </html>