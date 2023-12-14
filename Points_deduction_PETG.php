<?php
include "database_connect.php";
session_start();
if(isset($_POST['quantity'])){
    $amount = validate($_POST['quantity']);

    $sql ="SELECT * FROM  filament WHERE Name ='PETG Filament'" ;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $material = $row['Name'];
    $Point_DD= $row['Redeem_points'];
    $Points_Redeemed = $Point_DD * $amount;
    echo $Points_Redeemed;
}
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}




// if (isset($_SESSION['user_Name']) && isset($_SESSION['name']))
//         {
//             $username = htmlspecialchars($_SESSION['user_Name']);
//             $email = htmlspecialchars($_SESSION['Email']);
//             $name = htmlspecialchars($_SESSION['name']);
//             $C_Point = htmlspecialchars($_SESSION['Points']);
//             $New_value = $C_Point - $Point_DD;
//             $sql1 = "UPDATE data SET Points = $New_value  WHERE user_Name = '$username'";
//             $result1 = mysqli_query($conn,$sql1);

//             $sql2 = "INSERT INTO redeemed_items (Customer, Filament, Points) VALUES ('$name','$material',$Point_DD)";
//             $table_result = mysqli_query($conn,$sql2);
//             if ($table_result) {
//                 // INSERT query was successful
//                 echo "Redemption successful for $material by $name";
//             } else {
//                 // INSERT query failed
//                 echo "Failed to redeem $material by $name";
//             }     
//         }
?>