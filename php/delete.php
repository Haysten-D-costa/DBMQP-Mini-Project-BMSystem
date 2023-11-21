<html>
<head>
    <style>
        body {
            color: whitesmoke;
	        background-color: #212121;
        }
    </style>
</head>
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
        $action = $_POST['button']; // store the operation(value) of the button -i.e- insert / delete.... 
        if ($action === 'DELETE') { // delete logic....
            $query = "
                DELETE FROM Books 
                WHERE ISBN = '$isbn';
            ";
            $r = mysqli_query($conn, $query);
            if($r) { }
            else {
                echo "Deletion Failed !";
                exit();
            }
        }
    }
?>