<?php

    $isbn = $_POST['isbn'];

    $conn = mysqli_connect("localhost", "root", "", "BMSystem");
    if($conn) { }
    else {
        echo "Connection Failed !";
        exit();
    }
    $isbn = $_POST['isbn'];
    $title = ($_POST['title'] != "") ? $_POST['title'] : "Title";
    $author = ($_POST['author'] != "") ? $_POST['author'] : "Author";
    $genre = ($_POST['genre'] != "") ? $_POST['genre'] : "Genre";
    $price = ($_POST['price'] != "") ? $_POST['price'] : "Price";
    $quantity = ($_POST['quantity'] != "") ? $_POST['quantity'] : "Quantity";
    $publisher = ($_POST['publisher'] != "") ? $_POST['publisher'] : "Publisher";
    
    $publication_date = ($_POST['publication_date'] != "") ? $_POST['publication_date'] : "PublicationDate";
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