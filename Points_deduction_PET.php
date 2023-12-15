<?php
include "database_connect.php";
session_start();
$error = "";
if(isset($_POST['quantity'])){
    $amount = validate($_POST['quantity']);

    $sql ="SELECT * FROM  filament WHERE Name ='PETG Filament'" ;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $material = $row['Name'];
    $Point_DD= $row['Redeem_points'];
    $Points_Redeemed = $Point_DD * $amount;
    
}
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if (isset($_SESSION['user_Name']) && isset($_SESSION['name'])) {
    $username = htmlspecialchars($_SESSION['user_Name']);
    $email = htmlspecialchars($_SESSION['Email']);
    $name = htmlspecialchars($_SESSION['name']);
    $C_Point = htmlspecialchars($_SESSION['Points']);
    $New_value = htmlspecialchars($C_Point - $Points_Redeemed);

    if ($New_value >= 0) {
        $sql1 = "UPDATE data SET Points = $New_value WHERE user_Name = '$username'";
        $result1 = mysqli_query($conn, $sql1);

        $sql2 = "INSERT INTO redeemed_items (Customer, Filament, Points) VALUES ('$name','$material',$Points_Redeemed)";
        $table_result = mysqli_query($conn, $sql2);
        if ($table_result) {
            // Redemption success
            echo "Redemption successful for $material by $name";
        } else {
            // Redemption failed
            echo "Failed to redeem $material by $name";
        }
    } else {
        // Not enough points
        $error = "Not enough points to redeem";
        echo "<script>alert('$error');</script>";
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Points deduction for PET</title>
    <style>
        body{
            background-color: lightgray;
        }    
    </style>
    <link rel = "stylesheet" type ="text/css" href = "navbar.css">
    <link rel = "stylesheet" type ="text/css" href = "deduction.css">
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

    <div class="div1">
        <p>
        <?php
            if (isset($_SESSION['user_Name']) && isset($_SESSION['name'])) {
                $username = htmlspecialchars($_SESSION['user_Name']);
                if ($New_value < 0){
                    echo "Pkease go back and select another amount";
                }else{
                    echo "hi $username, you have used $Points_Redeemed points to redeem $amount kg of PETG filament ";
                }
                
            }
        ?>
        </p>
    </div>  

    <div>
        <a href="Points_deduction_PET.php">
            <button class="button1">Click here to redeem again</button>
        </a>
    </div>

    <div>
        <a href="filament_redeemer_PET.php">
            <button class="button2">Click here to choose another amount</button>
        </a>
    </div>
</body>
</html>
