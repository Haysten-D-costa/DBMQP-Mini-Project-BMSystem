<?php
	$name = $_POST['name'] ;
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $conn = mysqli_connect("localhost", "root", "", "BMSystem");
    if($conn) {  }
    else {
        alert("<br>Connection failed !");
        exit();
    }
    $query = "
        INSERT INTO LoginDetails (userName, email, password, phone)
        VALUES
        ('$name', '$email', '$password','$phone');
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