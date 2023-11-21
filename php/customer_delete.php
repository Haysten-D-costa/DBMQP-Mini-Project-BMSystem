<?php
    // Check if the form variable is set
    if(isset($_POST['userid'])) {
        $userId = $_POST['userid'];
        
        $conn = mysqli_connect("localhost", "root", "", "BMSystem");
        
        if($conn) {
            // Use mysqli_real_escape_string to prevent SQL injection
            $userId = mysqli_real_escape_string($conn, $userId);

            $query = "DELETE FROM LoginDetails WHERE userID = '$userId'";
            $r = mysqli_query($conn, $query);

            if($r) {
                echo "Deletion Successful !";
            } else {
                echo "Deletion Failed !";
            }

            mysqli_close($conn);
        } else {
            echo "Connection Failed !";
        }
    } else {
        echo "Invalid request. Please provide a user ID.";
    }
?>
