<!DOCTYPE html>
 <html lang="en">
 <head>
 <title> Redeem
 </title>
 <meta charset="utf-8"> 
 
 <link rel = "stylesheet" type ="text/css" href = "navbar.css">
 <style>
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
    margin-top: 70px;
    left: 36.5%;
    width: 22%;
    
}
.button2 {
    margin-top: 70px;
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
body{
  background-color: lightgray;
}
  </style>
 </head>
 <body>
 <nav>
    <a class="logo" href="#"><img class="img1" src="./images/Screenshot 2023-12-11 153144.png" alt="Logo"></a>
    <ul>
      <li>
        <a href="Homepage.php">Home</a>
        
      </li>
      <li>
        <a href="Location.php">Location</a>
        <ul class="dropdown">
          <li><a href="Map.php">Map</a></li>
        </ul>
      </li>
      <li>
         <a href="Redeem.php">Redeem</a>
         <ul class="dropdown">
          <li><a href="filament_selection.php">Filaments</a></li>
          <li><a href="filament_redeemer.php">PETG</a></li>
          <li><a href="filament_redeemer_PE.php">PE</a></li>
          <li><a href="filament_redeemer_PET.php">PET</a></li>
        </ul>
      </li>
      <!-- <li><a href="#">Rewards</a></li>
      <li><a href="#">Points</a></li> -->
      <li class="profile">
        <a href="Profile.php"><img src="./images/profile.png" alt="Profile"></a>
        <ul class="dropdown" style ="left: -50%";>
          <li><a href="user_login_page.php">User login</a></li>
          <li><a href="user_register_page.php">User Registration</a></li>
          <li><a href="admin_login_page.php">Admin login</a></li>
          <li><a href="user_register_page.php">Admin Registration</a></li>
          <li><a href="admin_profile_page.php">Admin Profile page</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <body>
                    <div class = "div1">
                        <p> You can redeem anything you like as long as you have sufficient points</p>
                    </div>
                    <div>
                        <a href = "filament_selection.php">
                            <button class = "button1" >Click here to view different filaments</button>
                        </a>
                    </div>
                    <div>
                        <a href = "Homepage.php">
                            <button class = "button2" >Click here to go back to home page</button>
                        </a>
                    </div>
 </body>   
</html>