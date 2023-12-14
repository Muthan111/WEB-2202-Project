<!DOCTYPE html>
 <html lang="en">
 <head>
 <title> Homepage
 </title>
 <meta charset="utf-8"> 
 <link rel = "stylesheet" type ="text/css" href = "navbar.css">
 <link rel = "stylesheet" type ="text/css" href = "home_style2.css">

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
          <li><a href="#">Admin login</a></li>
          <li><a href="#">Admin Registration</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <div class = "flexbox">
  <div class = "text flex-item">
    <h1>Upcycled 3D Printing Filament</h1>
    <h4><a href = "About_Us.php">Learn More</a></h4>
  </div>
  <div class = "image flex-item">
     <img style = "width: 400px; height: 200px;" src ="../WEB-2202-Project/images/download.png">
  </div>
  </div>
  <div class = "flexbox2">

    <div class ="flex1">
      <p>Every Year, Malaysians 
        Produce over 2 million
        tonnes of plastic waste
      </p>
    </div>
    
    <div class ="flex2">
    <p>Plastic recycling is
       a very inefficient process, 
      and uses 
      more energy than it saves
    </p>
    </div>

    <div class ="flex3  ">
    <p>Therefore, it is better 
      to reduce and 
      reuse Plastic
      wherever we can
    </p>
    </div>

    <div class ="flex4">
    <p>Our aim is to process 
      clean plastic waste
      into usable 
      3D printing filament, 
      and reduce the 
      amount of
      plastic that goes i
      nto landfills.
    </p>
    </div>        
  </div>  
 </body>
</html>