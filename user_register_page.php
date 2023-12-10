<!DOCTYPE html>
<head>
    <meta charset = "utf-8">
    <title> Registration Page</title>
    <link rel = "stylesheet" type ="text/css" href = "register_styles.css">
</head>
<body>
    <div class = "register">
        <h1> Register</h1>
        <form action ='user_register_backend.php' method ='post'>
            <label>Full Name</label>
            <input type ="Name" name ="Name" placeholder = "Name" id = "Name" >
            <label> User Name</label>
            <input type = "text" name=" userName" id="userName" >
            <label>Password</label>
            <input type ="password" name ="passWord" placeholder = "passWord" id = "passWord" >
            <label>Email</label>
            <input type ="email" name ="Email" placeholder = "Email" id = "Email" >
            <input type = "submit" value="Register">
            <div class="login"><input class = "login" type = "submit" value ="Log in" href = "user_login_page.php"> </div>
            
        </form>
        
    </div>
</body>
</html>