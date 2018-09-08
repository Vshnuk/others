<?php
session_start();
if($_SESSION['logina_status']==false)
{
    header("Location:adminlogin.html");
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
        text-align: center;
        padding-top: 60px;
        
}
</style>
<body style="background-color: khaki;">
<div id="first">
    <span style="margin-left: 900px;"><a href="adminwelcome.php" style="color:black; font-size: 20px;">Home</a>|<a href="logouta.php" style="color:black; font-size: 20px;">Logout</a></span>
    <h1 style="padding-top: 30px; padding-bottom: 30px;">
        USER DEPOSIT
    </h1>
    </div>
<div id="second">
    <form method="post" action="">
    <table cellspacing="10" style="padding-left: 500px;">
        <tr>
            <td>Enter AccountNo:</td>
            <td><input type='text' name='balaccno'></td>
        </tr>
        <tr>
            <td>Enter amount:</td>
            <td><input type='number' name='amount'></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit"></td>
        </tr>
    </table>
    </form>
</div>
</body>
</html>
<?php
$balaccno=$_POST['balaccno'];
$amount=$_POST['amount'];
$connectiona= mysqli_connect("localhost","root","sanjumysql","test");
$sqla="SELECT AccountNo,balance FROM users WHERE AccountNo='$balaccno'";
$resultad= mysqli_query($connectiona,$sqla);
$rowb= mysqli_fetch_array($resultad);
/*if(isset($balaccno))
{*/
if($rowb['AccountNo']==$balaccno)
{
    $ibal=$rowb['balance'];
    $nbal=$ibal+$amount;
    $sqlad="UPDATE users SET balance='$nbal' WHERE AccountNo='$balaccno'";
    $relt= mysqli_query($connectiona,$sqlad);
    echo "<script>alert('Deposit Succesfull');</script>";
}
 else {
    echo "<script>alert('Invalid Account no')</script>";
}
/*}*/
?>