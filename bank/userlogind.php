<html>
    <?php
        session_start();
     
    ?>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #head{
                text-align: center;
                font-size: 20px;
                padding-top: 20px;
                padding-bottom: 20px;
                height: 30%;
                background-color: saddlebrown;
                
            }
            #loginu{
                text-align: center;
                height: 460px;
                width: 100%;
                background-color: khaki;
                
            }
            form{
                text-align: left;
                margin-left: 575px;
         
            }
          
        </style>
    </head>
    <body style="background-color: khaki;">
        <div id="head">
            <span style="margin-left: 900px;"><a href="index.php" style="color:black; font-size: 20px;">Main Menu</a></span>
            <h1>USER LOGIN</h1>
        </div>
        <div id="loginu">
            <div>
            <form action="user.php" method="post">
                <br><br><br><br><br> User Name:<br><input type="text" placeholder="User Name.." name="username"><br>
                Password:<br><input type="password" placeholder="Password.." name="password"><br>
                <span style="color: orange;">*Incorrect Details</span><br>
                <input type="submit" style="margin-left: 50px;" name="ulogin" value="Login">
            </form>
            </div>
        </div>
    </body>

</html>
