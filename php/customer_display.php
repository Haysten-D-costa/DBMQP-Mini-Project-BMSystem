<?php
   
    $conn = mysqli_connect("localhost", "root", "", "BMSystem");
    if($conn)
    { echo "<br>Connection successful !"; }
    else {
        alert("<br>Connection failed !");
        exit();
    }
    $query = "SELECT * FROM Customers";
    $r = mysqli_query($conn, $query);
    if($r) 
    {
        $n = mysqli_num_rows($r1);
        if($n>0){
            while($info=mysqli_fetch_array($r1)){
                echo "<br><br>ID  : ".$info['CustomerID'];
                echo "<br>NAME  : ".$info['name'];
                echo "<br>CONTACT INFORMATION  : ".$info['ContactInformation'];
                echo "<br>EMAIL  : ".$info['Email'];
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