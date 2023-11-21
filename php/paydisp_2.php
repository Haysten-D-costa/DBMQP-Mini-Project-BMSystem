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
    <a href="../html/payment.html" class="links">Goto Payments</a>
    <a href="../html/home.html" class="links">Goto Home</a>
    <br><br>
</body>
<html>

<?php
    $conn = mysqli_connect("localhost", "root", "", "BMSystem");
    if($conn) { }
    else {
        echo "Failed connection !";
        exit();
    }
    $query = "
    SELECT userID, userName FROM LoginDetails
    INTERSECT 
    SELECT PaymentID, PaymentName FROM Payments;
    ";
    $r = mysqli_query($conn, $query);

    if($r) {
        while($info = mysqli_fetch_array($r)) {
            echo "<br><br>Customer ID : " . $info['userID'];
            echo "<br>Customer Name   : " . $info['userName'];               
        }
    }
?>