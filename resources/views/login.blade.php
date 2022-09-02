<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   <style>
            body  
                {  
                    margin: 0 auto 0 auto;  
                    background-color:#D7D7D7;  
                    font-family: 'Calibri Light ';  
                    align-items: center;
                    justify-content: center;
                    font-size: 18px;
                    display: inline;
                    width:100%; 
                    text-align:center;
                    margin: 20px 0px 20px 0px;   
                } 

            .login{
                    flex-flow: wrap;
                    overflow: hidden;
                    margin: auto;
                    margin: 25 0 0 300;
                    padding: 100px;
                    border-radius: 25px;
            }
            input{
                border-radius: 15px;
                width: 300px;  
                height: 30px;  
                border: none;  
                border-radius: 3px;  
                padding-left: 8px; 
                font-family: 'Calibri Light '; 
                font-size: 17px;
            }
            .btn{
                background:#2ecc71;
                width:125px;
                padding-top:5px;
                padding-bottom:5px;
                color:white;
                border-radius:4px;
                border: #27ae60 1px solid;
                margin-top: 50px;
                font-size: 18px;
                font-weight: 600;
                text-decoration: none;
            }
            h1{
                font-size:1.5em;
                color:#525252;
            }

   </style>
</head>
<body>
        <div class="login">
            <form id="login" method="get" action="login.php"> 
                <label for="">Username: </label>
                <input type="text" name="username" id="username"><br><br>
                <label for="">Password: </label>
                <input type="password" name="password" id="password"><br><br>
             </form>
             <a href="#" class="btn">Log In</a>
             <p>Forgot your password? <a href=""><u style="color:#97CEBC;">Click Here!</u></p></a>
        </div>
</body>
</html>