<html>
<head>
    <link rel="stylesheet" href="../css/header-footer.css">
</head>
<body>
    <br><br>
    <a href="../html/customer.html" class="links">Goto Customer</a>
    <a href="../html/home.html" class="links">Goto Home</a>
    <br><br>
</body>
<html>

<?php

    $userid = $_POST['userid'];
    $name = $_POST['name'] ;
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $conn = mysqli_connect("localhost", "root", "", "BMSystem");
    if($conn) { }
    else {
        echo "Connection Failed !";
        exit();
    }
    $query = "
        UPDATE User 
        SET  
            userName = '$name',
		    email = '$email',
			password = '$password',
            phone = '$phone'
        WHERE userID = '$userid';
    ";
    $r = mysqli_query($conn, $query);
    if($r) { echo "Update Successful !"; }
    else {
        echo "Update Failed !";
        exit();
    }
    mysqli_close($conn);
?>