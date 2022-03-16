<?php
    session_start();
    include '../connection.php';
    require('functions.php');
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
    <title>User Dashboard</title>
    <style>
    .side {
        background-color: gray;
        color: white;
        margin-left: 20px;
        padding: 10px;
    }
    body{
        background-color:black;
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
            <font style="color: white;" class="ml-auto">
                <span><strong> Welcome: <?php echo  $_SESSION['name']; ?> </strong></span>
            </font>
            <font style="color: white;" class="ml-auto">
                <span><strong> Email: <?php echo $_SESSION['email']; ?> </strong></span>
            </font>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link text-white dropdown-toggle" data-toggle="dropdown" href="#">My Profile</a>
                    <div class="dropdown-menu">
                        <a href="view_profile.php" class="dropdown-item">View Profile</a>
                        <a href="edit_profile.php" class="dropdown-item">Edit Profile</a>
                        <a href="change_password.php" class="dropdown-item">Change Password</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="logout.php">Logout </a>
                </li>
            </ul>   
        </div>
    </nav>


    <nav class="navbar navbar-expand-lg navbar-blue">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navSupportedContent"
            aria-controls="navSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="background-color: black;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navSupportedContent">
            <ul class="navbar-nav navbar-center">
                <li class="nav-item">
                    <a class="nav-link" href="admin_dashboard.php">Dashboard </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="#">Books</a>
                    <div class="dropdown-menu">
                        <a href="add_books.php" style="color:black;" class="dropdown-item">Add New Book</a>
                        <a href="manage_book.php" class="dropdown-item">Manage Books</a>
                    </div>
                </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="#">Category</a>
                    <div class="dropdown-menu">
                        <a href="add_category.php" style="color:black;" class="dropdown-item">Add New Category</a>
                        <a href="manage_category.php" class="dropdown-item">Manage Category</a>
                    </div>
                </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="#">Authors</a>
                    <div class="dropdown-menu">
                        <a href="add_author.php" style="color:black;" class="dropdown-item">Add New Author</a>
                        <a href="manage_author.php" class="dropdown-item">Manage Author</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="issue_book.php">Issue Book </a>
                </li>
            </ul>   
        </div>
    </nav>
    <span>
        <marquee class="bg-dark text-white">This is Liberary Management System. Liberary Opens at 8:00 AM and close at 6:00 PM</marquee>
    </span><br>

<div class="row">
   <div class="col-md-3">
        <div class="card">
          <div class="card-header bg-dark" style="color:white;">Registered Users</div>
              <div class="card-body">
                <p class="card-text">No. of Total Users: <?php echo get_user_count(); ?></p>
                    <a href="view_users.php" class="btn btn-primary">View Users</a>
              </div>
        </div>
   </div> 
    <div class="col-md-3">
        <div class="card">
          <div class="card-header bg-dark" style="color:white">Registered Books</div>
              <div class="card-body">
                <p class="card-text">No. of Total Books Available: <?php echo get_book_count(); ?></p>
                    <a href="registered_books.php" class="btn btn-success">View Books</a>
              </div>
        </div>
   </div> 
    <div class="col-md-3">
        <div class="card">
          <div class="card-header bg-dark" style="color:white;">Registered Category</div>
              <div class="card-body">
                <p class="card-text">No. of Books Category:<?php echo get_category_count(); ?></p>
                    <a href="reg_category.php" class="btn btn-info">View Category</a>
              </div>
        </div>
   </div> 
    <div class="col-md-3">
        <div class="card">
          <div class="card-header bg-dark" style="color:white;">Registered Authors</div>
              <div class="card-body">
                <p class="card-text">No. of Available Authors: <?php echo get_author_count(); ?></p>
                    <a href="reg_authors.php" class="btn btn-danger">View Authors</a>
              </div>
        </div>
   </div>
</div><br>
<div class="row">
    <div class="col-md-3">
        <div class="card">
          <div class="card-header bg-dark" style="color:white;">Issued Books</div>
              <div class="card-body">
                <p class="card-text">No. of Issued Books: <?php echo get_issued_book_count(); ?></p>
                    <a href="issued_book.php" class="btn btn-warning">View Issued Books</a>
            </div>
        </div>
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