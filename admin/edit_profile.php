<?php
    session_start();
    include '../connection.php';
    $Select_Query = "SELECT * FROM `admin` WHERE email = '$_SESSION[email]'";
    $Query_Run = mysqli_query($conn,$Select_Query);
    $Fetch_Row = mysqli_fetch_assoc($Query_Run);
    
        $name = $Fetch_Row['name'];
        $Email = $Fetch_Row['email'];
        $Mobile = $Fetch_Row['mobile'];


	if(isset($_POST['update']))
	{
		$New_Name = $_POST['New_name'];
		$New_Mail = $_POST['New_mail'];
		$New_Mobile = $_POST['New_mobile'];

		$Update_Query = "UPDATE `admin` SET `name`= '$New_Name',`email`='$New_Mail',`mobile`='$New_Mobile'";
		$Query_Result = mysqli_query($conn,$Update_Query);
		 if($Query_Result){
		 	?>
            <script type="text/javascript"> 
                alert("Your Profile is Updated Successfully");
                window.location.href="admin_dashboard.php";
            </script>
<?php 

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
    <title>Profile </title>
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
        <a class="navbar-brand" href="admin_dashboard.php">Liberary Management System(LMS)</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <font style="color: white;" class="ml-auto">
                <span><strong> Welcome: <?php echo $_SESSION['name'];?> </strong></span>
            </font>
            <font style="color: white;" class="ml-auto">
                <span><strong> Email: <?php echo $_SESSION['email'];?> </strong></span>
            </font>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link text-white dropdown-toggle" data-toggle="dropdown" href="#">My Profile</a>
                    <div class="dropdown-menu">
                        <a href="view_profile.php" class="dropdown-item">View Profile</a>
                        <a href="Edit_profile.php" class="dropdown-item">Edit Profile</a>
                        <a href="" class="dropdown-item">Change Password</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="logout.php">Logout </a>
                </li>
                


            </ul>   

        </div>
    </nav><br>
    <span>
        <marquee class="bg-dark text-white">This is Liberary Management System. Liberary Opens at 8:00 AM and close at
            6:00 PM</marquee>
   
</span><br><br>
<div class="row">
     <div class="col-md-4"></div>
      <div class="col-md-4">
          <form method="POST" class="ml-4">
                <div class="form-group">
                    <label for="exampleInputPassword1">Name </label>
                    <input type="text" name="New_name" value="<?php echo $name; ?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email ID</label>
                    <input type="email" name="New_mail" value="<?php echo $Email; ?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile </label>
                    <input type="text" name="New_mobile" value="<?php echo $Mobile;?>" class="form-control" >
                </div>
                
                <button type="submit" name="update" class="btn btn-primary">Update</button>

            </form>
      </div>
       <div class="col-md-4"></div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) --
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