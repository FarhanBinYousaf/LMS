<?php

    include 'connection.php';
    if(empty($_SESSION['user']))
    {
        // If they are not, redirect them to the login page.
        header("Location: index.php");
        
        // Remember that this die statement is absolutely critical.  Without it,
        // people can view your members-only content without logging in.
        die("Redirecting to login.php");
    }
    if(isset($_POST['submit']))
    {
        $Uname = $_POST['name'];
        $Email = $_POST['email'];
        $Password = $_POST['password'];
        $Mobile = $_POST['mobile'];
        $Address = $_POST['address'];
        $filename = $_FILES['file']['name'];
            $InsertQuery = "INSERT INTO `lms_table`(`name`, `email`, `password`, `mobile`, `address`,`photo`) VALUES ('$Uname','$Email','$Password','$Mobile','$Address','$filename')";
            $ResultQuery = mysqli_query($conn,$InsertQuery);
            if($ResultQuery)
            {
               
               move_uploaded_file($_FILES["file"]["tmp_name"], "images/".$_FILES["file"]["name"]);
               header("location:index.php");
           }
            
    }
    
?>
