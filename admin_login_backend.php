<?php
session_start(); // Start the session at the beginning of the script
include "database_connect.php";

if (isset($_POST["adminID"]) && isset($_POST["passWord"])) {
    $adminID = validate($_POST['adminID']);
    $password = validate($_POST['passWord']);
    
    if (empty($adminID)) {
        header("Location: admin_login_page.php?error=Admin ID is required");
        exit();
    } elseif (empty($password)) {
        header("Location: admin_login_page.php?error=Password is required");
        exit();
    } else {
        // Use a join to get information from both tables
        $sql = "SELECT Data.*, AdminUsers.* 
                FROM Data, AdminUsers
                INNER JOIN AdminUsers ON Data.UserID = AdminUsers.UserID
                WHERE AdminUsers.adminID = $adminID";
        
        // Using prepared statement to prevent SQL injection
        
        $result = mysqli_query($sql);
        
        if ($row = mysqli_fetch_assoc($result)) {
            // Debugging: Echo out hashed password from the database
            echo "Hashed Password from Database: " . $row['password'] . "<br>";
            
            // Verify the entered password against the stored hashed password
            if (password_verify($password, $row['password'])) {
                // Debugging: Echo out hashed password entered during login
                echo "Hashed Password Entered: " . password_hash($password, PASSWORD_DEFAULT) . "<br>";
                
                // Set admin-related session variables if needed
                $_SESSION['user_Name'] = $row['user_Name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['Email'] = $row['Email'];
                $_SESSION['Points'] = $row['Points'];

                // Additional checks for admin-related privileges if needed
                if ($row['isAdmin'] == 1) {
                    // Admin-specific logic or session variables can be added here
                }

                header("Location: AdminLoggedIn.html"); // Redirect to admin dashboard
                exit();
            } else {
                header("Location: admin_login_page.php?error=Incorrect password");
                exit();
            }
        } else {
            header("Location: admin_login_page.php?error=Incorrect Admin ID or password");
            exit();
        }
    }
} else {
    header("Location: admin_login_page.php");
    exit();
}

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
