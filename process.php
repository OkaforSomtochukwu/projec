<?php

// if(isset($_POST['donate'])){
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $donate = $_POST['options'];

//     echo $name;
//     echo $email;
//     echo $donate;
// }

// Lets Process Our Rave

$servername = "localhost";
$username = "root";
$password = "";
$db = "event_planning_db";

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("Unable to connect to the database" . mysqli_connect_error());
} else {
    echo "Connection successful";
}

    if (isset($_POST['check'])){

    }
?>