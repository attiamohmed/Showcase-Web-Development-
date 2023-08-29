<?php
if (isset($_GET["id"])){
    $id = $_GET["id"];

$host = "localhost:3307";
$dbname = "forms_db";
$username = "root";
$password ="";

$connection = mysqli_connect($host, $username, $password, $dbname);

$sql = "DELETE FROM add_client WHERE id = $id";
$connection -> query($sql);

}
header("location: Client.php");
exit;
?>