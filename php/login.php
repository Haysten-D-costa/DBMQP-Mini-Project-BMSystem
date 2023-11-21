<html>
<head>
    <style>
        body {
            color: whitesmoke;
	        background-color: #212121;
        }
    </style>
</head>
<html>

<?php
    // reading data from login page....
    $name = $_POST['fname'] ." ". $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = mysqli_connect("localhost", "root", "", "BMSystem");
    if($conn) { echo "<br>Connection successful !"; }
    else {
        alert("<br>Connection failed !");
        exit();
    }
    $query = "
        INSERT INTO LoginDetails (userName, email, password)
        VALUES
        ('$name', '$email', '$password');
    ";
    $r = mysqli_query($conn, $query);
    if($r) { 
        echo "<br> Recored inserted successfully !";
    }
    else {
        echo "<br>Record insertion failed !";
        exit();
    }
    mysqli_close($conn);
?>