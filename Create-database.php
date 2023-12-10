<html>
    <body>
        <?php
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $conn = mysqli_connect($dbhost,$dbuser,$dbpass);
        if(! $conn){
            echo 'Connection failure<br>';
        }
        echo 'connection successfully<br>';
        $sql = "CREATE DATABASE User";
        if(mysqli_query($conn,$sql)){
            echo 'creation successful';
        }
        else{
            echo 'error'.mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>    
</html>    