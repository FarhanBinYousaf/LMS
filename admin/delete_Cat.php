<?php 
	include '../connection.php';
	$NC = $_REQUEST['nc'];
	$DeleteQuery = "DELETE FROM `category` WHERE `cat_name` = '$NC'";
	$DeleteQueryRun = mysqli_query($conn,$DeleteQuery);
?>
<script type="text/javascript">
	alert("Category Deleted....");
	window.location.href="manage_category.php";
</script>