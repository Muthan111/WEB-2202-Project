<?php
session_start();
INCLUDE "database_connect.php";

if(isset($_POST["Name"], $_POST["userName"], $_POST["passWord"], $_POST["Email"])){
    $fullName = validate($_POST['Name']);
    $userName = validate($_POST['userName']);
    $email = validate($_POST['Email']);
    $password = validate($_POST['passWord']);
    $password_pattern = '/^(?=.*[a-zA-Z])(?=.*\d).{8,}$/';
    $Full_Name_pattern ='/^[a-zA-ZÀ-ÿ\'\- ]+$/u';

    $checkEmailQuery = "SELECT * FROM Data WHERE Email = '$email'";
    $checkResult = mysqli_query($conn, $checkEmailQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        // Email already exists, redirect with an error message
        header("Location: user_register_page.php?error=Email already exists");
        exit();
    }

    if (!preg_match($Full_Name_pattern, $fullName)) {
        header("Location: user_register_page.php?error=Name cannot contain numbers ");
        exit();
    }
    if (!preg_match($password_pattern, $password)) {
        header("Location: user_register_page.php?error=Password is weak ");
        exit();
    }
    if(empty($fullName)){
        header("Location: user_register_page.php?error=Full Name is required ");
        exit();
    }elseif (empty($email)){
         header("Location: user_register_page.php?error=Email is required ");
         exit();
    }     
    elseif(empty($userName)){
        header("Location: user_register_page.php?error=Username is required ");
        exit();
    }elseif(empty($password)){
        header("Location: user_register_page.php?error=Password is required ");
        exit();
    }

    

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    
    $sql = "INSERT INTO Data (UserID,Name, Email, user_Name, password) VALUES (NULL,'$fullName', '$email', '$userName', '$password')";
    $result = mysqli_query($conn,$sql);
    $userID = mysqli_insert_id($conn);

    $SQL2 = "INSERT INTO AdminUsers (UserID, AdminID) VALUES ($userID, NULL)";
    $result2 = mysqli_query($conn,$SQL2);

    // Check if both insertions were successful
    if ($result2) {
        // Redirect to the profile page after successful registration
        header("Location: registered.php");
        exit();
    } else {
        echo "Insertion failure: " . mysqli_error($conn);
    }

    // if (!$result){
    //     echo "Insertion failure" . mysqli_error($conn);
    // }else {
    //          header("Location: registered.html");
    //          mysqli_close($conn);
    // }
    
    
    // $stmt = mysqli_prepare($conn, $sql);

    // if ($stmt) {
        
    //     mysqli_stmt_bind_param($stmt, "ssss", $fullName, $email,$userName ,$password );
        
        
    //     $result = mysqli_stmt_execute($stmt);

    //     if(!$result){
    //         echo "Insertion failure: " . mysqli_error($conn);
    //     } else {
    //         echo "<script>alert('You have succesfully registered');</script>";
    //     }
        
        
    //     mysqli_stmt_close($stmt);
    // } else {
    //     echo "Database error: " . mysqli_error($conn);
    // }
}

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
