
<?php
    $userId = $_POST['userid'];
    $conn = mysqli_connect("localhost", "root", "", "BMSystem");
    if($conn) { }
    else {
        echo "Connection Failed !";
        exit();
    }
    
    $query = "
        DELETE FROM LoginDetails 
        WHERE userId= '$userId';
        ";
    $r = mysqli_query($conn, $query);
    if($r) { echo "Deletion Successful !"; }
    else {
        echo "Deletion Failed !";
        exit();
    }
        
?>

<?php
    // Get user ID from the form
    $userId = $_POST['userid'];

    // Establish a database connection
    $conn = mysqli_connect("localhost", "root", "", "BMSystem");
    if(!$conn) {
        echo "Connection Failed!";
        exit();
    }

    // Use prepared statement to avoid SQL injection
    $query = "DELETE FROM LoginDetails WHERE userId = '$userId'";
    $stmt = mysqli_prepare($conn, $query);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "s", $userId);

    // Execute the statement
    $result = mysqli_stmt_execute($stmt);

    // Check if deletion was successful
    if($result) {
        echo "Deletion Successful!";
    } else {
        echo "Deletion Failed!";
        exit();
    }

    // Close the statement and the connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
?>