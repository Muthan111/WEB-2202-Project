<html>
    <body>
        <?php
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'User';
        $conn = mysqli_connect($dbhost,$dbuser,$dbpass, $dbname);
        if(! $conn){
            echo 'Connection failure<br>'.mysqli_connect_error();
        }
        echo 'connection successfully<br>';
        $sql = "CREATE TABLE Data(
            id INT AUTO_INCREMENT, name VARCHAR(20) NOT NULL,Email VARCHAR(30), user_Name VARCHAR(30),password VARCHAR(30),  primary key (id))";

        if(mysqli_query($conn,$sql)){
            echo 'Table created successfully';
        }
        else{
            echo 'Table is not created';
        }
        mysqli_close($conn);
        ?>
    </body>    
</html>    