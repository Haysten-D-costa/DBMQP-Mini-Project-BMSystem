<html>
<head>
    <link rel="stylesheet" href="../css/header-footer.css">
</head>
<body>
    <br><br>
    <a href="../html/payment.html" class="links">Goto Payment</a>
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
        SELECT l.userID, p.paymentName, b.ISBN, b.title,
        b.author, b.genre, b.price, p.paymentType
        FROM LoginDetails as l, Books as b, Payments as p
        WHERE
            l.userName = p.PaymentName AND
            b.title = p.bookname;
    ";
    $r = mysqli_query($conn, $query);

    if($r) {
        while($info = mysqli_fetch_array($r)) {
            echo "<br><br>Customer ID : " . $info['userID'];
            echo "<br>Customer Name   : " . $info['paymentName'];
            echo "<br>Book ISBN       : " . $info['ISBN'];
            echo "<br>Book Tiele      : " . $info['title'];
            echo "<br>Book Author     : " . $info['author'];
            echo "<br>Book Genre      : " . $info['genre'];
            echo "<br>Book Price      : " . $info['price'];
            echo "<br>Payment Type    : " . $info['paymentType'];                
        }
    }
    mysqli_close($conn);
?>