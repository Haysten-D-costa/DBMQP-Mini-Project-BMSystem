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

    $isbn = $_POST['isbn'];

    $conn = mysqli_connect("localhost", "root", "", "BMSystem");
    if($conn) { }
    else {
        echo "Connection Failed !";
        exit();
    }
    $isbn = $_POST['isbn'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $publisher = $_POST['publisher'];
    $publication_date = $_POST['publication_date'];
    
    if (isset($_POST['button'])) {  // on click of any button....
        $action = $_POST['button']; // store the operation(value) of the button -i.e- insert / delete.... 

        if ($action === 'UPDATE') { // update logic....(not 100% functional)
            // query to update data of the database....
            $query = "
                UPDATE Books
                SET Title = '$title',
                    Author = '$author',
                    Genre = '$genre',
                    Price = '$price',
                    Quantity = '$quantity',
                    Publisher = '$publisher',
                    PublicationDate = '$publication_date'
                WHERE ISBN = '$isbn';
            ";
            $r = mysqli_query($conn, $query);
            if($r) { echo "Update Successful !"; }
            else {
                echo "Update Failed !";
                exit();
            }
        }
    }
?>