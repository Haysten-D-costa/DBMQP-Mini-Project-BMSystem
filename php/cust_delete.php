<!DOCTYPE html>
<html>

<head>
    <title>CUSTOMER REGISTER</title>
    <link rel="stylesheet" href="../css/customer_delete.css">
    <link rel="stylesheet" href="../css/header-footer.css">
</head>

<body style="background-color: #212121; color:white;">
    <header>
        <h1 align="center">BOOK STORE MANAGEMENT SYSTEM</h1><br><br>
    </header>

    <div class="container">
        <form align="left" method="post" action="../php/customer_delete.php"
            style="font-family: verdana;" autocomplete="off">

            <label for="userid" class="label"> USER ID:</label><br>
            <input class="input-boxes" size="55" type="text" id="userid" placeholder="" name="userid" required><br><br>

            <input type="submit" value="DELETE" class="button">
            <br><br><br>
            <a href="../html/home.html" class="links">HOME</a>

        </form>

        <div>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "BMSystem");

            if ($conn) {
                $query = "SELECT * FROM User";
                $result = mysqli_query($conn, $query);

                if ($result) {
                    $num_rows = mysqli_num_rows($result);

                    if ($num_rows > 0) {
                        while ($info = mysqli_fetch_array($result)) {
                            echo "<br><br>ID  : " . $info['userID'];
                            echo "<br>NAME  : " . $info['userName'];
                            echo "<br>EMAIL  : " . $info['email'];
                        }
                    } else {
                        echo "<br> No records found";
                    }
                } else {
                    echo "<br>Error in search operation: " . mysqli_error($conn);
                }
                echo "<br><br><br><br>";
            } else {
                echo "<br>Connection failed !";
            }
            mysqli_close($conn);
            ?>
        </div>
    </div>    
    <br><br><br><br>
    <footer>
        <h3>&copy; 2023 Book-Store-Management-System LLC.</h3>
        <p>All Rights Reserved !</p>
        <p>Developers : Sehal|Riya|Siya|Haysten</p>
    </footer>
</body>

</html>
