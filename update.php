<?php
	include 'connection.php';
	session_start();
	if(empty($_SESSION['user']))
    {
        // If they are not, redirect them to the login page.
        header("Location: index.php");
        
        // Remember that this die statement is absolutely critical.  Without it,
        // people can view your members-only content without logging in.
        die("Redirecting to login.php");
    }
	if(isset($_POST['update']))
	{
		$New_Name = $_POST['New_name'];
		$New_Mail = $_POST['New_mail'];
		$New_Mobile = $_POST['New_mobile'];
		$New_Address = $_POST['New_address'];
		$Update_Query = "UPDATE `lms-table` SET `name`= '$New_Name',`email`='$New_Mail',`mobile`='$New_Mobile',`address`= '$New_Address'";
		$Query_Run = mysqli_query($conn,$Update_Query);
}
?>
<script type="text/javascript">
	alert("Your Profile is Updated Successfully");
	window.location.href="user_dashboard.php";
</script>