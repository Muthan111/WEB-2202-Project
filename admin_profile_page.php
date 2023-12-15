<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Profile Page</title>
    <link rel="stylesheet" type="text/css" href="profile.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
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
          <li><a href="admin_login_backend.php">Admin Registration</a></li>
          <li><a href="admin_profile_page.php">Admin Profile page</a></li>
        </ul>
      </li>
    </ul>
  </nav>

    <div class="flex_container">
        <div class="flexbox">
            <!-- Admin information or other content -->
        </div>
        <div class="profile">
            <h1>Admin Profile</h1>
            <form action="admin_update_points.php" method="post">
                <label for="userID">User ID:</label>
                <input type="text" name="userID" id="userID" required>
                
                <label for="points">New Points:</label>
                <input type="text" name="points" id="points" required>

                <input type="submit" value="Update Points">
            </form>
        </div>
    </div>
</body>
</html>
