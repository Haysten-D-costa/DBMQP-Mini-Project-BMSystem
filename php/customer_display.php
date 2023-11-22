<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/customer.css">
    <link rel="stylesheet" href="../css/header-footer.css">
    <style>
        /* customer.css */

        body {
            font-family: Arial, sans-serif;
            background-color: #202020;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        .record {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        </style>

</head>
<body>
    <br><br>
    <div class="button-row" align="center">
        <a href="../html/home.html" class="links">HOME</a>
        <a href="../html/customer.html" class="links">CUSTOMER SERVICE</a>
    </div>
    <div class="container">
        <h2>User Records</h2>

        <?php
            $conn = mysqli_connect("localhost", "root", "", "BMSystem");
            if (!$conn) {
                echo "<br>Connection failed !";
                exit();
            }
        
            $query = "SELECT * FROM LoginDetails";
            $r1 = mysqli_query($conn, $query);
        
            if ($r1) {
                $n = mysqli_num_rows($r1);
                if ($n > 0) {
                    while ($info = mysqli_fetch_array($r1)) {
                        echo '<div class="record">';
                        echo '<p>ID: ' . $info['userID'] . '</p>';
                        echo '<p>Name: ' . $info['userName'] . '</p>';
                        echo '<p>Email: ' . $info['email'] . '</p>';
                        echo '</div>';
                    }
                } else {
                    echo "<br> No records found";
                }
            } else {
                echo "<br>Error in search operation: " . mysqli_error($conn);
                exit();
            }
            mysqli_close($conn);
        ?>

    </div>
</body>
</html>
