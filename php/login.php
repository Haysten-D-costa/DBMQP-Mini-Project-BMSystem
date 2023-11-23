<html>
<head>
    <link rel="stylesheet" href="../css/header-footer.css">
</head>
<body>
    <br><br>
    <a href="../html/home.html" class="links">Goto Home</a>
    <br><br>
</body>
<html>

<?php
    // reading data from login page....
    $name = $_POST['fname'] ." ". $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $conn = mysqli_connect("localhost", "root", "", "BMSystem");
    if($conn) { }
    else {
        alert("<br>Connection failed !");
        exit();
    }
    $query = "
        INSERT INTO User (userName, email, password, phone)
        VALUES
        ('$name', '$email', '$password', '$phone');
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