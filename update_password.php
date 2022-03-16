<?php
	session_start();
	include 'connection.php';
	if(empty($_SESSION['user']))
    {
        // If they are not, redirect them to the login page.
        header("Location: index.php");
        
        // Remember that this die statement is absolutely critical.  Without it,
        // people can view your members-only content without logging in.
        die("Redirecting to login.php");
    }
	$Select_Query = "SELECT * FROM `lms_table` WHERE email ='$_SESSION[email]'";
	$Query_Run = mysqli_query($conn,$Select_Query);
	while ($Fetch_Query= mysqli_fetch_assoc($Query_Run)) 
	{
		$Old_password = $Fetch_Query['password'];
	}
	if($Old_password == $_POST['old_password'])
	{
		if(isset($_POST['edit']))
		{
			$New_password = $_POST['New_password'];
		$Change_password_Query = "UPDATE `lms_table` SET `password`= '$New_password' WHERE email ='$_SESSION[email]'";
		$Update_Query_Run = mysqli_query($conn,$Change_password_Query);
		}
	}
?>
<script type="text/javascript">
	alert("Password Updated Successfully");
	window.location.href="user_dashboard.php";
</script>