<?php
if (!isset($name)) { $name = ''; }
if (!isset($Email)) { $Email = ''; }
if (!isset($Password)) { $Password = ''; } 


?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 <title> Login
 </title>
 <meta charset="utf-8">
 </head>
 <body>
    <form action ="#" method = "post">
        <label>Full Name </label>
        <input type = "text" name = "name" value ="<?php echo htmlspecialchars($name); ?>"><br>
        <label>Email </label>
        <input type = "text" name = "email" value ="<?php echo htmlspecialchars($Email); ?>"><br>
        <label>Password </label>
        <input type = "text" name = "password" value ="<?php echo htmlspecialchars($Password); ?>"><br>
        <input type ="submit">
    </form>
 </body>   
</html>

