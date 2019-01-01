<?php
	require "db_connection.php";

	function getCategories()
	{
		global $con;
		$getCategoryQuery = "select * from categories";
		$getCategoriesResult = mysqli_query($con,$getCategoryQuery);
		while($row = mysqli_fetch_assoc($getCategoriesResult))
		{
			$id = $row['category_id'];
			$title = $row['categoty_name'];
			echo "<li><a class='nav-link'  href='#'>$title</a></li>";
		}
	}
?>