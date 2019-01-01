<?php
	$con = mysqli_connect("localhost","root","","Tech_Box");
	if(!$con)
	{
		die("Connection Failed!");
	}
	else
	{
		echo "Connection Successful";
	}
?>