<?php
session_start(); // Start the session at the beginning of the script

include "database_connect.php";

if (isset($_POST["userName"]) && isset($_POST["passWord"])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $userName = validate($_POST['userName']);
    $password = validate($_POST['passWord']);
    
    if (empty($userName)) {
        header("Location: user_login_page.php?error=User Name is required");
        exit();
    } elseif (empty($password)) {
        header("Location: user_login_page.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM Data WHERE user_Name ='$userName' AND password = '$password' " ;
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)){
            $row = mysqli_fetch_assoc($result);
            if($row['user_Name'] === $userName && $row['password'] === $password){
                $_SESSION['user_Name'] = $row['user_Name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['Email']= $row['Email'];
                $_SESSION['Points'] = $row['Points'];
                header("Location: Loggedin.html");
                
            }
        }   else {
                header("Location: user_login_page.php?error=Incorrect User name or password");
                exit();
        }
       
    }
} else {
    header("Location: user_login_page.php");
    exit();
}


?>
