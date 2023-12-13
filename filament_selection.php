<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type ="text/css" href = "navbar.css">
    <link rel = "stylesheet" type ="text/css" href = "filament_Sele.css">
</head>
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
          <li><a href="filament_selection.php">About Us</a></li>
        </ul>
      </li>
      <!-- <li><a href="#">Rewards</a></li>
      <li><a href="#">Points</a></li> -->
      <li class="profile">
        <a href="Profile.php"><img src="./images/profile.png" alt="Profile"></a>
        <ul class="dropdown" style ="left: -50%";>
          <li><a href="./User/user_login_page.php">User login</a></li>
          <li><a href="./User/user_register_page.php">User Registration</a></li>
          <li><a href="#">Admin login</a></li>
          <li><a href="#">Admin Registration</a></li>
        </ul>
      </li>
    </ul>
  </nav>
<body>
    <div class = "flexbox">
        <div class = "flexcontainer flexitem1">
            <img class = "img_class"  src = "./images/PE-filament.jpg">
            <p>PE FILAMENT</p>
        </div>
        
        <div class = "flexcontainer flexitem2">
            <img class = "img_class" src = "./images/PET-filament.jpeg">
            <p>PET FILAMENT</p>
        </div>

        <div class = "flexcontainer flexitem3" >
            <img class = "img_class" src = "./images/PETG-filament.jpeg">
            <p>PETG Filament</p>
        </div>        
    </div>
</body>
</html>