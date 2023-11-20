<?php

    // Retrieve form data
    // $paymentID = $_POST["paymentID"];
    $custname = $_POST["custname"];
    $bookname = $_POST["bookname"];
    $paymentDate = $_POST["paymentDate"];
	$paymentType = $_POST["paymentType"];
    $amount = $_POST["amount"];

    // Display payment details
    echo "<h2>Payment Details</h2>";
    
    // echo "<br><br><b>Payment ID: </b>" .$paymentID;
    echo "<br><br><b>Customer Name: </b>" .$custname;
    echo "<br><b>Book Name: </b>" .$bookname;
    echo "<br><b>Payment Date: </b>" .$paymentDate;
    echo "<br><b>Payment Type: </b>" .$paymentType;
    echo "<br><b>Amount: </b>" .$amount;
	
	
/*	
    $paymentID = $_POST['paymentID'];
    $paymentDate = $_POST['paymentDate'];
	$paymentType = $_POST['paymentType'] ;
	$amount = $_POST['amount'];

    echo "<h2>Payment Details</h2>";
    echo "<br><b>Payment Type: </b>" .$paymentType;
    echo "<br><br><b>Payment ID: </b>" .$paymentID;
    echo "<br><br><b>Payment Date: </b>" .$paymentDate;
    echo "<br><br><b>Amount: </b>" .$amount;
*/	


    $conn = mysqli_connect("localhost", "root", "", "BMSystem");
    if($conn) { echo "<br>Connection successful !"; }
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
    if($r) { echo "<br> Payment Successfull !"; }
    else {
        echo "<br> Payment failed !";
        exit();
    }
    mysqli_close($conn);


/*
        // Connect to the database
        $conn = mysqli_connect("localhost", "root", "", "BMSystem");

        if($conn) {
            echo "<br>Connection successful !";
        } else {
            echo "<br>Connection failed !";
            exit();
        }
    
        // Insert data into Payments table
        $query = "
            INSERT INTO Payments (PaymentID, PaymentDate, PaymentType, Amount)
            VALUES
            ('$paymentID', '$paymentDate', '$paymentType', '$amount');
        ";
    
        $r = mysqli_query($conn, $query);
    
        if($r) {
            echo "<br>Payment Successful !";
        } else {
            echo "<br>Payment failed !";
            exit();
        }
    
        // Close the connection
        mysqli_close($conn);

*/

?>