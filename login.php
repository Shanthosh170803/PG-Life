<?php

$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "mini";

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
    exit;
}
    $email=$_POST["email"];
    $password=$_POST["password"];

    $sql = "SELECT * FROM register WHERE email='$email' AND password='$password' ";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }

    $row = mysqli_fetch_assoc($result);
    if ($row) {
        echo "Hello " . $row['name'] . "<br/>"; 
        header("location:http://127.0.0.1/pglife/home.html");

       
    } else {
        echo "Login Failed<br/>";
        header("location:http://127.0.0.1/pglife/loginfailed.html");
    }

    mysqli_close($conn);
    // echo $email . "<br/>";
    // echo $password . "<br/>";
    ?>
    <!-- <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript">
            window.location.href="http://127.0.0.1/pglife/home.html"
        </script> 
    </head>
    <body>
        
    </body>
    </html> -->