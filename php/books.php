<?php
    $conn = mysqli_connect("localhost", "root", "", "BMSystem");
    if($conn) { echo "Successful connection !"; }
    else {
        echo "Failed connection !";
        exit();
    }
    $query = "SELECT * FROM Books;";
    $r = mysqli_query($conn, $query);

    $n = mysqli_num_rows($r);
    while($info = mysqli_fetch_array($r)) {
        echo "<br><br>";
        echo "<br>ISBN : ".$info['ISBN'];
        echo "<br>Title : ".$info['Title'];
        echo "<br>Author : ".$info['Author'];
        echo "<br>Genre : ".$info['Genre'];
        echo "<br>Price : ".$info['Price'];
        echo "<br>Quantity : ".$info['Quantity'];
        echo "<br>Publisher : ".$info['Publisher'];
        echo "<br>Publication Date : ".$info['PublicationDate'];
    }
?>