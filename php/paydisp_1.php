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
    <a href="../php/books.php" class="links">Goto Books</a>
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
?>