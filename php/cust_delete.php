<html>

<head>
    <title>CUSTOMER REGISTER</title>
    <link rel="stylesheet" href="../css/customer_delete.css">
    <link rel="stylesheet" href="../css/header-footer.css">
</head>

<body>
    <header>
        <h1 align="center">BOOK STORE MANAGEMENT SYSTEM</h1><br><br>
    </header>

    <div class="container">
        <form align="left" method="post" action="../customer_delete.php" onsubmit="redirectToHome()"
            style="font-family: verdana;" autocomplete="off" height="50%">

            <label for="userid" class="label"> USER ID:</label><br>
            <input class="input-boxes" size="55" type="text" id="userid" placeholder="" name="userid" required><br><br><br><br>

            <input type="submit" value="DELETE" class="button">
        </form>

        <div>
            <?php

            $conn = mysqli_connect("localhost", "root", "", "BMSystem");
            if ($conn) {
                echo "<br>Connection successful !";
            } else {
                echo "<br>Connection failed !";
                exit();
            }
            $query = "SELECT * FROM LoginDetails";
            $r1 = mysqli_query($conn, $query);
            if ($r1) {
                $n = mysqli_num_rows($r1);
                if ($n > 0) {
                    while ($info = mysqli_fetch_array($r1)) {
                        echo "<br><br>ID  : " . $info['userID'];
                        echo "<br>NAME  : " . $info['userName'];
                        echo "<br>EMAIL  : " . $info['email'];
                    }
                } else {
                    echo "<br> No records found";
                }
            } else {
                echo "<br>error in search operation: " . mysqli_error($conn);
                exit();
            }
            mysqli_close($conn);

            ?>
        </div>
    </div>

    <a href="../html/home.html" class="links">HOME</a>

    <footer>
        <h3>&copy; 2023 Book-Store-Management-System LLC.</h3>
        <p>All Rights Reserved !</p>
        <p>Developers : Sehal|Riya|Siya|Haysten</p>
    </footer>
</body>

</html