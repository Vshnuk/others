<?php
session_start();
if($_SESSION["login_status"]==false)
{
    header("Location:userlogin.php");
}
?>
<html>
<style>
#first{
	height:25%;
	width:100%;
	background-color:saddlebrown;
        text-align: center;
        
        
          }
#second{
	height:75%;
	width:100%;
	background-color:khaki;
}
</style>
<body style="background-color: khaki;">
<div id="first">
    <span style="margin-left: 900px;"><a href="userwelcome.php" style="color:black; font-size: 20px;">Home</a>|<a href="logout.php" style="color:black; font-size: 20px;">Logout</a></span>
    <h1 style="padding-top: 40px;">
        DETAILS
    </h1>
    </div>
<div id="second">
    <table cellspacing='10' style='font-size: 20px; padding-left: 555px; padding-top: 125px;'>
        <tr>
            <td>Name:</td>
            <td><?php echo($_SESSION['name']); ?></td>
        </tr>
        <tr>
            <td>
                Mobile No:
            </td>
            <td><?php echo($_SESSION['mobile']);?></td>
        </tr>
        <tr>
            <td>Account No:</td>
            <td><?php echo($_SESSION['accountno']);?></td>
        </tr>
        <tr>
            <td>Balance:</td>
            <td><?php echo($_SESSION['balance']);?></td>
        </tr>
    </table>
</div>
</body>
</html>
