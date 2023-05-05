<?php

	$con = mysqli_connect("us-cdbr-east-06.cleardb.net","b61fb782a18161","f0793db9","heroku_a69fea095885345");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
?>
