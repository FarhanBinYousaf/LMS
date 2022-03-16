<?php 
	include '../connection.php';
	$B_No = $_REQUEST['nb'];
	$Delete_Query = "DELETE FROM `booktable` WHERE `bookno` = '$B_No'";
	$Delete_Query_Run = mysqli_query($conn,$Delete_Query);
?>
<script type="text/javascript">
	alert("Book Deleted....");
	window.location.href="manage_book.php";
</script>