<?php
require "db_conn";

$sql = "CREATE DATABASE user";
if (mysqli_query($conn,$sql)){
    echo "Database created successfully";

}
else{
    echo "Error createing database: ". mysqli_error($conn);
}
mysqli_close($conn);
?>