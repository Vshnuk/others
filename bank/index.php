<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .front
            {
                background-color: darksalmon;
                border: 2px white #000000;
                width: 440px;
                float:left;
                
                height: 100%;
                text-align: center;
            }
            #bord{
                border: 2px black solid;
            }
            form{
                text-align: left;
                margin-left: 120px;
            }
            span{
                text-align: center;
                margin-left: 50px;
            }
            #sid {
                background-image: url('\olb.jpg');
                opacity: 0.7;
                  }   
                  #sid2{
                      opacity: 0.7;
                      background-image: url('\olb2.png');
                  }      
                  .link{
                      margin-top: 60%;
                      font-size: 50px;
                      color: #000000;
                      opacity: 1;
                  }
        </style>
    </head>
    <body>
        <div class="front" id="sid">
            <div class="link" style="color: #000000">
            <a href="adminlogin.html" style="color: black;" >ADMIN</a>
            </div>
        </div>
        <div>
        <div class="front" >
            <h1>Registration</h1>
            <br><br><br><br><br>
            <form action='register.php' method='post'>
                Name:<br><input type='text'id="names" placeholder="Name.." name='name'><br><br>
                User_name:<br><input type='text' name='username' placeholder="User Name"><br><br>
                password:<br><input type='password' name='password' placeholder="Password.."><br><br>
                Mobile:<br><input type='text' name='mobile' placeholder="Mobile.."><br><br>
                Account_number:<br><input type='text' name='accountno' placeholder="Account Number.."><br><br>
                <span><input type='submit'></span>
            </form>
        </div>
        <div class="front" id="sid2">
            <div class="link">
                <a href="userlogin.php" style="color: black;">USER</a>
            </div>
        </div>
        </div>
    </body>
</html>
