<?php
	require "db_connection.php";

	function getBrands()
	{
		global $con;
		$getBrandsQuery = "select * from Brands";
		$getBrandsResult = mysqli_query($con,$getBrandsQuery);
		while($row = mysqli_fetch_assoc($getBrandsResult))
		{
			$id = $row['Brand_id'];
			$title = $row['Brand_name'];
			echo "<li><a class='nav-link' href='#'>$title</a></li>";
		}
	}
?>