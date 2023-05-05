<?php
include("config.php");
$sid = $_GET['id'];
$sql = "DELETE FROM regions WHERE sid = {$sid}";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>Regions Deleted</p>";
	header("Location:regionsadd.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>Regions Not Deleted</p>";
	header("Location:regionsadd.php?msg=$msg");
}
mysqli_close($con);
?>
