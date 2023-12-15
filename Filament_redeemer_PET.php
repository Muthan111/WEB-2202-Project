<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filament Selector for PETG</title>
    <link rel="stylesheet" type="text/css" href="Filament1.css">
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
          <li><a href="user_register_page.php">Admin Registration</a></li>
          <li><a href="admin_profile_page.php">Admin Profile page</a></li>
        </ul>
      </li>
    </ul>
  </nav>

    <div class="Wrapper">
        <div class="left">
            <img style="width: 500px; height: 450px;" src="./images/PETG-filament.jpeg">
        </div>

        <div class="right">
            <p>GreenPrintCycle</p>
            <h1>PET FILAMENT</h1>
            <h2>Description</h2>
            <h3>Redemption Price: 800 points per Kg</h3>

            <label for="colorPicker">Choose color</label><br>
            <input type="color" list="presets">
            <datalist id="presets">
                <!-- Your color options here -->
            </datalist>

            <label for="weight">Choose weight (kg):</label>
            <select id="weight" name="weight">
                <?php
                // Generate options for weights from 1 kg to 5 kg
                for ($i = 1; $i <= 5; $i++) {
                    echo "<option value=\"$i\">$i Kg</option>";
                }
                ?>
            </select>

            <p><br></p>

            <?php
            session_start();

            // Check if the user is logged in
            if (isset($_SESSION['user_Name'])) {
                // Display the redemption form if the user is logged in
                echo '<form action="Points_deduction_PETG.php" method="post">';
                echo '<label>Enter amount</label>';
                echo '<input type="number" min="1" name="quantity">';
                echo '<button>Redeem</button>';
                echo '</form>';
            } else {
                // Display a message if the user is not logged in
                echo '<p>Please <a href="user_login_page.php">log in</a> to redeem filaments.</p>';
            }
            ?>
        </div>
    </div>
</body>
</html>
