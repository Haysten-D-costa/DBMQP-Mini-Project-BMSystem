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