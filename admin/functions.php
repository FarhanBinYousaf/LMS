<?php 
	
	function get_user_count()
	{
		include '../connection.php';
		$user_count = "";
		$query = "SELECT count(*) as user_count from `lms_table`";
		$Query_run = mysqli_query($conn,$query);
		while($row = mysqli_fetch_assoc($Query_run))
		{
			$user_count = $row['user_count'];
		}
		return($user_count);
	}

function get_book_count()
	{
		include '../connection.php';
		$book_count = "";
		$query = "SELECT count(*) as book_count from `booktable`";
		$Query_run = mysqli_query($conn,$query);
		while($row = mysqli_fetch_assoc($Query_run))
		{
			$book_count = $row['book_count'];
		}
		return($book_count);
	}

function get_category_count()
	{
		include '../connection.php';
		$cat_count = "";
		$query = "SELECT count(*) as cat_count from `category`";
		$Query_run = mysqli_query($conn,$query);
		while($row = mysqli_fetch_assoc($Query_run))
		{
			$cat_count = $row['cat_count'];
		}
		return($cat_count);
	}
function get_author_count()
	{
		include '../connection.php';
		$author_count = "";
		$query = "SELECT count(*) as author_count from `authors`";
		$Query_run = mysqli_query($conn,$query);
		while($row = mysqli_fetch_assoc($Query_run))
		{
			$author_count = $row['author_count'];
		}
		return($author_count);
	}
function get_issued_book_count()
	{
		include '../connection.php';
		$issued_book_count = "";
		$query = "SELECT count(*) as issued_book_count from `issued_books`";
		$Query_run = mysqli_query($conn,$query);
		while($row = mysqli_fetch_assoc($Query_run))
		{
			$issued_book_count = $row['issued_book_count'];
		}
		return($issued_book_count);
	}
?>