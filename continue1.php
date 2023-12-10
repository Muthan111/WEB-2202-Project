<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            background: lightgrey;
        }
        .div1 {
            margin: auto;
            width: 50%;
            padding: 10px;
            background-color: orangered;
            box-sizing: border-box;
            margin-top: 100px;
        }
        .div1 p {
            color: white;
            background-color: orangered;
            text-align: center;
            font-size: 30px;
        }
        .button1 {
    
            left: 36.5%;
            width: 22%;
            
        }
        .button2 {
            left: 62.5%;
            width: 25%;
            
        }
        button {
            color: blue;
            margin: 0;
            position: absolute;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            height: 50px;
            top: 37%;
            background-color: orangered;
            color: white;
        }
    </style>    
</head>
    <body>
        <div class= "div1">
        <p>
        <?php 
        // continue.php
        session_start();
        if (isset($_SESSION['user_Name']) && isset($_SESSION['name']))
        {
            $name = htmlspecialchars($_SESSION['user_Name']);
            echo "Welcome back $name.<br>";     
            
            
                
        }  
        else echo "Please <a href='user_login_page.php'>Click Here</a> to log in.";
 ?>
        </p>
        </div>
        
        <div>
            <a href = "user_login_page.php">
                <button class = "button1" >Click here to return to the login page</button>
            </a>
        </div>
        <div>
            <a href = "Session_logout.php">
                <button class = "button2" >Click here to logout</button>
            </a>
        </div>
    </body>
</html>        