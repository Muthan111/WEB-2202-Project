<!DOCTYPE html>
<html lang="en">  
 <title>
 <head>
 <title> Homepage
 </title>
 
 <link rel = "stylesheet" type ="text/css" href = "login2.css">
 <link rel = "stylesheet" type ="text/css" href = "navbar.css">
 <meta charset="utf-8">
</head>
<body>
<nav>
    <a class="logo" href="#"><img class="img1" src="./images/Screenshot 2023-12-11 153144.png" alt="Logo"></a>
    <ul>
      <li>
        <a href="Homepage.php">Home</a>
        <ul class="dropdown">
          <li><a href="About_Us.php">About Us</a></li>
        </ul>
      </li>
      <li>
        <a href="Location.php">Location</a>
        <ul class="dropdown">
          <li><a href="Map.php">Map</a></li>
        </ul>
      </li>
      <li><a href="Redeem.php">Redeem</a></li>
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
<div class ="login">
    <h1>Enter your username and password </h1>
    <form action ="user_login_backend.php" method = "post">
        
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
</div>    
</body>
</html> 
