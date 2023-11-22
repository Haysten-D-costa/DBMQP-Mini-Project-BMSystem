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
    <a href="../html/customer.html" class="links">Goto Customer Services</a>
    <a href="../html/home.html" class="links">Goto Home</a>
    <br><br>
</body>
<html>
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

        } else {
            echo "Connection Failed !";
        }
    } else {
        echo "Invalid request. Please provide a user ID.";
    }
    mysqli_close($conn);
?>
