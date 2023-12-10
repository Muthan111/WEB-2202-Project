<?php
session_start();
require "database_connect.php";

if(isset($_POST["Name"], $_POST["userName"], $_POST["passWord"], $_POST["Email"])){
    $fullName = validate($_POST['Name']);
    $userName = validate($_POST['userName']);
    $email = validate($_POST['Email']);
    $password = validate($_POST['passWord']);

    if (empty($userName)){
        echo "Username is required";
        exit();
    } elseif (empty($password)){
        echo "Password is required";
        exit();
    } elseif (empty($fullName)){
        echo "Full Name is required";
        exit();
    } elseif (empty($email)){
        echo "Email is required";
        exit();
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL statement using placeholders to prevent SQL injection
    $sql = "INSERT INTO Data (Name, Email, user_Name, password) VALUES (?, ?, ?, ?)";
    
    // Create a prepared statement
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Bind parameters to the prepared statement as strings
        mysqli_stmt_bind_param($stmt, "ssss", $fullName, $email,$userName ,$password );
        
        // Execute the prepared statement
        $result = mysqli_stmt_execute($stmt);

        if(!$result){
            echo "Insertion failure: " . mysqli_error($conn);
        } else {
            echo "<script>alert('You have succesfully registered');</script>";
        }
        
        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Database error: " . mysqli_error($conn);
    }
}

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
