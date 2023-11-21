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