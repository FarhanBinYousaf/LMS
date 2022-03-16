<?php
 include 'connection.php';
    session_start();
    
    $Ringer = false;
   
    if(isset($_POST['login']))
    {
        $User_mail = $_POST['mail'];
        $User_code = $_POST['code'];
        $Login_Query = "SELECT * FROM `lms_table` WHERE `email` = '$User_mail' && `password` = '$User_code'";
        $Login_Result = mysqli_query($conn,$Login_Query);
        $row = mysqli_fetch_assoc($Login_Result);
        $Mail = $row['email'];
        $Code = $row['password'];
        if($Mail == $User_mail)
        {
            if($Code == $User_code)
            {
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['ID']    = $row['ID'];
                $_SESSION['photo'] = $row['photo'];
                $_SESSION['status'] = true;
                header("location:user_dashboard.php");
            }
        }  
        else 
        {
            $Ringer = "Sorry!.... Wrong Email and Password Combination";
        }
    }

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <title>LMS</title>
    <style>
    .side {
        background-color: gray;
        color: white;
        margin-left: 20px;
        padding: 10px;
    }
    


    .side ul li {
        margin-bottom: 5px;

    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Liberary Management System(LMS)</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="admin/index.php">Admin Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php">User Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="signup.php">Register </a>
                </li>


            </ul>

        </div>
    </nav><br>
    <span>
        <marquee class="bg-dark text-white">This is Liberary Management System. Liberary Opens at 8:00 AM and close at
            6:00 PM</marquee>
    </span><br><br>
    <div class="row">
        <div class="col-md-2 side">
            <h5 class="ml-4">Library Timing</h5>
            <ul>
                <li>Opening Time: 8:00 AM</li>
                <li>Closing Time: 8:00 AM</li>
                <li>(Sunday Off)</li>
            </ul>
            <h5 class="ml-4">What we provide?</h5>
            <ul>
                <li>Latest Furniture </li>
                <li>Free Wi-fi</li>
                <li>Daily Newspaper</li>
                <li>Discussion Room</li>
                <li>Weather Suited Water</li>
                <li>Peacefull Environment</li>
            </ul>
        </div>
        <div class="col-md-8 ml-4">
            <center>
                <h3>User Login Form</h3>
            </center>
            <form method="POST" class="ml-4">


                <div class="form-group">
                    <label for="exampleInputPassword1">Email ID</label>
                    <input type="email" name="mail" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="code" class="form-control">
                </div>

                <button type="submit" name="login" class="btn btn-primary">Login</button>

            </form>
            <center><span class="alert-danger"><?php echo $Ringer; ?></span></center>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>