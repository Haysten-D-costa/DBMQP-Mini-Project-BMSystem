<html>
    <head>
        <title>BMSystem-BOOKSPage</title>
        <link rel="stylesheet" href="../css/books.css">
        <link rel="stylesheet" href="../css/header-footer.css">
        <style>
            table {
                width: 90%;
                color: white;
                text-align: left;
                border: 0px 2px 10px;
            }
            table thead tr {
                color: whitesmoke;
                background-color: #c00;
                
            }
            table th, td {
                padding: 12px 15px;
                border: 1px solid black;
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
        <header>
            <h1 align="center">BOOK STORE MANAGEMENT SYSTEM</h1>
        </header>
        <br><br>
        <form action="" method="POST">
            <div class="top-search-container">
                <div>
                    <!-- <label for="search-bar" id="search-label">SEARCH : </label> -->
                    <input type="text" id="search-bar" name="search-bar" placeholder="Search" class="search-bar">
                </div>
                <input type="submit" value="SEARCH" id="search-button" name="search-button" class="button">
                
                <select name="filter" id="filter" style="width: 120px; height: 40px; background-color:#c00; border:none; color:whitesmoke; font-size:20px; font-weight:bolder;">
                    <option value="All" selected>All Books</option>
                    <option value="ISBN">Book ISBN</option>
                    <option value="Title">Book Title</option>
                    <option value="Author">Book Author</option>
                    <option value="Genre">Book Genre</option>
                    <option value="Price">Book Price</option>
                    <option value="Quantity">Book Quantity</option>
                    <option value="Publisher">Book Publisher</option>
                    <option value="PublicationDate">Book Publication Date</option>
                </select>
                <select name="views" id="views" style="width: 80px; height: 40px; background-color:#c00; border:none; color:whitesmoke; font-size:20px; font-weight:bolder; margin-left:10px;">
                    <option value="view1">View 1</option>
                    <option value="view2">View 2</option>
                </select>
            </div>
        </form>
        <div class="bottom-display-container" align="center">
            <br><br>
            <table class="table-content">
                <thead>
                    <?php
                        $conn = mysqli_connect("localhost", "root", "", "BMSystem");
                        if($conn) { }
                        else {
                            echo "Failed connection !";
                            exit();
                        }

                        if(isset($_POST['views'])) {
                            $view_by = $_POST['views'];
                            if($view_by == "view1") {
                                echo "<tr>
                                    <th>Book ISBN</th>
                                    <th>Book Title</th>
                                    <th>Book Author</th>
                                    <th>Book Genre</th>
                                    <th>Book Price</th>
                                    <th>Book Quantity</th>
                                    <th>Book Publisher</th>
                                    <th>Book Publication Date</th>
                                    </tr>";
                            } else {
                                echo "<tr>
                                    <th>Book ISBN</th>
                                    <th>Book Title</th>
                                    <th>Book Author</th>
                                    <th>Book Genre</th>
                                    </tr>";
                            }

                        }
                        
                    ?>
                    
                </thead>
                <tbody>
                    <?php
                        $conn = mysqli_connect("localhost", "root", "", "BMSystem");
                        if($conn) { }
                        else {
                            echo "Failed connection !";
                            exit();
                        }
                        
                        // display only if user searches for something....
                        if(isset($_POST['search-button'])) {
                            $search_key = $_POST['search-bar'];
                            $search_by = $_POST['filter'];

                            $query = "SELECT * FROM Books WHERE $search_by = '$search_key';";
                            if($search_by == "All") { $query = "SELECT * FROM Books;"; }
                            $r = mysqli_query($conn, $query);

                            if($r) {
                                if($view_by == "view1") {
                                    while($info = mysqli_fetch_array($r)) {
                                        echo "<tr>
                                            <td>" . $info["ISBN"] ."</td>
                                            <td>" . $info["Title"] . "</td>
                                            <td>" . $info["Author"] . "</td>
                                            <td>" . $info["Genre"] . "</td>
                                            <td>" . $info["Price"] . "</td>
                                            <td>" . $info["Quantity"] . "</td>
                                            <td>" . $info["Publisher"] . "</td>
                                            <td>" . $info["PublicationDate"] . "</td>
                                            </tr>";
                                    }
                                } else {
                                    while($info = mysqli_fetch_array($r)) {
                                        echo "<tr>
                                            <td>" . $info["ISBN"] ."</td>
                                            <td>" . $info["Title"] . "</td>
                                            <td>" . $info["Author"] . "</td>
                                            <td>" . $info["Genre"] . "</td>
                                            </tr>";
                                        }
                                }
                            }
                            else {
                                echo "Display Operation Failed !"; 
                                exit(); 
                            }
                        }          
                    ?>
                </tbody>
            </table>
        </div>
        <div align="center" class="operation-container">
            <a href="../html/home.html" target="_self" style="width:300px">HOME</a><br>
            <a href="../html/insert.html">INSERT</a>
            <a href="../html/update.html">UPDATE</a>
            <a href="../html/delete.html">DELETE</a>
        </div>
        <footer>
            <h3>&copy; 2023 Book-Store-Management-System LLC.</h3>
            <p>All Rights Reserved !</p><br>
            <p>Developers : Sehal | Riya | Siya | Haysten</p>
        </footer>
    </body>
</html>