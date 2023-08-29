<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="login.css">
    <title>Login Form</title>
</head>
<body>
    <h2>Login Form</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>

    <?php

    $host = "localhost:3307";
    $dbname = "forms_db";
    $username = "root";
    $password ="";
    
    $connection = mysqli_connect($host, $username, $password, $dbname);

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];


        $checkUserSql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

        $result = mysqli_query($connection, $checkUserSql);

        if (mysqli_num_rows($result) == 1) {

            header("location:Client.php");
            exit;

        } else {

            echo "Invalid username or password. Please try again.";
        }


        mysqli_close($connection);
    }
    ?>
</body>
</html>
