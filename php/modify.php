<?php

    $isbn = $_POST['isbn'];

    $conn = mysqli_connect("localhost", "root", "", "BMSystem");
    if($conn) { }
    else {
        echo "Connection Failed !";
        exit();
    }
    if (isset($_POST['button'])) {  // on click of any button....
        $action = $_POST['button']; // store the operation(value) of the button -i.e- insert / delete.... 

        if ($action === 'INSERT') { // insert logic....
            $isbn = $_POST['isbn'];
            $title = ($_POST['title'] != "") ? $_POST['title'] : NULL;
            $author = ($_POST['author'] != "") ? $_POST['author'] : NULL;
            $genre = ($_POST['genre'] != "") ? $_POST['genre'] : NULL;
            $price = ($_POST['price'] != "") ? $_POST['price'] : NULL;
            $quantity = ($_POST['quantity'] != "") ? $_POST['quantity'] : NULL;
            $publisher = ($_POST['publisher'] != "") ? $_POST['publisher'] : NULL;
            $publication_date = ($_POST['publication_date'] != "") ? $_POST['publication_date'] : NULL;
            
            // query to insert data to the database....
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

        } else if ($action === 'DELETE') { // delete logic....
            $query = "
                DELETE FROM Books 
                WHERE ISBN = '$isbn';
            ";
            $r = mysqli_query($conn, $query);
            if($r) { echo "Deletion Successful !"; }
            else {
                echo "Deletion Failed !";
                exit();
            }
        } else if ($action === 'UPDATE') { // update logic....(not 100% functional)
            $isbn = $_POST['isbn'];
            $title = ($_POST['title'] != "") ? $_POST['title'] : "Title";
            $author = ($_POST['author'] != "") ? $_POST['author'] : "Author";
            $genre = ($_POST['genre'] != "") ? $_POST['genre'] : "Genre";
            $price = ($_POST['price'] != "") ? $_POST['price'] : "Price";
            $quantity = ($_POST['quantity'] != "") ? $_POST['quantity'] : "Quantity";
            $publisher = ($_POST['publisher'] != "") ? $_POST['publisher'] : "Publisher";
            $publication_date = ($_POST['publication_date'] != "") ? $_POST['publication_date'] : "PublicationDate";

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