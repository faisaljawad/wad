<?php
	require 'db_connection.php';

	function getProductBrands()
	{
		global $con;
		$getBrandsQuery = "select * from brands";
		$getBrandsResult = mysqli_query($con,$getBrandsQuery);
		while($row = mysqli_fetch_assoc($getBrandsResult))
		{
			$id = $row['Brand_id'];
			$title = $row['Brand_name'];
			echo "<option> $title </option>";
		}
	}
?>