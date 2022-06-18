<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "services";

    // Database connection
    $connection = mysqli_connect($server, $username, $password,$dbname);

    if (!$connection) {
        die("Connect to the database is not established" . mysqli_connect_error());
    }

	$tvName = $_POST['tv'];
	$tvproblem = $_POST['problem'];
	$clientAddress = $_POST['address'];
	$clientNumber = $_POST['phno'];
    $email = $_POST['email'];
    $name = $_POST['name'];

	
    $query = "INSERT INTO `tvservice` (`customer_name`, `email`, `id`, `tvname`, `tvproblem`, `clientaddress`, `contact`) VALUES ('$name','$email', NULL, '$tvName','$tvproblem','$clientAddress','$clientNumber')";


    if($connection->query($query)==true){
        // $insert = true;
        echo "Good God your services is registerd and our worker will call you soon...";
    }
    else{
        echo "<p>Error : $query <br> $connection->error</p>";
    }

    $connection->close();

?>

<html>
    <head>
        <style>
            h1{
                display:flex;
                justify-content:center;
                align-items:center;
                height:80vh;
            }
        </style>
    </head>
    <body>
        <h1>Your service is succesfully booked</h1>
    </body>
</html>