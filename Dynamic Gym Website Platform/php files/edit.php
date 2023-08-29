<?php 
$host = "localhost:3307";
$dbname = "forms_db";
$username = "root";
$password ="";

$connection = mysqli_connect($host, $username, $password, $dbname);

$id = "";
$first_name = "";
$last_name = "";
$email = "";
$phone_number = "";
$address = "";

$error = "";
$success = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET'){

    if (!isset($_GET["id"])){
        header("location:Client.php");
        exit;
    }

    $id = $_GET["id"];
    $sql = "SELECT * FROM add_client WHERE id = $id";
    $result = $connection -> query($sql);
    $row = $result -> fetch_assoc();

    if (! $row){
        header("location: Client.php");
        exit;
    }

        $first_name = $row ["first_name"];
        $last_name = $row ["last_name"];
        $email = $row ["email"];
        $phone_number =  $row ["phone_number"];
        $address = $row ["address"];
}
else{
    
    $id = $_POST["id"];
    $first_name = $_POST["fname"];
    $last_name = $_POST["lname"];
    $email = $_POST["email"];
    $phone_number = $_POST["phn"];
    $address = $_POST["address"];

    do{

        if (empty($id) || empty($first_name) || empty($last_name) || empty($email) || empty($phone_number) || empty($address)) {
            $error = "All fields are required";
            break;
        }

        $sql = "UPDATE add_client
        SET first_name = '$first_name',  last_name = '$last_name', email = '$email' , phone_number = '$phone_number' , address = '$address'
        WHERE id = $id";

        $result = $connection -> query($sql);

        if (! $result){
            $error = "Wrong format" . $connection -> error;
            break;
        }

        $success = "Client updated successfully ";

        header("location: Client.php");
        exit;


    } while(false);
}
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Employee</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
        </head>
        <body>
            <div class="container my-5">
                <h1>Edit Employee </h1>
                <?php
                    if (! empty($error)){
                        echo "$error";
                    }
                ?>
                <form method="post" class="col-sm-6">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label"> First Name</label>
                        <div col-sm-6>
                            <input type="text" class="form-control" name="fname" value="<?php echo"$first_name" ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label"> Last Name</label>
                        <div col-sm-6>
                            <input type="text" class="form-control" name="lname" value="<?php echo"$last_name" ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label"> Email</label>
                        <div col-sm-6>
                            <input type="text" class="form-control" name="email" value="<?php echo"$email" ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label"> Phone Number</label>
                        <div col-sm-6>
                            <input type="text" class="form-control" name="phn" value="<?php echo"$phone_number" ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label"> Address</label>
                        <div col-sm-6>
                            <input type="text" class="form-control" name="address" value="<?php echo"$address" ?>">
                        </div>
                    </div>
                    <?php
                    if (! empty($success)){
                        echo "$success";
                    }
                    ?>
                    <div class="row mb-3">
                        <div class="offset-sm-3 col-sm-3 d-grid">
                            <button class="btn"  type="submit"> Submit </button>
                        </div>
                        <div class="col-sm-3 d-grid">
                            <a class="coool" href="client.php" >Cancel </a>
                        </div>
                    </div>
                </form>
            </div>
        </body>
    </html>