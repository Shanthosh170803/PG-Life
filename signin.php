<?php
    $db_hostname="localhost";
    $db_username="root";
    $db_password="";
    $db_name="mini";
    
    $conn=mysqli_connect( $db_hostname,$db_username,$db_password,$db_name);
    if(!$conn){
        echo "Connection failed.".mysqli_connect_error();
        exit;
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number=$_POST['number'];
    $gender=$_POST['gender'];
    $clg_name=$_POST['clg_name'];

    // echo $name . "<br/>";
    // echo $email . "<br/>";
    // echo $password . "<br/>";
    $sql="INSERT INTO register(name, email, password, number, gender, clg_name) VALUES('$name','$email','$password','$number','$gender','$clg_name')";

   // $SELECT="SELECT email from register where email=? Limit 1";
    $result= mysqli_query($conn,$sql);

    if(!$result){
        echo "Error.".mysqli_error($conn);

        exit;
    }

    echo "Registration Successful and you can leave this page";
    mysqli_close($conn);
?>