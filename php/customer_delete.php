<html>
        <header>
			<h1 align ="center">BOOK STORE MANAGEMENT SYSTEM</h1><br><br>
		</header>
<body>
    <div class="container">
        <div>
        
		<form align="left" method="post" action=""  onsubmit="redirectToHome()" style ="font-family:verdana;" autocomplete="off" height="50%">

			<label for="userid" class="label"> USER ID:</label><br>
			<input class="input-boxes" size ="55" type="text" id="userId" placeholder="" name="userId" required><br><br><br><br>
			<input type="submit" value="DELETE" class="button">
		</form>
        </div>
        <div>
                <?php
                
                $conn = mysqli_connect("localhost", "root", "", "BMSystem");
                if($conn)
                { echo "<br>Connection successful !"; }
                else {
                    alert("<br>Connection failed !");
                    exit();
                }
                $query = "SELECT * FROM LoginDetails";
                $r1 = mysqli_query($conn, $query);
                if($r1) 
                {
                    $n = mysqli_num_rows($r1);
                    if($n>0){
                        while($info=mysqli_fetch_array($r1)){
                            echo "<br><br>ID  : ".$info['userID'];
                            echo "<br>NAME  : ".$info['userName'];
                            echo "<br>EMAIL  : ".$info['email'];
                        }
                    }
                    else
                        echo "<br> No records found";
                }
                else {
                    echo "<br>error in search operation";
                    exit();
                }
                mysqli_close($conn);


                ?>
        </div>
        <a href="../html/home.html" class="links">HOME</a>
    </div>
    <footer>
			<h3>&copy; 2023 Book-Store-Management-System LLC.</h3>
			<p>All Rights Reserved !</p>
			<p>Developers : Sehal|Riya|Siya|Haysten</p>
	</footer>
</body>
</html>

<html>
	<head>
		<title>CUSTOMER REGISTER</title>
		<link rel="stylesheet" href="">
		<link rel="stylesheet" href="../css/header-footer.css">
	</head>
	<body>
		
		
<?php
    $user=$_POST['userId'];
    $conn = mysqli_connect("localhost", "root", "", "BMSystem");
    if($conn) { }
    else {
        echo "Connection Failed !";
        exit();
    }
    
    $query = "
        DELETE FROM LoginDetails 
        WHERE userId= '$userId;
        ";
    $r = mysqli_query($conn, $query);
    if($r) { echo "Deletion Successful !"; }
    else {
        echo "Deletion Failed !";
        exit();
    }
        
?>