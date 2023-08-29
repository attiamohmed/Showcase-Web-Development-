<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Client system</title>
            <link rel="stylesheet" href="client.css">
        </head>
        <body>
            <div class="container my-5">
                <h1>Employees List </h1>
                <button class="add" type="submit"><a href="add.php" > Add Employee</a></button>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> First Name </th>
                            <th> Last Name</th>
                            <th>Email Address</th>
                            <th> Phone Number </th>
                            <th> Home Address </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $host = "localhost:3307";
                            $dbname = "forms_db";
                            $username = "root";
                            $password ="";
                            
                            $connection = mysqli_connect($host, $username, $password, $dbname);

                            if (mysqli_connect_error()){
                                die ("A problem has occurred" . mysqli_connect_error());
                                
                            }
                            
                            $sql = "SELECT * FROM add_client";
                            $result = $connection ->query ($sql);

                            if (! $result){
                                die("it did not work" . mysqli_connect_error());
                            }

                            while($row = $result -> fetch_assoc()){
                                echo '
                                <tr>
                                    <td>' . $row['id'] . '</td>
                                    <td>' . $row['first_name'] . '</td>
                                    <td>' . $row['last_name'] . '</td>
                                    <td>' . $row['email'] . '</td>
                                    <td>' . $row['phone_number'] . '</td>
                                    <td>' . $row['address'] . '</td>
                                    <td>
                                        <button class="edit"  type="submit"><a  href="edit.php?id=' . $row['id'] . '">Edit</a> </button>
                                        <button class="delete"  type="submit"><a href="delete.php?id=' . $row['id'] . '">Delete</a> </button>
                                    </td>
                                </tr>
                                ';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </body>
        </html>