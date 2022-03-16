<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "lms";
    $conn = mysqli_connect($servername,$username,$password,$database);
    if(!$conn)
    {
        echo "Sorry! we cannot Connet with database";
    }
    

?>