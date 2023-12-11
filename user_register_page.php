<!DOCTYPE html>
<head>
    <meta charset = "utf-8">
    <title> Registration Page</title>
    
    <link rel = "stylesheet" type ="text/css" href = "register_styles_copy1.css">
    <link rel = "stylesheet" type ="text/css" href = "navbar.css">
</head>
<body>
<nav>
    <a class="logo" href="#"><img class="img1" src="./images/Screenshot 2023-12-11 153144.png" alt="Logo"></a>
    <ul>
      <li>
        <a href="#">Home</a>
        <ul class="dropdown">
          <li><a href="#">About Us</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Location</a>
        <ul class="dropdown">
          <li><a href="#">Map</a></li>
        </ul>
      </li>
      <li><a href="#">Redeem</a></li>
      <!-- <li><a href="#">Rewards</a></li>
      <li><a href="#">Points</a></li> -->
      <li class="profile">
        <a href="Profile.php"><img src="./images/profile.png" alt="Profile"></a>
        <ul class="dropdown" style ="left: -50%";>
          <li><a href="user_login_page.php">User login</a></li>
          <li><a href="user_register_page.php">User Registration</a></li>
          <li><a href="#">Admin login</a></li>
          <li><a href="#">Admin Registration</a></li>
        </ul>
      </li>
    </ul>
  </nav>
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
            
            
        </form>
        
    </div>
</body>
</html>