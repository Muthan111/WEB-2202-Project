<!DOCTYPE html>
<html lang="en">  
 <title>
 <head>
 <title> Homepage
 </title>
 <link rel = "stylesheet" type ="text/css" href = "login.css">
 <meta charset="utf-8">
</head>
<body>
    <form action ="user_login_backend.php" method = "post">
        <h2>Enter your username1 and password </h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class = "error"><?php echo $_GET['error']; ?></p>
        <?php } ?>    
        <label> User Name </label>
        <input type = "text" name = "userName" placeholder = "user Name">

        <label> Password </label>
        <input type ="password" name ="passWord" placeholder ="password">
        
        <button type = "submit"> Login </button>
        <button type = "submit"> <a href = "user_register_page.php">Sign Up </button>
    </form>
</body>
</html> 
