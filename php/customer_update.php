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

    $userid=$_POST['userid'];
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
        UPDATE FROM LoginDetails 
        SET  
            userName= '$name' and
		    email= '$email' and
			password= '$password' and
            phone= '$phone' 
        WHERE userID='$userid';
        ";
    $r = mysqli_query($conn, $query);
    if($r) { echo "Update Successful !"; }
    else {
        echo "Update Failed !";
        exit();
    }
       
?>