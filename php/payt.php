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

    // Retrieve form data
    // $paymentID = $_POST["paymentID"];
    $paymentDate = $_POST["paymentDate"];
	$paymentType = $_POST["paymentType"];
    $amount = $_POST["amount"];

    // Display payment details
    echo "<h2>Payment Details</h2>";
    
    // echo "<br><br><b>Payment ID: </b>" .$paymentID;
    echo "<br><br><b>Payment Date: </b>" .$paymentDate;
    echo "<br><b>Payment Type: </b>" .$paymentType;
    echo "<br><b>Amount: </b>" .$amount;

    $conn = mysqli_connect("localhost", "root", "", "BMSystem");
    if($conn) { }
    else {
        alert("<br>Connection failed !");
        exit();
    }
	
    $query = "
        INSERT INTO Payments (custname,bookname,PaymentDate, PaymentType, Amount)
        VALUES
        ('$custname', '$bookname', '$paymentDate', '$paymentType', '$amount');
    ";
    $r = mysqli_query($conn, $query);
    if($r) { }
    else {
        echo "<br> Payment failed !";
        exit();
    }
    mysqli_close($conn);
?>