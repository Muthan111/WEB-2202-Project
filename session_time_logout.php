<?php
session_start();

  if (isset($_SESSION['user_Name']))
  {
    $name = htmlspecialchars($_SESSION['user_Name']);
       
    if (isset($_SESSION['LAST_ACTIVITY']) && time() - $_SESSION['LAST_ACTIVITY'] > 1) {
        destroy_session_and_data();
    
        echo "session time out. <br>";
        echo "Please <a href='user_login_backend.php'>Click Here</a> to log in again.";
    }
    else{
            echo "Hi $name.<br>
           inactive 5 seconds will logout";
        }
    $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
  }
  else echo "Please <a href='user_login_backend.php'>Click Here</a> to log in.";

  function destroy_session_and_data()
{
   //session_start();
   //$_SESSION = array();
  
   unset($_SESSION['user_Name']);
   $_SESSION = array();
   session_unset();
   setcookie(session_name(), '', time() - 2592000, '/');
   session_destroy();
   header("Location: Profile.php");
}
?>