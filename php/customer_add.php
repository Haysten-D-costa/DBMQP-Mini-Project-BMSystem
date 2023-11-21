<html>
<head>
    <style>
        body {
            color: whitesmoke;
	        background-color: #212121;
        }
        a {
            text-decoration: none;
            color: white;
            background-color: #c00;
            margin-left: 10px;
            padding: 8px;
            font-size: 20px;
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <br><br>
    <a href="../html/customer.html" class="links">Goto Customer Services</a>
    <a href="../html/home.html" class="links">Goto Home</a>
    <br><br>
</body>
<html>
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