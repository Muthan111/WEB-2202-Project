<?php
session_start();

  if (isset($_SESSION['user_Name']))
  {
    $name = htmlspecialchars($_SESSION['user_Name']);
       
    $_SESSION['LAST_ACTIVITY'] = time();
  }
  



?>