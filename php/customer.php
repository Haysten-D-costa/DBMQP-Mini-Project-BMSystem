<?php
    // reading data from login page....
    $name = $_POST['name'] ;
    $continfo = $_POST['continfo'];
    $email = $_POST['email'];

    $conn = mysqli_connect("localhost", "root", "", "BMSystem");
    if($conn) { echo "<br>Connection successful !"; }
    else {
        alert("<br>Connection failed !");
        exit();
    }
    $query = "
        INSERT INTO Customers (Name, ContactInformation, Email)
        VALUES
        ('$name', '$continfo', '$email');
    ";
    $r = mysqli_query($conn, $query);
    if($r) { echo "<br> Registration successfully !"; }
    else {
        echo "<br>Registration failed !";
        exit();
    }
    mysqli_close($conn);
?>