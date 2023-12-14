<?php

?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 <title> Profile
 </title>
 <meta charset="utf-8"> 
 
 <link rel = "stylesheet" type ="text/css" href = "profile.css">
 <link rel = "stylesheet" type ="text/css" href = "navbar.css">
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
      <li>
         <a href="Redeem.php">Redeem</a>
         <ul class="dropdown">
          <li><a href="filament_selection.php">Filaments</a></li>
          <li><a href="filament_redeemer.php">PETG</a></li>
          <li><a href="">PE</a></li>
          <li><a href="filament_redeemer.php">PET</a></li>
        </ul>
      </li>
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
    <div class= "divider">
      <div class = "left_side">
         <h4></h4>
         <img src = "../WEB-2202-Project/images/profile_icon.png">
         <H4>Name</H4>
         <p><?php 
        // continue.php
        session_start();
        if (isset($_SESSION['user_Name']) && isset($_SESSION['name']))
        {
            $username = htmlspecialchars($_SESSION['user_Name']);
            $email = htmlspecialchars($_SESSION['Email']);
            $name = htmlspecialchars($_SESSION['name']);
        }  
        else echo "Please <a href='user_login_page.php'>Click Here</a> to log in.";
         ?></p>
      </div>
    
      <div class ="right_side">
         <div class = "information" >
            <h4>Information</h4>
            <div class = "info_data">
               <div class = "data">
                  <h4>Role</h4>
                  <p>Customer </p>
               </div>   

               <div class = "data">
               <h4>Email</h4>
                  <p><?php 
                  if (isset($email)){
                     echo $email; 
                  }
                  else{
                     echo "Please log in";
                  }
                  ?> </p>
               </div>  
            </div>
            <div class = "info_data">
               <div class = "data">
               <h4>Name</h4>
                  <p><?php 
                   
                  if (isset($name)){
                     echo $name; 
                  }
                  else{
                     echo "Please log in";
                  }
                  ?> </p>
               </div> 

               <div class = "data">
               <h4>username</h4>
                  <p><?php 
                  if (isset($username)){
                     echo $username; 
                  }
                  else{
                     echo "Please log in";
                  }
                 
                  ?> </p>
               </div> 


            </div>    
            </div>
         </div>   
      </div>  
   </div>   
 </body>   
</html>
