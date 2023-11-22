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
    if (isset($_POST['button'])) {

        $isbn = $_POST['isbn'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $genre = $_POST['genre'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $publisher = $_POST['publisher'];
        $publication_date = $_POST['publication_date'];

        $query = "
            INSERT INTO Books (ISBN, Title, Author, Genre, Price, Quantity, Publisher, PublicationDate)
            VALUES
            ('$isbn','$title','$author', '$genre', '$price','$quantity','$publisher', '$publication_date');
        ";
        $r = mysqli_query($conn, $query);
        if($r) { echo "Insertion Successful !"; }
        else {
            echo "Insertion Failed !";
            exit();
        }
    }
    mysqli_close($conn);
?>