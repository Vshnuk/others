<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #head{
                text-align: center;
                font-size: 40px;
                padding: 70px 20px 20px 20px;
                height: 20%;
                background-color: saddlebrown;
                
            }
            .login{
                text-align: right;
                font-size: 20px;
                padding-top: 40px;
             
            }
            .login1{
                text-align: left;
                font-size: 20px;
                padding-top: 40px;
            }
            #label{
                width: 50%;
                float: left;
                height: 65%;
                background-color: khaki;
            }
            #field{
                margin-left: 50%;
                float: left;
                width: 40%;
                height: 65%;
                background-color: khaki;
            }
            #submit{
                padding-top: 20px;
            }
        </style>
    </head>
    <body style="background-color:khaki;">
        <div id="head">ADMIN LOGIN</div>
        <div id='label'>
            
            <table style="margin-left: 550px; height: 90px; padding-top: 90px; padding-bottom: 90px;">
                <tr class="login">
                    <td>Name:</td>
                </tr>
                <tr class="login">
                    <td>Password:</td>
                </tr>
            </table>
            
        </div>
        <form action="admin.php" method="post">
        <div id="label">
            <table style="height: 90px; padding-top: 90px; padding-bottom: 90px;">
                <tr class="login1">
                    <td><input type="text" placeholder="User Id" name="username"</td>
                </tr>
                <tr class="login1">
                    <td><input type="password" placeholder="Password" name="password"></td>
                </tr>
                <tr class="login1">
                    <td></td>
                </tr>
                <tr class="login1">
                    <td></td>
                </tr>
                <tr>
                    <td style="color:orange;">*Invalid info</td>
                </tr>
                <tr class="login1" id="submit">
                    <td><input type="submit" name="alogin"value="login"></td>
                </tr>
            </table>
        </div>
        </form>        
    </body>
</html>
