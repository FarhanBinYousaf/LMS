<?php
	session_start();
	include '../connection.php';
	$Select_Query = "SELECT * FROM `admin` WHERE email ='$_SESSION[email]'";
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
		$Change_password_Query = "UPDATE `admin` SET `password`= '$New_password' WHERE email ='$_SESSION[email]'";
		$Update_Query_Run = mysqli_query($conn,$Change_password_Query);
		}
	}
?>
<script type="text/javascript">
	alert("Password Updated Successfully");
	window.location.href="admin_dashboard.php";
</script>