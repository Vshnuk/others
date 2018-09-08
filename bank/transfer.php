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
        padding-left: 500px;
        padding-top: 80px;
}
</style>
<body style="background-color: khaki;">
<div id="first">
    <span style="margin-left: 900px;"><a href="userwelcome.php" style="color:black; font-size: 20px;">Home</a>|<a href="logout.php" style="color:black; font-size: 20px;">Logout</a></span>
    <h1 style='padding-top: 20px;'>TRANSFER</h1>
</div>
<div id="second">
    <form action='' method='post'>
        <table cellspacing="10">
        <tr>
            <td>Your Account No:</td>
            <td><input type='text' name='senderaccount'></td>
        </tr>
         
        <tr>
            <td>Transfer To:</td>
            <td><input type='text' name='transferaccount'></td>
        </tr>
        <tr>
            <td>Amount:</td>
            <td><input type='number' name='amount'></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit"></td>
        </tr>
    </table>
    </form>
</div>
</body>
</html>

<?php
$sender=$_POST['senderaccount'];
$receive=$_POST['transferaccount'];
$amount=$_POST['amount'];
$connectt=mysqli_connect("localhost","root","sanjumysql","test");
$query="SELECT AccountNo,balance FROM users WHERE AccountNo='$sender'";
$resultt= mysqli_query($connectt, $query);
$query1="SELECT AccountNo,balance FROM users WHERE AccountNo='$receive'";
$resultt1= mysqli_query($connectt, $query1);
$row1=mysqli_fetch_array($resultt);
$row2=mysqli_fetch_array($resultt1);
if(isset($sender))
{
if($sender==$_SESSION['accountno'])
{    
if( $row2["AccountNo"]==$receive)
{
    $sbal=$row1["balance"];
    $rbal=$row2["balance"];
    if($amount>$sbal)
    {
        echo "<script>alert('Amount exceeding current balance')</script>";
    }else
    {$sbal=$sbal-$amount;
    $rbal=$rbal+$amount;
    $_SESSION['balance']=$sbal;
    $qs="UPDATE users SET balance='$sbal'WHERE AccountNo='$sender'";
    $results= mysqli_query($connectt, $qs);
    $qr="UPDATE users SET balance='$rbal'WHERE AccountNo='$receive'";
    $resultr=mysqli_query($connectt,$qr);
    echo "<script>alert('Transaction succesfull')</script>";
    }
}
else{
echo "<script>alert('Invalid receiver's Account number')</script>"  ;  
}
}
 else {
echo "<script>alert('Check your Account Number')</script>"  ;  
}
}
?>