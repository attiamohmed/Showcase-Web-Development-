<?php

$email = $_POST["email"];
$PhoneNumber = $_POST["PhoneNumber"];
$food1 = $_POST["food1"];
$requirement = $_POST["requirement"];
$newsletter = filter_input(INPUT_POST, 'newsletter', FILTER_VALIDATE_BOOL);
$terms = filter_input(INPUT_POST, 'terms', FILTER_VALIDATE_BOOL);

if (! $terms){
    die ('Terms and Conditions MUST be Accepted');
}

$host = "localhost:3307";
$dbname = "forms_db";
$username = "root";
$password ="";

$connection = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_error()){
    die ("A problem has occurred" . mysqli_connect_error());
    
}

$sql = "INSERT INTO workout (email, Phone_number, type, requirement)
        VALUES (?, ?, ?, ?)";

$stmt = mysqli_stmt_init($connection);

if (! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($connection));
}

mysqli_stmt_bind_param($stmt, "ssss", $email, $PhoneNumber, $food1, $requirement);

mysqli_stmt_execute($stmt);

header("location:thankwork.html");
exit;

