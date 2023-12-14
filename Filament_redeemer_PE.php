<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type ="text/css" href = "Filament1.css">
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
    <div class = "Wrapper">
        <div class  = "left">
            <img style = "width: 500px; height: 450px;" src = "./images/PETG-filament.jpeg">
        </div>
        
        <div class = "right">
            <p>GreenPrintCycle</p>
            <h1 >PE  FILAMENT</h1>
            <h2>Description</h2>
            <p><br></p>
            <p style = "padding-bottom: 15px;"> PETG Filament is one of the most popular 
            filaments to print with, but also the most complicated to process, hence its price <br></p>
            <br>
            <label for="colorPicker">Choose color</label><br>
            <input type="color" list="presets">
            <datalist id="presets">
            <option value="#cccccc">Grey</option>
            <option value="#ffffff">White</option>
            <option value="#6699cc">Blue</option>
            </datalist>
            <label for="length">Choose length size:</label>
            <select id="length" name="length" size="2">
            <option value="XS">XS</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            </select>
            <p><br></p>
            <form action = "Points_deduction_PETG.php" method = "post">
              <label>Enter amount</label>
              <input type = "number" min="1" name= "quantity">
              <button>Redeem </button>
            </form>     
            <p><?php
            session_start();
            ?>
        </div>    
    </div>   
</body>
</html>