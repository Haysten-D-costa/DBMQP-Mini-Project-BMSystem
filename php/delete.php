<html>
<head>
    <link rel="stylesheet" href="../css/header-footer.css">
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
    if (isset($_POST['button'])) {  // on click of any button....
        
        $query = "
            DELETE FROM Books 
            WHERE ISBN = '$isbn';
        ";
        $r = mysqli_query($conn, $query);
        if($r) { echo "Entry with ISBN $isbn deletion successful !"; }
        else {
            echo "Deletion Failed !";
            exit();
        }
    }
    mysqli_close($conn); 
?>