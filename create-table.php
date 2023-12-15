<html>
    <body>
        <?php
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'User';
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        
        if (!$conn) {
            echo 'Connection failure<br>' . mysqli_connect_error();
        }
        
        echo 'Connection successful<br>';
        
        // Create the Data table
        $sqlData = "CREATE TABLE Data (
            UserID INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(20) NOT NULL,
            Email VARCHAR(30),
            user_Name VARCHAR(30),
            password VARCHAR(30)
        )";

        if (mysqli_query($conn, $sqlData)) {
            echo 'Data table created successfully<br>';
        } else {
            echo 'Data table is not created<br>';
        }

        // Create the AdminUsers table
        $sqlAdminUsers = "CREATE TABLE AdminUsers (
            AdminID INT AUTO_INCREMENT,
            UserID INT,
            PRIMARY KEY (AdminID),
            FOREIGN KEY (UserID) REFERENCES Data(UserID)
        )";

        if (mysqli_query($conn, $sqlAdminUsers)) {
            echo 'AdminUsers table created successfully<br>';
        } else {
            echo 'AdminUsers table is not created<br>';
        }

        mysqli_close($conn);
        ?>
    </body>
</html>
