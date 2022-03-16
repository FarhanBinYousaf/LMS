<?php 
	include '../connection.php';
	$AI = $_REQUEST['ioa'];
	echo $AI;
	$Delete = "DELETE FROM `authors` WHERE `author_id` = '$AI'";
	$QueryRun = mysqli_query($conn,$Delete);

	// include '../connection.php';
	// $AIO = $_REQUEST['ioa'];
	// $DeleteQuery = "DELETE FROM `authors` WHERE `author_id` = '$AIO'";
	// $DeleteQueryRun = mysqli_query($conn,$DeleteQuery);
?>
<script type="text/javascript">
	alert("Category Deleted....");
	window.location.href="manage_author.php";
</script>