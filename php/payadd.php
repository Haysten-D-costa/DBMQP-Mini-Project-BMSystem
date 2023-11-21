<?php
    $conn = mysqli_connect("localhost", "root", "", "BMSystem");
    if($conn) { echo "<br>Connection successful !"; }
    else {
        alert("<br>Connection failed !");
        exit();
    }
	$custname = $_POST["custname"];
    $bookname = $_POST["bookname"];
    $paymentDate = $_POST["paymentDate"];
	$paymentType = $_POST["paymentType"];
    $amount = $_POST["amount"];
	
	
	echo "<h2>Payment Details : </h2>";
   
    echo "<br><b>Customer Name: </b>" .$custname;
    echo "<br><b>Book Name: </b>" .$bookname;
    echo "<br><b>Payment Date: </b>" .$paymentDate;
    echo "<br><b>Payment Type: </b>" .$paymentType;
    echo "<br><b>Amount: </b>" .$amount;

    $query = "
        INSERT INTO Payments (PaymentName, BookName,PaymentDate, PaymentType, Amount)
        VALUES
        ('$custname', '$bookname', '$paymentDate', '$paymentType', '$amount');
    ";
    $r = mysqli_query($conn, $query);
    if($r) { echo "<br> Payment Successfull !"; }
    else {
        echo "<br> Payment failed !";
        exit();
    }
    mysqli_close($conn);
?>