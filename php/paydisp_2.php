<html>
<head>
    <link rel="stylesheet" href="../css/header-footer.css">
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
    $query = "SELECT count(*) FROM Payments";
    $r = mysqli_query($conn, $query);
    if($r) {
        while($info = mysqli_fetch_array($r)) {
            echo "Total number of Payments Done : " . $info['count(*)'];                      
        }
    }

    $query = "
        SELECT PaymentID, PaymentName FROM Payments;
    ";
    $r = mysqli_query($conn, $query);

    if($r) {
        while($info = mysqli_fetch_array($r)) {
            echo "<br><br>Customer ID : " . $info['PaymentID'];
            echo "<br>Customer Name   : " . $info['PaymentName'];               
        }
    }
    mysqli_close($conn);
?>